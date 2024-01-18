<?php

Route::group(['middleware' => 'auth'], function(){

    //$controller = "\\App\\Modulos\\GestionPerfiles\\Controllers\\";
    $controller = "\\idartes\\usuario\\GestionPerfiles\\Controllers\\";

    Route::resource('perfiles', $controller .'GestionPerfilesController');   

    Route::post('crear-perfil', [
    	'uses' => $controller .'GestionPerfilesController@store',
    	'as' => 'crear-perfil'
    ]);

    Route::get('/cargos', [
    	'uses' => $controller .'GestionPerfilesController@cargos',
    	'as' => 'cargos' 
    ]);  

    Route::get('/cargos/{id}/edit', [
        'uses' => $controller .'GestionPerfilesController@editCargos',
        'as' => 'cargos.edit'  
    ]);       

}); 
