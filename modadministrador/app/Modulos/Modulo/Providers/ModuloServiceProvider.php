<?php 

namespace App\Modulos\Modulo\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Modulo\ModuloRepository;

class ModuloServiceProvider extends ServiceProvider
{

	public function boot()
	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Modulo\ModuloInterface', function($app)
        {
            return new ModuloRepository;
        });
	}

}
