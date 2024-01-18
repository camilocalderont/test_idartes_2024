<?php

namespace App\Modulos\Auditoria\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modulos\Configuracion\Configuracion;
use App\Modulos\Auditoria\Repository\AuditoriaInterface;
use idartes\usuario\Repository\UsuarioInterface;
use Illuminate\Support\Facades\Crypt;
class AuditoriaController extends Controller
{
	protected $parametrosRepository;
	protected $auditoriaRepository;
    protected $usuarioRepository; 
    function __construct(Configuracion $configuracion,AuditoriaInterface $auditoriaRepository,UsuarioInterface $usuarioRepository ){
        $this->parametrosRepository=$configuracion;
        $this->auditoriaRepository=$auditoriaRepository;
        $this->usuarioRepository=$usuarioRepository;
    }

    function inicio(){
        //dd($this->usuarioRepository->obtenerUsuariosActivos()) ;
        $data = [
            'tablas'=>$this->parametrosRepository->obtenerTablasConTriggers(),
            'usuarios'=>$this->usuarioRepository->obtenerUsuariosActivos(), 
        ];   
 
        return view('material.sections.auditoria.consultar-auditoria',$data);      	
    }

    function consultarAuditoria(Request $request){
    	$tabla = $request['vc_tabla'];
        $a = $this->auditoriaRepository->obtenerAuditoriaPorTabla($tabla); 
        //dd($a);
        $returnHTML="";
        $returnHTML = view('material.sections.auditoria.tabla-auditoria')->with('auditorias', $a)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML,'a'=>$a));           	
    }

    function consultarLogin(Request $request){
        $login = $this->auditoriaRepository->obtenerLoginPorUsuario($request); 
        //dd($a);
        $returnHTML="";  
        $returnHTML = view('material.sections.auditoria.tabla-login')->with('logins', $login)->render(); 
        return response()->json(array('success' => true, 'html'=>$returnHTML,'logins'=>$login));                 
    }

    function RegistrarLogin(Request $request){
        $request->request->add([
            'vc_ip'=>$request->server("REMOTE_ADDR"),
            'vc_dispositivo'=>$request->server("HTTP_USER_AGENT"),
            'i_fk_id_modulo'=>Crypt::decryptString($request['i_fk_id_modulo']),
            'i_fk_id_usuario'=>unserialize(urldecode($request['i_fk_id_usuario']))

        ]);
        $login = $this->auditoriaRepository->crearLogin($request->all());  
        return response()->json(array('success' => is_object($login))); 
    }

}
