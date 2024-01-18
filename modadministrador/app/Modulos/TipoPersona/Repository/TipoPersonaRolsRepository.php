<?php

namespace App\Modulos\TipoPersona\Repository;

use App\Modulos\TipoPersona\Repository\TipoPersonaRolsInterface;
use App\Modulos\TipoPersona\tipoPersona;
use App\Modulos\Usuario\Tipo;
use DateTime;
use Illuminate\Support\Facades\Validator;

class TipoPersonaRolsRepository implements TipoPersonaRolsInterface
{

  public function obtenerUsuarioPorId($i_pk_id)
  {
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

  public function consultarUsuarios($request)
  {
    $user_id = $request->user_id;

    if (!$user_id) {
      return response()->json(['error' => 'NO se ha podido realizar la búsqueda']);
    }

    $tipoPersonas = TipoPersona::where('user_id', $user_id)
      ->whereHas('tipo', function ($query) {
        $query->where('i_fk_id_clase', 268);
      })
      ->get();

    return $tipoPersonas;
  }


  public function guardarCargos($request)
  {
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
  }

  public function mostrarRegistros($request)
  {
    $datos = $request->all();

    $rolesExistentes = tipoPersona::where('tipo_id', $datos['tipo_id'])
      ->where('i_pk_id', '!=', $datos['i_pk_id'])
      ->get();

    return $rolesExistentes;
  }

  public function mostrarTipoRol($request)
  {
    $mostrarTipoRol = Tipo::find($request->tipo_id);

    return $mostrarTipoRol;
  }

  public function validacionRolArea($request)
  {
    $validar = true;
    $datos = $request->all();
    $rolesExistentes = $this->mostrarRegistros($request);
    $requisito = $this->mostrarTipoRol($request);

    $mensaje = [
      'title' => 'Validación exitosa',
      'message' => 'El rol y el área son válidos',
      'type' => 'success',
      'validar' => $validar
    ];

    foreach ($rolesExistentes as $rolExistente) {
      $AreaExistente = $rolExistente->i_fk_id_area;
      $fechaPosesionExistente = new DateTime($rolExistente->dt_fecha_posesion);
      $fechaRetiroExistente = new DateTime($rolExistente->dt_fecha_retiro);

      $fechaPosesionForm = new DateTime($datos['dt_fecha_posesion']);
      $fecharetiroForm = new DateTime($datos['dt_fecha_retiro']);

      if ($requisito->i_requisitos !== 0) {
        $validator = Validator::make($request->all(), $this->getReglasValidacion(), $this->getMensajesValidacion());


        if ($validator->fails()) {
          $validar = false;
          $mensaje = [
            'title' => 'Error de validación',
            'message' => implode('<br>', $validator->errors()->all()),
            'type' => 'error',
            'validar' => $validar
          ];
          return response()->json($mensaje);
        }

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
    }

    if (!$validar) {
      $mensaje = [
        'title' => 'Error de validación',
        'message' => 'Las fechas se solapan con registros existentes.',
        'type' => 'error',
        'validar' => $validar
      ];
    }

    return response()->json($mensaje);
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
      'tipo_id' => 'required',
      'i_fk_id_area' => 'required',
      'dt_fecha_posesion' => 'required',
      'dt_fecha_retiro' => ['required', 'same_or_after:dt_fecha_posesion'],
    ];
  }


  public function getMensajesValidacion()
  {
    return [
      'user_id.required' => 'El usuario es requerido.',
      'tipo_id.required' => 'El rol es requerido.',
      'i_fk_id_area.required' => 'El área es requerida.',
      'dt_fecha_posesion.required' => 'La fecha de posesión es requerida.',
      'dt_fecha_retiro.required' => 'La fecha de retiro es requerida.',
      //'dt_fecha_posesion.date_format' => 'El campo fecha de inicio debe tener el formato Y-m-d',
      //'dt_fecha_retiro.date_format' => 'El campo fecha de inicio debe tener el formato Y-m-d',
      'dt_fecha_retiro.after' => 'La fecha de fin debe ser mayor que la fecha de posesion',
    ];
  }
}
