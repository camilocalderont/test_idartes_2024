<?php

namespace App\Modulos\Seminario\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Seminario\Repository\SeminarioRepository;

class SeminarioServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Modulos\Seminario\Repository\SeminarioInterface', function($app)
        {
            return new SeminarioRepository;
        });
    }
}
