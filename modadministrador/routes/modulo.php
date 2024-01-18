<?php

Route::group(['prefix' => 'modulo', 'middleware' => 'auth'], function()
{
   
    Route::get('/', [
        'uses' => '\App\Modulos\Modulo\Controllers\ModuloController@inicio',
        'as' => 'costos_municipios'
    ]);

    Route::post('/create', [
        'uses' => '\App\Modulos\Modulo\Controllers\ModuloController@crear',
        'as' => 'create_modulo'
    ]);

    Route::get('/data', [
        'uses' => '\App\Modulos\Modulo\Controllers\ModuloController@data',
        'as' => 'table_school'
    ]);

    Route::put('/save', [
        'uses' => '\App\Modulos\Modulo\Controllers\ModuloController@actualizar',
        'as' => 'save_modulo'
    ]);

});
