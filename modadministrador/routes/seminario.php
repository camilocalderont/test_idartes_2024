<?php

Route::group(['middleware' => 'auth'], function(){

    $controller = "\\App\\Modulos\\Seminario\\Controllers\\";

    Route::resource('seminario', $controller .'SeminarioController');   

}); 
