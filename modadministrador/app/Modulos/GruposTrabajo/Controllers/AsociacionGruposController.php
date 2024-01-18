<?php

namespace App\Modulos\GruposTrabajo\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParametroRequest;
use App\Modulos\Parametro\Repository\ParametroInterface;
use App\Modulos\GruposTrabajo\Repository\GrupoTrabajoInterface;
use idartes\usuario\Repository\UsuarioInterface;
use idartes\usuario;

class AsociacionGruposController extends Controller
{
    protected $parametroRepository;
    //protected $grupoTrabajoRepository;

    public function __construct(
        ParametroInterface $parametroRepository, GrupoTrabajoInterface $grupoTrabajoRepository, UsuarioInterface $usuarioRepository){
        $this->parametroRepository = $parametroRepository;
        $this->usuarioRepository = $usuarioRepository;
        $this->grupoTrabajoRepository = $grupoTrabajoRepository;
    }

    public function index()
    {
        
        $id = 15; //Estado::Unidades Gestion
        $unidades = $this->parametroRepository->obtenerPorParametro($id)->pluck('vc_parametro_detalle','i_pk_id')->toArray();
        $usuarios_activos = $this->usuarioRepository->obtenerUsuariosActivos();
        //dd($unidades); 
        return view("material.sections.grupos-trabajo.grupos-trabajo", compact('unidades','usuarios_activos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($this->grupoTrabajoRepository->crear($request)){
            $mensajes = [
                'message'=>'Se ha agregado un nuevo usuario',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return redirect('/grupos-trabajo')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'No fue posible agregar el usuario',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            //dd($request);
            return redirect('/grupos-trabajo')->with($mensajes)->withInput();          
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {   
        $usuario = $this->grupoTrabajoRepository->obtener($id);
        $usuarios_activos = $this->usuarioRepository->obtenerUsuariosActivos();
        $data = [
            'usuario' => $usuario,
            'usuarios_activos' => $usuarios_activos,
        ];
        $returnHTML = view('material.sections.grupos-trabajo.form.edit', $data)->render();
        return response()->json(['html'=>$returnHTML,'usuario'=>$usuario, 'usuarios_activos'=>$usuarios_activos]);
    }

    public function update(Request $request, $id)
    {
        if($this->grupoTrabajoRepository->actualizar($request,$id)){
            $mensajes = [
                'message'=>'El usuario fue modificado',
                'title'=>'Éxito',
                'type'=>'success'                
            ];
            return redirect('/grupos-trabajo')->with($mensajes);
        }else{
            $mensajes = [
                'message'=>'No fue posible modificar el usuario',
                'title'=>'Error',
                'type'=>'error'                
            ];  
            return redirect('/grupos-trabajo')->with($mensajes)->withInput();          
        }
    }

    public function destroy($id)
    {
        //
    }

    public function obtenerSubUnidadesGestion(Request $request)
    {
        //dd($request->id_unidades);
        $subUnidades = $this->parametroRepository->obtenerPorPadre($request->id_unidades)->pluck('vc_parametro_detalle','i_pk_id')->toArray();
        return response()->json(['subUnidades' => $subUnidades]);
    }

    public function obtenerGruposSubUnidades(Request $request)
    {
        //dd($request->id_unidades);
        $grupos = $this->parametroRepository->obtenerPorPadre($request->id_subunidad_gestion)->pluck('vc_parametro_detalle','i_pk_id')->toArray();
        return response()->json(['grupos' => $grupos]);
    }

    public function obtenerMiembrosGrupo(Request $request)
    {
        $usuarios = $this->grupoTrabajoRepository->obtenerIdUsuariosMiembros($request->id_grupo_trabajo);
        $data = [
            'usuarios' => $usuarios,
        ];
        $returnHTML = view('material.sections.grupos-trabajo.tabla-usuarios', $data)->render();
            //$returnHTML="";
        return response()->json(['html'=>$returnHTML,'usuarios'=>$usuarios]);
    }
}
