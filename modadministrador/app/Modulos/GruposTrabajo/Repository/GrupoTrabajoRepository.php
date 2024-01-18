<?php

namespace App\Modulos\GruposTrabajo\Repository;

use idartes\usuario\GrupoTrabajo;
use App\Modulos\GruposTrabajo\Repository\GrupoTrabajoInterface;
use DB;

class GrupoTrabajoRepository implements GrupoTrabajoInterface{

 	public function crear($request){
 		try{
	    	$grupo = new GrupoTrabajo();
	    	$data = $request->only($grupo->getFillable());
	    	$data['i_fk_id_grupo'] = $request->i_fk_id_grupo;
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $grupo->fill($data)->save(); 
		}catch(\Exception $e){
			echo $e->getMessage(); 
			dd($e);
			return 0;
		} 
 	}

	public function actualizar($request, $id){
		try{
	    	$grupo = GrupoTrabajo::find($id);
	    	$data = $request->only($grupo->getFillable());
	    	$data['i_fk_id_grupo'] = $request->i_fk_id_grupo;
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $grupo->fill($data)->save();
		}catch(\Exception $e){
			echo $e->getMessage(); 
			return 0;
		}
	}
	
	public function obtener($id, $relaciones = []){
		return GrupoTrabajo::find($id);
	}

	public function eliminar($id){}
	public function obtenerTodo($relaciones = []){}
	public function dataTable($relaciones = []){}

	public function obtenerIdUsuariosMiembros($request)
	{
		$usuarios = GrupoTrabajo::whereIn('i_fk_id_grupo', $request)->with('usuarios')->get();
		return $usuarios; 
	}

}