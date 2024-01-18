<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    $controller = "\\App\\Modulos\\TipoPersona\\Controllers\\";

    Route::resource('tipo-persona', $controller . 'TipoPersonaController');

    Route::get('/tipo-persona', [
        'uses' => $controller . 'TipoPersonaController@inicio',
        'as' =>  'tipo-persona',
    ]);

    Route::post('/consultar-tipo-personas', [
        'uses' => $controller . 'TipoPersonaController@consultarTipoPersonas',
        'as' => 'consultar-tipo-personas'
    ]);

    Route::post('/mostrarFormularioCargos', [
        'uses' => $controller . 'TipoPersonaController@mostrarFormularioCargos',
        'as' => 'mostrarFormularioCargos'
    ]);

    Route::post('/guardar-tipo-persona', [
        'uses' => $controller . 'TipoPersonaController@guardarTipoPersona',
        'as' => 'guardar-tipo-persona'
    ]);

    Route::post('/borrar-tipo-persona', [
        'uses' => $controller . 'TipoPersonaController@borrarTipoPersona',
        'as' => 'borrar-tipo-persona'
    ]);

    Route::resource('tipo-persona-rols', $controller . 'TipoPersonaRolsController');

    Route::get('/tipo-persona-rols', [
        'uses' => $controller . 'TipoPersonaRolsController@inicio',
        'as' =>  'tipo-persona-rols',
    ]);

    Route::post('/consultar-tipo-persona-rols', [
        'uses' => $controller . 'TipoPersonaRolsController@consultarTipoPersonaRols',
        'as' =>  'consultar-tipo-persona-rols',
    ]);

    Route::post('/mostrarFormularioRoles', [
        'uses' => $controller . 'TipoPersonaRolsController@mostrarFormularioRoles',
        'as' =>  'mostrarFormularioRoles',
    ]);

    Route::post('/guardar-tipo-persona-rols', [
        'uses' => $controller . 'TipoPersonaRolsController@guardarTipoPersonaRols',
        'as' =>  'guardar-tipo-persona-rols',
    ]);

    Route::post('/borrar-tipo-persona-rols', [
        'uses' => $controller . 'TipoPersonaRolsController@borrarTipoPersonaRols',
        'as' =>  'borrar-tipo-persona-rols',
    ]);

    Route::post('/registros-roles', [
        'uses' => $controller . 'TipoPersonaRolsController@registrosRoles',
        'as' =>  'registros-roles',
    ]);
    Route::post('/validar-roles', [
        'uses' => $controller . 'TipoPersonaRolsController@validarRoles',
        'as' =>  'validar-roles',
    ]);
});
