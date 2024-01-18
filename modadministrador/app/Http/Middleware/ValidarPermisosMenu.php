<?php

namespace App\Http\Middleware;

use Closure;
use idartes\usuario\Actividad;
class ValidarPermisosMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()==null){
            return $next($request);
        }
        //Obtiene las actividades del usuario
        $actividades = [];
        foreach ($request->user()->tiposPersona as $tipoPersona) {
            foreach ($tipoPersona->actividades as $actividad) {
                $actividades[] = $actividad->i_pk_id;
            }
        }

        $rutaActual = '/'.$request->route()->uri;
        //Obtiene la actividad por el nombre de la ruta que hace la solicitud
        $actividad = Actividad::where('vc_redireccion',$rutaActual)
                    ->where('i_fk_id_modulo',config('usuarios.modulo'))->first(); 
        //Solo si la ruta está creada como actividad valida
        if(is_object($actividad)){
            //Busca la actividad actual en el arreglo de actividades del usuario
            if(array_search($actividad->i_pk_id, $actividades)===false){
                return redirect('/welcome')->with([
                    'title'=>'Algo salió mal!',
                    'message'=>'No esta autorizado para acceder a la opción de menú ('.$rutaActual.'), Para más información contacte al administrador del sistema',
                    'type'=>'error',
                ]);
                //dd('No autorizado a esta ruta');
            }
        }
        
        return $next($request);
    }
}
