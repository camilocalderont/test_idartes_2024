<?php

namespace App\Modulos\Auditoria\Repository; 
use App\Modulos\Auditoria\AuditoriaAdministracion;
use App\Modulos\Auditoria\Repository\AuditoriaInterface;
use idartes\usuario\LogLogin;

class AuditoriaRepository implements AuditoriaInterface{

	public function obtenerAuditoriaPorTabla($tabla){
		return AuditoriaAdministracion::where('vc_tabla',$tabla)->with('usuario')->get();
	}

	public function obtenerLoginPorUsuario($request){

		return LogLogin::where('i_fk_id_usuario',$request['i_fk_id_usuario'])
		->whereBetween('d_fecha_ingreso', [$request['d_fecha_inicial'], $request['d_fecha_final']])
		->with('modulo')
		->get(); 
	}	
	public function crear(array $data){
		
	}
	public function actualizar(array $data, $id){}
	public function obtener($id, array $relaciones = []){}
	public function eliminar($id){}
	public function obtenerTodo(array $relaciones = []){}
	public function dataTable(array $relaciones = []){}

	function crearLogin($request){
		return LogLogin::create($request);
	} 	 
}