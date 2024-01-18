<?php

Route::group(['middleware' => 'auth'], function(){

    $controller = "\\App\\Modulos\\GruposTrabajo\\Controllers\\";

    Route::resource('grupos-trabajo', $controller .'AsociacionGruposController');   
      
    Route::post('/obtenerSubUnidadesGestion', [  
        'uses' => $controller .'AsociacionGruposController@obtenerSubUnidadesGestion' ,
        'as' => 'obtener-subunidades-gestion' 
    ]); 

    Route::post('/obtenerGruposSubUnidades', [  
        'uses' => $controller .'AsociacionGruposController@obtenerGruposSubUnidades' ,
        'as' => 'obtener-grupos-subunidades' 
    ]); 

    Route::post('/obtenerMiembrosGrupo', [  
        'uses' => $controller .'AsociacionGruposController@obtenerMiembrosGrupo' ,
        'as' => 'obtener-miembros-grupos' 
    ]);    
    
}); 
