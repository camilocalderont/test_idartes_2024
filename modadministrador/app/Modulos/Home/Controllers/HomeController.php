<?php

namespace App\Modulos\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modulos\Usuario\User;
use App\Modulos\Usuario\Tipo;
use App\Modulos\Modulo\Modulo;
use App\Modulos\Modulo\Actividad;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class HomeController extends Controller {

	public function __construct(){}

	public function inicio()
	{
		

		$user = Auth::user();

		$dataUser = User::with('tiposPersona.actividades.modulo')->find($user->id);
		
		$arrayActividade = array();
		foreach ($dataUser->tiposPersona as $tipoPersona) {
			foreach ($tipoPersona->actividades as $actividad) {
				# code...
				$arrayActividade[]=$actividad->i_pk_id;
			}
		}
		
		$actividades = Actividad::with(['modulo','padre'])
					   ->whereIn('i_pk_id',array_unique($arrayActividade))
					   ->get();

		$modulosActivos = Modulo::whereIn('i_pk_id',$actividades->pluck('i_fk_id_modulo')->toArray())
						  ->where('i_estado',1)
						  ->get();

		$modulosSinPermisos = Modulo::whereNotIn('i_pk_id',$modulosActivos->pluck('i_pk_id')->toArray())
						  ->where('i_estado',1)
						  ->get();
		
		$actividades = serialize($actividades->toArray());
		$actividades = urlencode($actividades);	

		$id = serialize($user->id);
		$id = urlencode($id);		

		$data=[
			'modulos_activos'=>$modulosActivos,
			'modulos_sin_permisos'=>$modulosSinPermisos,
			'id'=> $id,
			'actividades'=>$actividades
		];

		$vector = $actividades;
		$vector = urldecode($vector);
		$user_array = unserialize($vector);
		$permissions_array = $user_array;
		$permisos =array_pluck($permissions_array, 'i_pk_id');
		$permissions_array = array_filter($permissions_array, function ($var) {
		    return ($var['i_estado']==1 && $var['i_fk_id_modulo']==1);
		});

		$actividades = $permissions_array;
		//dd($actividades);			
		$menu = $this->obtenerMenu($actividades);	
		//dd($menu);	
		$_SESSION['Usuario'] = $user_array;
		$_SESSION['Usuario']['Permisos'] = $permisos;
	    return view('material.sample',$data);
	}



	public function welcome()
	{
		//$user = Auth::user();
		//dd($_SESSION['menu']);
	    return view('material.inicio');
	}


	public function permiso(Request $request)
	{
		$fake_permissions="";
		
		
		if ($request->has('actividades') )
		{
			//dd($request->has('actividades'));

			$vector = $request->has('actividades') ? urldecode($request->input('actividades')) : $fake_permissions;
			$vector = urldecode($vector);
			$user_array = unserialize($vector);
			$permissions_array = $user_array;
			

			$id_user = urldecode($request->input('id'));
			$id_user = unserialize($id_user);

			$id_user = urldecode($request->input('id'));
			$id_user = unserialize($id_user);

			$id_modulo = Crypt::decryptString($request->input('id_modulo'));

			
			$userData = User::find($id_user);
			auth()->loginUsingId($userData->id);

			//dd(Auth::user()->roles);

			$permissions_array = array_filter($permissions_array, function ($var) use ($id_modulo) {
			    return ($var['i_estado']==1);
			});

			$permisos =array_pluck($permissions_array, 'i_pk_id');

			$_SESSION['Usuario'] = $user_array;
			$_SESSION['Usuario']['Permisos'] = $permisos;


			$actividades = array_filter($permissions_array, function ($var) use ($id_modulo) {
				return ($var['i_estado']==1 && $var['i_fk_id_modulo']==$id_modulo);
			});			
			//dd($actividades);	 		
			$menu = $this->obtenerMenu($actividades);				
			if(!isset($_SESSION['menu'])){
				$_SESSION['menu'] = [];
			}
			$_SESSION['menu'][$id_modulo] = $menu;    

			
            //$persona = $this->repositorio_personas->obtener($_SESSION['Usuario'][0]);
            //$configuraciones = ConfiguracionPersona::where('i_fk_id_persona', $_SESSION['Usuario'][0])->get();

			/*$_SESSION['Usuario']['Persona'] = $persona;
			$_SESSION['Usuario']['Permisos'] = $permisos;
			$_SESSION['Usuario']['Roles'] = $configuraciones;
			$_SESSION['Nombre']=$persona["Primer_Apellido"]." ".$persona["Segundo_Apellido"]." ".$persona["Primer_Nombre"]." ".$persona["Segundo_Nombre"];
			$this->Usuario = $_SESSION['Usuario'];*/

		}else {
			if (!isset($_SESSION['Usuario']))
				$_SESSION['Usuario'] = '';
		}
 
		if ($_SESSION['Usuario'] == '')
			return redirect()->away('http://www.idartes.gov.co');

		return redirect('/welcome');
	}



	public function obtenerMenu($actividades){
		$menu=[];
		//inicia con los padres
		foreach ($actividades as $actividad) {
			if($actividad['i_fk_id_padre']==null){
 
				$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['submenu'] = $this->obtenerDescendencia($actividad,$actividades);
				$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['title'] =  $actividad['vc_actividad'];
				$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['icon'] = $actividad['vc_imagen'];
				$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['access'] = true;
				//$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['secure']='true';
				$menu[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']]['url'] = $actividad['vc_redireccion']; 				
			}
		}
		return $menu;
	}
	public function obtenerDescendencia($actividadActual,$actividades){
		$array = [];
		foreach ($actividades as $actividad) {
			if($actividad['i_fk_id_padre']==$actividadActual['i_pk_id']){
				$subMenu = $this->obtenerDescendencia($actividad,$actividades);
				if($subMenu!=[]){
					$actividadTemp['submenu'] = $subMenu ;
				}
				$actividadTemp['title'] =  $actividad['vc_actividad'];
				$actividadTemp['icon'] = $actividad['vc_imagen'];
				$actividadTemp['access'] = true;
				//$actividadTemp['secure']='true';
				$actividadTemp['url'] = $actividad['vc_redireccion']; 
				//array_push($array,$actividadTemp);
				$array[$actividad['i_pk_id'].'-'.$actividad['vc_actividad']] = $actividadTemp;


			}
		}
		return $array;		
	}	
}
