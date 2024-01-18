<?php

namespace App\Modulos\Modulo;

use App\Modulos\Modulo\Modulo;
use App\Modulos\Modulo\ModuloInterface;
use Illuminate\Support\Facades\Cache;
use App\Modulos\Configuracion\Configuracion;
use Yajra\DataTables\DataTables;

class ModuloRepository implements ModuloInterface
{
	public function __construct(){}

	public function crear(array $data)
	{
		$modulo = new Modulo;
		return $this->procesar($modulo, $data);
	}

    public function dataTable(array $relaciones=[])
    {

            foreach (Modulo::cursor() as $modulo) {
                $actions = '<a href="javascript:;" data-id="'.$modulo->i_pk_id.'" data-nombre="'.$modulo->vc_modulo.'" data-estado="'.$modulo->i_estado.'"  data-direccion="'.$modulo->vc_redireccion.'" data-imagen="'.$modulo->vc_imagen.'"  data-to="false" class="btn btn-simple btn-warning btn-icon edit"><i class="icon-pencil"></i></a>';
                $table[] = [
                    'i_pk_id'           => $modulo->i_pk_id,
                    'vc_nombre'         => $modulo->vc_modulo,
                    'vc_redireccion'    => $modulo->vc_redireccion,
                    'vc_imagen'         => $modulo->vc_imagen,
                    'vc_estado'         => Configuracion::estado($modulo->i_estado),
                    'link'              => $actions
                ];
                $actions = null;
            }

        return Datatables::of($table)->addIndexColumn()->rawColumns(['link'])->make(true);
	}

	public function actualizar(array $request, $id)
	{
        $modulo = Modulo::find($request['i_pk_id']);

		return $this->procesar($modulo, $request);
	}

	public function obtener($id, array $relaciones = [])
	{
        $modulo = Modulo::find($id);

		if (count($relaciones))
            $modulo->load($relaciones);

		return $modulo;
	}

	public function eliminar($id)
	{
        $modulo = Modulo::find($id);

		return $modulo->delete();
	}

	public function obtenerTodo(array $relaciones = [])
	{
        $modulo = Modulo::all();

		if (count($relaciones))
            $modulo->load($relaciones);

		return $modulo;
	}

	private function procesar($modulo, $request)
	{
        $modulo->vc_modulo = $request['vc_nombre'];
        $modulo->vc_redireccion = $request['vc_redireccion'];
        $modulo->vc_imagen = $request['vc_imagen'];
        $modulo->i_estado = $request['vc_estado'];
        $modulo->save();

        return $modulo;
	}
}
