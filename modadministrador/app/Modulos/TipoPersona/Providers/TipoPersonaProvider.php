<?php 

namespace App\Modulos\TipoPersona\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\TipoPersona\Repository\TipoPersonaInterface;
use App\Modulos\TipoPersona\Repository\TipoPersonaRepository;

class TipoPersonaProvider extends ServiceProvider
{

	public function boot()

	{

	}

	public function register()
	{
        $this->app->bind(TipoPersonaInterface::class, function($app)
        {
            return new TipoPersonaRepository;
        });
	}

}
