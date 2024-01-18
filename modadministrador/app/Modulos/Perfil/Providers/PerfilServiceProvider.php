<?php 

namespace App\Modulos\Perfil\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Perfil\PerfilRepository;

class PerfilServiceProvider extends ServiceProvider
{

	public function boot()

	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Perfil\PerfilInterface', function($app)
        {
            return new PerfilRepository;
        });
	}

}
