<?php 

namespace App\Modulos\TipoPersona\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modulos\TipoPersona\Repository\TipoPersonaRolsInterface;
use App\Modulos\TipoPersona\Repository\TipoPersonaRolsRepository;

class TipoPersonaRolsProvider extends ServiceProvider
{

	public function boot()

	{

	}

	public function register()
	{
        $this->app->bind(TipoPersonaRolsInterface::class, function($app)
        {
            return new TipoPersonaRolsRepository;
        });
	}

}
