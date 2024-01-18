<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'perfil', 'middleware' => 'auth' ], function () {
    Route::get('', [
        'as' => 'perfil.index',
        'uses' => '\App\Modulos\Perfil\Controllers\PerfilController@index'
    ]);
    Route::post('/update-perfil', [
        'as' => 'perfil.update.perfil',
        'uses' => '\App\Modulos\Perfil\Controllers\PerfilController@updateperfil'
    ]);
    Route::post('/update-perfil-picture', [
        'as' => 'perfil.update.perfil-pic',
        'uses' => '\App\Modulos\Perfil\Controllers\PerfilController@updatePerfilPicture'
    ]);
    Route::post('/update-password', [
        'as' => 'perfil.update.password',
        'uses' => '\App\Modulos\Perfil\Controllers\PerfilController@updatePassword'
    ]);
    Route::post('/store-picture', [
        'as' => 'perfil.update.crop',
        'uses' => '\App\Modulos\Perfil\Controllers\PerfilController@storePerfilPic'
    ]);
});


Route::group(['prefix' => 'tipo-actividad', 'middleware' => 'auth' ], function () {
    Route::get('', [
        'as' => 'tipo.actividad.index',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoActividadController@index'
    ]);
    Route::post('/store-tipo-actividad', [
        'as' => 'tipo.actividad.show',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoActividadController@show'
    ]);

    Route::get('add/{id_act}/{id_tipo}', [
        'as' => 'tipo.actividad.add',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoActividadController@add'
    ]);

    Route::get('remove/{id_act}/{id_tipo}', [
        'as' => 'tipo.actividad.add',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoActividadController@remove'
    ]);
 
});

/*Route::group(['prefix' => 'usuario-actividad', 'middleware' => 'auth' ], function () {
    Route::get('', [
        'as' => 'tipo.actividad.index',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoPersonaUsuarioController@index'
    ]);

   Route::get('/cargos', [
        'as' => 'tipo.actividad.indexCargos',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoPersonaUsuarioController@cargos'
    ]);    
    Route::post('/store-tipopersona-usuario', [
        'as' => 'tipopersona.usuario.show',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoPersonaUsuarioController@show'
    ]);

    Route::get('add/{id_tipo_persona}/{id_usuario_hiden}', [
        'as' => 'tipo.actividad.add',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoPersonaUsuarioController@add'
    ]);

    Route::get('remove/{id_tipo_persona}/{id_usuario_hiden}', [
        'as' => 'tipo.actividad.add',
        'uses' => '\idartes\usuario\GestionPerfiles\Controllers\TipoPersonaUsuarioController@remove'
    ]);
 
});*/