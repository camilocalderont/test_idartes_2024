<?php

namespace App\Modulos\Parametro\Repository;
use idartes\usuario\Parametro;
use idartes\usuario\ParametroDetalles;
use App\Modulos\Parametro\Repository\ParametroInterface;
use DB;

class ParametroRepository implements ParametroInterface{


	public function obtener($id,$relaciones = []){
		return Parametro::find($id);
	}

	public function obtenerParametroDetalle($id,$relaciones = []){
		return ParametroDetalles::find($id);
	}	

    public function mostrarTabla(){
    	return Parametro::orderBy('i_pk_id', 'DESC')->get();
    }

    public function crear($request)
    {
		try{
	    	$parametro = new Parametro();
	    	$data = $request->only($parametro->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $parametro->fill($data)->save(); 
		}catch(\Exception $e){
			echo $e->getMessage(); 
			//dd($e);
			return 0;
		}    			 	
    }

    public function actualizar($request,$id){
    	try{
	    	$parametro = Parametro::find($id);
	    	$data = $request->only($parametro->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $parametro->fill($data)->save();
		}catch(\Exception $e){
			echo $e->getMessage(); 
			return 0;
		}		    	
    }

    public function eliminar($id){
    	return Parametro::find($id)->delete();
    }

	public function obtenerTodo($relaciones = []){
		$parametro = Parametro::all();

		if (count($relaciones))
            $parametro->load($relaciones);

		return $parametro;
	}

	public function obtenerTodoParametroDetalle($relaciones = []){
		$parametroDetalle = ParametroDetalles::all();
		return $parametroDetalle;
	}
	
	public function dataTable($relaciones = []){}  

	//Parametro Detalles...

	public function mostrarTablaDetalleParametro()
	{

		$detalleTabla = DB::table('tbl_parametros_detalles')
        ->join('tbl_parametros', 'tbl_parametros_detalles.i_fk_id_parametro', '=', 'tbl_parametros.i_pk_id')
        ->select('tbl_parametros_detalles.*', 'tbl_parametros.vc_parametro')
        ->orderBy('i_pk_id','DESC')
        ->paginate(70); 

        return $detalleTabla;

	}

	public function crearDetalleParametro($request){
		try{
			$detalleParametro = new ParametroDetalles();
	    	$data = $request->only($detalleParametro->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $detalleParametro->fill($data)->save();   
		}catch(\Exception $e){
			echo $e->getMessage(); 
			return 0;
		}    	 		 	
    }

    public function actualizarDetalleParametro($request,$id){
    	try{
	    	$detalles = ParametroDetalles::find($id);
	    	$data = $request->only($detalles->getFillable());
	    	$data['i_estado'] = (isset($request->i_estado)) ? 1 : 0;
	    	return $detalles->fill($data)->save();
	    	
		}catch(\Exception $e){
			echo $e->getMessage(); 
			return 0;
		}		    	
    }

    public function obtenerIdDetalle($id,$relaciones = []){
		return ParametroDetalles::find($id);
	}

	public function obtenerPorParametro($parametro){
		return ParametroDetalles::where('i_fk_id_parametro',$parametro)->get();
	}

	public function obtenerPorPadre($parametro){
		return ParametroDetalles::where('i_fk_id_padre',$parametro)->get();
	}
}