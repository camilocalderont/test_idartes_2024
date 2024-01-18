<?php
    	

    Route::group(['middleware' => 'auth'], function(){
        $controller = "\\App\\Modulos\\Auditoria\\Controllers\\";
 
        Route::post('/consultar-auditoria', [  
            'uses' => $controller .'AuditoriaController@consultarAuditoria' ,
            'as' => 'consultar-auditoria' 
        ]);	  

        Route::post('/consultar-login', [  
            'uses' => $controller .'AuditoriaController@consultarLogin' ,
            'as' => 'consultar-login' 
        ]);                

        Route::get('/auditoria',[
        	'uses' => $controller .'AuditoriaController@inicio',
        	 'as' =>  'auditoria',
        ]);
        Route::post('/log-login', [  
            'uses' => $controller .'AuditoriaController@RegistrarLogin' ,
            'as' => 'log-login' 
        ]);    

    });        