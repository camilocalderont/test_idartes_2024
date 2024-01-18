<?php

namespace App\Modulos\Parametro\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Parametro\Repository\ParametroRepository;

class ParametroServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Modulos\Parametro\Repository\ParametroInterface', function($app)
        {
            return new ParametroRepository;
        });
    }
}
