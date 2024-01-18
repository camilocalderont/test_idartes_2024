<?php
    	

    Route::group(['middleware' => 'auth'], function(){
        //$controller = "\\App\\Modulos\\Usuario\\Controllers\\";
        $controller = "\\idartes\\usuario\\Controllers\\";

        Route::resource('usuarios', $controller .'UsuarioController'); 

        Route::post('/consultar-usuarios-area', [  
            'uses' => $controller .'UsuarioController@consultarUsuariosArea' ,
            'as' => 'consultar-usuarios-area' 
        ]);	    

        Route::post('/reset-password', [  
            'uses' => $controller .'UsuarioController@resetPassword' ,
            'as' => 'reset-password' 
        ]);    

        Route::post('/removerRolesUsuario', [  
            'uses' => $controller .'UsuarioController@removerRolesUsuario' ,
            'as' => 'removerRolesUsuario' 
        ]); 
            
        Route::get('/gestionar-usuarios',[
        	'uses' => $controller .'UsuarioController@inicio',
        	 'as' =>  'gestionar-usuarios',
        ]);
    });  