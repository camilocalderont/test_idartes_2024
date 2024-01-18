<?php

namespace App\Modulos\GruposTrabajo\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\GruposTrabajo\Repository\GrupoTrabajoRepository;

class GrupoTrabajoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Modulos\GruposTrabajo\Repository\GrupoTrabajoInterface', function($app)
        {
            return new GrupoTrabajoRepository;
        });
    }
}
