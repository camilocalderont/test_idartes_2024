<?php

namespace App\Modulos\TipoPersona\Repository;

use App\Modulos\TipoPersona\tipoPersona;
use App\Modulos\Usuario\User;
use Illuminate\Support\Facades\DB;
use App\Modulos\TipoPersona\Repository\TipoPersonaInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DateTime;

class TipoPersonaRepository implements TipoPersonaInterface
{

	public function obtenerUsuarioPorId($i_pk_id)
	{
		return tipoPersona::find($i_pk_id);
	}

	public function crear($request)
	{
	}

	public function actualizar($request, $id)
	{
	}

	public function obtener($id, $relaciones = [])
	{
	}
	public function eliminar($id)
	{
	}
	public function obtenerTodo($relaciones = [])
	{
	}
	public function dataTable($relaciones = [])
	{
	}
	public function consultarUsuarios($where, $request)
	{
		$tipoId = null;
		if ($request->has('rol_id')) {
			$tipoId = $request->rol_id;
		} else if ($request->has('cargo_id')) {
			$tipoId = $request->cargo_id;
		}
		if (!$tipoId) {
			return response()->json(['error' => 'NO se ha podido realizar la busqueda']);
		}

		$tipoPersonas = TipoPersona::where('tipo_id', $tipoId)->get();
		return $tipoPersonas;
	}

	public function guardarCargos($request)
	{
		$guardo = true;
		$datos = $request->all();

		if (isset($request->i_pk_id)) {
			$cargo = tipoPersona::find($request->i_pk_id);
		} else {
			$cargo = new tipoPersona();
		}

		$cargo->user_id = $datos['user_id'];
		$cargo->tipo_id = $datos['tipo_id'];
		$cargo->dt_fecha_posesion = $datos['dt_fecha_posesion'];
		$cargo->dt_fecha_retiro = $datos['dt_fecha_retiro'];
		$cargo->i_fk_id_area = $datos['i_fk_id_area'];
		$cargo->i_encargo = isset($datos['i_encargo']) ? $datos['i_encargo'] : 0;

		$anexoPDF = $request->file('vc_anexo_soporte_oficio');
		if ($anexoPDF) {
			$ubicacion = $cargo->user_id . "/cargos/" . $cargo->tipo_id . "/";
			$nombreArchivo =  $this->sanearNombre($anexoPDF->getClientOriginalName());

			if ($cargo->vc_anexo_soporte_oficio) {
				$anexoExistente = $ubicacion . $cargo->vc_anexo_soporte_oficio;
				Storage::disk('anexo')->delete($anexoExistente);
			}

			$storageSave = Storage::disk('anexo')->putFileAs(
				$ubicacion,
				$anexoPDF,
				$nombreArchivo
			);

			if ($storageSave) {
				$url = url('/') . "/storage/anexo/" . $ubicacion . $nombreArchivo;
				$cargo->vc_anexo_ruta = $url;
				$cargo->vc_anexo_soporte_oficio = $nombreArchivo;
				$rutaSistema = storage_path() . "/app/public/anexo/" . $ubicacion . $nombreArchivo;
				$cargo->vc_anexo_ruta_sistema = $rutaSistema;
			}
		}

		if ($cargo->save()) {
			$mensaje = [
				'title' => 'Guardado exitoso',
				'message' => '¡Se ha guardado la información correctamente!',
				'type' => 'success'
			];
		} else {
			$mensaje = [
				'title' => 'Error de guardado',
				'message' => 'No fue posible guardar la información',
				'type' => 'error'
			];
		}

		return response()->json($mensaje);
		return $guardo;
	}



	public function borrarCargos($request)
	{
		$elimino = 1;
		if (isset($request->id)) {
			$cargo = tipoPersona::find($request->id);
			if ($cargo) {
				$ubicacion = $cargo->user_id . "/cargos/" . $cargo->tipo_id . "/";
				if ($cargo->vc_anexo_soporte_oficio) {
					$anexoExistente = $ubicacion . $cargo->vc_anexo_soporte_oficio;
					Storage::disk('anexo')->delete($anexoExistente);
				}
				$cargo->delete();
				$elimino = 0;
			}
		}
		return $elimino;
	}

	public function validacionFechaExistente($request)
	{
		$validar = true;
		$datos = $request->all();
		$rolesExistentes = $this->mostrarRegistros($request);

		foreach ($rolesExistentes as $rolExistente) {
			$AreaExistente = $rolExistente->i_fk_id_area;
			$fechaPosesionExistente = new DateTime($rolExistente->dt_fecha_posesion);
			$fechaRetiroExistente = new DateTime($rolExistente->dt_fecha_retiro);

			$fechaPosesionForm = new DateTime($datos['dt_fecha_posesion']);
			$fecharetiroForm = new DateTime($datos['dt_fecha_retiro']);

			if (($datos['i_fk_id_area'] == $AreaExistente)) {
				if (
					$fechaPosesionForm > $fecharetiroForm ||
					($fechaPosesionForm >= $fechaPosesionExistente && $fechaPosesionForm <= $fechaRetiroExistente) ||
					($fecharetiroForm >= $fechaPosesionExistente && $fecharetiroForm <= $fechaRetiroExistente)
				) {
					$validar = false;
					break;
				}
			}
		}
		if (!$validar) {
			$mensaje = [
				'title' => 'Error de validación',
				'message' => 'Las fechas se solapan con registros existentes.',
				'type' => 'error',
				'validar' => $validar
			];
		} else {
			$mensaje = [
				'title' => 'Validación exitosa',
				'message' => 'El rol y el areá es válido',
				'type' => 'success',
				'validar' => $validar
			];
		}
		return response()->json($mensaje);
	}

	public function mostrarRegistros($request)
	{
		$datos = $request->all();

		$rolesExistentes = tipoPersona::where('tipo_id', $datos['tipo_id'])
			->where('i_pk_id', '!=', $datos['i_pk_id'])
			->get();

		return $rolesExistentes;
	}

	public function getReglasValidacion()
	{
		Validator::extend('same_or_after', function ($attribute, $value, $parameters, $validator) {
			$otherField = $parameters[0];
			$otherFieldValue = $validator->getData()[$otherField];

			if ($otherFieldValue === null) {
				return true; // Si el campo relacionado está vacío, se considera válido
			}

			return strtotime($value) >= strtotime($otherFieldValue);
		});

		return [
			'user_id' => 'required',
			'i_fk_id_area' => 'required',
			'dt_fecha_posesion' => 'required',
			'dt_fecha_retiro' => ['required', 'same_or_after:dt_fecha_posesion'],
			//'vc_anexo_soporte_oficio' => 'required',
		];
	}

	public function getMensajesValidacion()
	{
		return [
			'user_id.required' => 'El usuario es requerido.',
			'i_fk_id_area.required' => 'El área es requerida.',
			'dt_fecha_posesion.required' => 'La fecha de posesión es requerida.',
			'dt_fecha_retiro.required' => 'La fecha de retiro es requerida.',
			//'vc_anexo_soporte_oficio.required' => 'El anexo es requerido.',
			//'dt_fecha_posesion.date_format' => 'El campo fecha de inicio debe tener el formato Y-m-d',
			//'dt_fecha_retiro.date_format' => 'El campo fecha de inicio debe tener el formato Y-m-d',
			'dt_fecha_retiro.after' => 'La fecha de fin debe ser mayor que la fecha de posesion',
		];
	}


	public function sanearNombre($nombre)
	{

		//Reemplazamos la A y a
		$nombre = str_replace(
			['Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'],
			['A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'],
			$nombre
		);

		//Reemplazamos la E y e
		$nombre = str_replace(
			['É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'],
			['E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'],
			$nombre
		);

		//Reemplazamos la I y i
		$nombre = str_replace(
			['Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'],
			['I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'],
			$nombre
		);

		//Reemplazamos la O y o
		$nombre = str_replace(
			['Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'],
			['O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'],
			$nombre
		);

		//Reemplazamos la U y u
		$nombre = str_replace(
			['Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'],
			['U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'],
			$nombre
		);

		//Reemplazamos la N, n, C y c, espacios por _
		$nombre = str_replace(
			['Ñ', 'ñ', 'Ç', 'ç'],
			['N', 'n', 'C', 'c'],
			$nombre
		);

		$nombre = preg_replace("/[^a-zA-Z0-9._-]/", "", $nombre);
		return $nombre;
	}

	public function consultaFirmasActivo($tipoID, $areaID)
	{
		$fechaActual = date('Y-m-d');

		$userIDs = TipoPersona::where('dt_fecha_posesion', '<=', $fechaActual)
			->where('dt_fecha_retiro', '>=', $fechaActual)
			->where('tipo_id', $tipoID)
			->where('i_fk_id_area', $areaID)
			->pluck('user_id');

		// Acceder a otra tabla utilizando los IDs de usuario
		$result = User::whereIn('id', $userIDs)->get();

		return $result;
	}
}
