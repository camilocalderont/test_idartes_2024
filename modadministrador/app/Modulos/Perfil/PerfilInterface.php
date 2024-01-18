<?php

namespace App\Modulos\Perfil;

use App\Modulos\General\CRUDInterface;

interface PerfilInterface extends CRUDInterface
{
	public function updatePassword(array $data);
}