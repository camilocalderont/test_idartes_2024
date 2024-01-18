<?php

Route::group(['middleware' => 'auth'], function(){

    $controller = "\\App\\Modulos\\Actividad\\Controllers\\";

    Route::resource('actividad', $controller .'ActividadController');   

	$controllerp = "\\App\\Modulos\\Parametro\\Controllers\\";

    Route::resource('parametro', $controllerp .'ParametroController');   

	$controllerpd = "\\App\\Modulos\\Parametro\\Controllers\\";

    Route::resource('detalle-parametro', $controllerpd .'ParametroDetalleController');  

    Route::post('/obtener-actividades-modulo', [  
        'uses' => $controller .'ActividadController@obtenerActividadesModulo' ,
        'as' => 'obtener-actividades-modulo' 
    ]);      

}); 
