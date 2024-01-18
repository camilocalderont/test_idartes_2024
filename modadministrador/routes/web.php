<?php
session_start();
//session_set_cookie_params(5000000000, "/");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Auth::routes();
    $controller = "\\App\\Modulos\\Home\\Controllers\\";
    Route::match(['post','any'], '/permiso', $controller.'HomeController@permiso');
    Route::get('/welcome', $controller.'HomeController@welcome');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    
                           

Route::group(['middleware' => 'auth'], function()
{
    

    Route::get('/', '\App\Modulos\Home\Controllers\HomeController@inicio')->name('inicio');


    Route::get('reporte_uno', [
        'as' => 'reporte_uno',
        'uses' => 'HomeController@inicio'
    ]);
   
    Route::get('configuracion', function()
    {
        return view('secciones.configuracion.inicio', []);
    })->name('configuracion');

    
});


