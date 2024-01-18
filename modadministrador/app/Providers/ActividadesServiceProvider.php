<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Actividad\Repository\ActividadRepository;

class ActividadesServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Modulos\Actividad\Repository\ActividadesInterface', function($app)
        {
            return new ActividadRepository;
        });
    }
}
