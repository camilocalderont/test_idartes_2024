<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebModuloRoutes();
        
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapAuditoriaRoutes();
        $this->mapPerfilRoutes();
        $this->mapPerfilesRoutes();
        $this->mapActividadesRoutes();
        $this->mapUsuarioRoutes();
        $this->mapUsuariosGruposTrabajoRoutes();
        $this->mapSeminarioRoutes();
        $this->mapTipoPersona();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

     protected function mapWebModuloRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/modulo.php'));
    }

    protected function mapPerfilRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/perfil.php'));
    }


    protected function mapAuditoriaRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/auditoria.php'));
    }    

    protected function mapPerfilesRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/perfiles.php'));
    }

    protected function mapActividadesRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/actividad.php'));
    }

    protected function mapUsuarioRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/usuarios.php'));
    }

    protected function mapUsuariosGruposTrabajoRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/grupos-trabajo.php'));
    } 

    protected function mapSeminarioRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/seminario.php'));
    }  

    protected function mapTipoPersona()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/tipoPersona.php'));
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
