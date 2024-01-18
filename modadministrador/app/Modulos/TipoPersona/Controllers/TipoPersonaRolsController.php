<?php

namespace App\Modulos\TipoPersona\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use idartes\usuario\Repository\UsuarioInterface;
use App\Modulos\TipoPersona\Repository\TipoPersonaRolsInterface;
use App\Modulos\TipoPersona\Repository\TipoPersonaRolsRepository;
use App\Modulos\TipoPersona\Repository\TipoPersonaInterface;
use idartes\usuario\Repository\ParametroDetalleRepository;
use idartes\usuario\Estado;
use Illuminate\Support\Facades\Validator;

class TipoPersonaRolsController extends Controller
{
  protected $usuarioRepository;
  protected $tipoPersonaRolsRepository;
  protected $tipoPersonaRepository;
  protected $parametrosRepository;

  public function __construct(UsuarioInterface $usuarioRepository, TipoPersonaRolsInterface $tipoPersonaRolsRepository, ParametroDetalleRepository $configuracion, TipoPersonaInterface $tipoPersonaRepository)
  {
    $this->parametrosRepository = $configuracion;
    $this->tipoPersonaRepository = $tipoPersonaRepository;
    $this->usuarioRepository = $usuarioRepository;
    $this->tipoPersonaRolsRepository = $tipoPersonaRolsRepository;
  }
  public function index()
  {
    return redirect('/tipo-persona-rols');
  }

  public function inicio()
  {
    $data = [
      'usuarios' => $this->usuarioRepository->obtenerUsuariosActivos(),
    ];
    return view('material.sections.perfiles.tipoPersonaRols', $data);
  }

  public function consultarTipoPersonaRols(Request $request)
  {
    if (isset($request->user_id)) {
      $roles = $this->tipoPersonaRolsRepository->consultarUsuarios($request);
      $data = [
        'roles' => $roles,
      ];
      $returnHTML = "";
      $returnHTML = view('material.sections.perfiles.tablaTipoPersonaRol', $data)->render();
      return response()->json(array('success' => true, 'html' => $returnHTML, 'roles' => $roles));
    } else {
      return response()->json(['error' => 'NO se ha podido realizar la busqueda']);
    }
  }

  public function mostrarFormularioRoles(Request $request)
  {
    $tipoPersonas = $this->tipoPersonaRepository->obtenerUsuarioPorId($request->id);

    $roles = DB::table('tbl_tipo')
      ->where('i_fk_id_clase', 268)
      ->where('i_estado', 1)
      ->select('i_pk_id', 'vc_tipo')
      ->pluck('vc_tipo', 'i_pk_id')
      ->toArray();

    $data = [
      'userid' => $request->user_id,
      'tipoPersonas' => $tipoPersonas,
      'roles' => $roles,
      'areas' => $this->parametrosRepository->obtenerParametro(Estado::CODIGO_AREAS)->pluck('vc_parametro_detalle', 'i_pk_id')->toArray(),
    ];
    $returnHTML = view('material.sections.perfiles.formularioRoles', $data)->render();
    return response()->json(array('success' => true, 'html' => $returnHTML, 'usuario' => $tipoPersonas));
  }

  public function guardarTipoPersonaRols(Request $request)
  {
    $validacionFecha = $this->tipoPersonaRolsRepository->validacionRolArea($request);
    $validar = $validacionFecha->getData()->validar;

    if (!$validar) {
      return $validacionFecha;
    } else {
      $guardo = $this->tipoPersonaRolsRepository->guardarCargos($request);

      if ($guardo) {
        return $guardo;
      }
    }
  }

  public function borrarTipoPersonaRols(Request $request)
  {
    $elimino = $this->tipoPersonaRepository->borrarCargos($request);
    if ($elimino == 1) {
      $mensaje = [
        'title' => 'Algo ha salido mal',
        'message' => 'No fue posible eliminar la información',
        'type' => 'error'
      ];
    } else {
      $mensaje = [
        'title' => 'Bien hecho',
        'message' => '¡Se eliminó la información correctamente!',
        'type' => 'success'
      ];
    }
    return response()->json($mensaje);
  }

  public function registrosRoles(Request $request)
  {
    $mostrarRegistros = $this->tipoPersonaRolsRepository->mostrarRegistros($request);

    return response()->json($mostrarRegistros);
  }

  public function validarRoles(Request $request)
  {
    $mostrarTipoRol = $this->tipoPersonaRolsRepository->mostrarTipoRol($request);
    
    isset($mostrarTipoRol) ? $mostrarTipoRol = $mostrarTipoRol->i_requisitos : $mostrarTipoRol = "";
    
    return response()->json($mostrarTipoRol);
  }
}
