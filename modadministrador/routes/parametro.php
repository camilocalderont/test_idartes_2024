<?php

Route::group(['middleware' => 'auth'], function(){

    $controller = "\\App\\Modulos\\Parametro\\Controllers\\";

    Route::resource('parametro', $controller .'ParametroController');   

}); 