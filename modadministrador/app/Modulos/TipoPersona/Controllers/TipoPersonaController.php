<?php

namespace App\Modulos\TipoPersona\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modulos\TipoPersona\Repository\TipoPersonaInterface\TipoPersonaRolsRepository;
use App\Modulos\TipoPersona\Repository\TipoPersonaInterface;
use idartes\usuario\Repository\ParametroDetalleRepository;
use idartes\usuario\Repository\UsuarioInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Modulos\TipoPersona\tipoPersona;
use App\Modulos\Usuario\User;
use idartes\usuario\Estado;
use App\Modulos\TipoPersona\Repository\TipoPersonaRolsInterface;



class TipoPersonaController extends Controller
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
    return redirect('/tipo-persona');
  }

  public function inicio()
  {
    $cargos = DB::table('tbl_tipo')
      ->where('i_fk_id_clase', 269)
      ->where('i_estado', 1)
      ->select('i_pk_id', 'vc_tipo')
      ->pluck('vc_tipo', 'i_pk_id')
      ->toArray();

    $roles = DB::table('tbl_tipo')
      ->where('i_fk_id_clase', 268)
      ->where('i_estado', 1)
      ->select('i_pk_id', 'vc_tipo')
      ->pluck('vc_tipo', 'i_pk_id')
      ->toArray();

    $data = [
      'cargos' => $cargos,
      'roles' => $roles
    ];

    return view('material.sections.perfiles.tipopersona-usuario', $data);
  }

  public function consultarTipoPersonas(Request $request)
  {
    //aqui quiero que se valla por dos lados diferentes
    //dd($request->where);
    if ($request->where == "Roles") {
      $tipoPersonas = $this->tipoPersonaRepository->consultarUsuarios($request->where, $request);
      $data = [
        'tipoPersonas' => $tipoPersonas,
      ];
      $returnHTML = "";
      $returnHTML = view('material.sections.perfiles.tablaTipoRol', $data)->render();
      return response()->json(array('success' => true, 'html' => $returnHTML, 'tipoPersonas' => $tipoPersonas));
    } else if ($request->where == "Cargos") {
      $tipoPersonas = $this->tipoPersonaRepository->consultarUsuarios($request->where, $request);
      $data = [
        'tipoPersonas' => $tipoPersonas,
      ];
      $returnHTML = "";
      $returnHTML = view('material.sections.perfiles.tablaTipoCargo', $data)->render();
      return response()->json(array('success' => true, 'html' => $returnHTML, 'tipoPersonas' => $tipoPersonas));
    } else {
      return response()->json(['error' => 'NO se ha podido realizar la busqueda']);
    }
  }

  public function mostrarFormularioCargos(Request $request)
  {
    $tipoPersonas = $this->tipoPersonaRepository->obtenerUsuarioPorId($request->id);
    $data = [
      'cargoid' => $request->cargo_id,
      'tipoPersonas' => $tipoPersonas,
      'usuarios' => $this->usuarioRepository->obtenerUsuariosActivos(),
      'areas' => $this->parametrosRepository->obtenerParametro(Estado::CODIGO_AREAS)->pluck('vc_parametro_detalle', 'i_pk_id')->toArray(),
    ];
    $returnHTML = view('material.sections.perfiles.modalForm', $data)->render();
    return response()->json(array('success' => true, 'html' => $returnHTML, 'usuario' => $tipoPersonas));
  }

  public function guardarTipoPersona(Request $request)
  {
    $validator = Validator::make($request->all(), $this->tipoPersonaRepository->getReglasValidacion(), $this->tipoPersonaRepository->getMensajesValidacion());

    if ($validator->fails()) {
      $mensaje = [
        'title' => 'Error de validación',
        'message' => implode('<br>', $validator->errors()->all()),
        'type' => 'error'
      ];
    } else {
      $validacionFecha =  $this->tipoPersonaRolsRepository->validacionRolArea($request);
      $validar = $validacionFecha->getData()->validar;

      if (!$validar) {
        return $validacionFecha;
      } else {
        $guardo = $this->tipoPersonaRepository->guardarCargos($request);

        if ($guardo) {
          return $guardo;
        }
      }
    }
    return response()->json($mensaje);
  }

  public function borrarTipoPersona(Request $request)
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

  public function mostrarTablaRols()
  {
    return view('material.sections.perfiles.tipopersonaRols');
  }
}
