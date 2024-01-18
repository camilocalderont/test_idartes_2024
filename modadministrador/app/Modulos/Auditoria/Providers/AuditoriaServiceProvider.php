<?php 

namespace App\Modulos\Auditoria\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\Auditoria\Repository\AuditoriaRepository;

class AuditoriaServiceProvider extends ServiceProvider
{

	public function boot()
	{

	}

	public function register()
	{
        $this->app->bind('App\Modulos\Auditoria\Repository\AuditoriaInterface', function($app)
        {
            return new AuditoriaRepository;
        });
	}

}
