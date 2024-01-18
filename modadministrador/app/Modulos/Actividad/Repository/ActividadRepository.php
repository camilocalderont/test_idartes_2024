<?php

namespace App\Modulos\Actividad\Repository;
use idartes\usuario\Actividad;
use App\Modulos\Actividad\Repository\ActividadesInterface;
use DB;



class ActividadRepository implements ActividadesInterface{

	public function mostrarTabla(){

    	/*$actividades = DB::table('tbl_actividades')
        ->join('tbl_modulo', 'tbl_modulo.i_pk_id', '=', 'tbl_actividades.i_fk_id_modulo')
        ->select('tbl_actividades.*', 'tbl_modulo.vc_modulo')
        ->orderBy('i_pk_id','DESC')
        ->get();*/ 

        $actividades = Actividad::with(['modulo','padre'])->get();

        return $actividades;
    }
    public function crear($request)
    {
		try{
	    	$actividad = new Actividad();
	    	$data = $request->only($actividad->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $actividad->fill($data)->save(); 
		}catch(\Exception $e){
			echo $e->getMessage(); 
			dd($e);
			return 0;
		}    			 	
    }
    public function actualizar($request,$id){
    	try{
	    	$actividad = Actividad::find($id);
	    	$data = $request->only($actividad->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $actividad->fill($data)->save();
	    	
		}catch(\Exception $e){
			echo $e->getMessage(); 
			return 0;
		}		    	
    }
    public function obtener($id, $relaciones = []){
		return Actividad::find($id);
	}

	public function eliminar($id){}
	public function obtenerTodo($relaciones = []){
		return Actividad::where($relaciones)->get();
	}
	public function dataTable($relaciones = []){}
}