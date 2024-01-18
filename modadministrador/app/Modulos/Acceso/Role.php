<?php

namespace App\Modulos\Acceso;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	public function permisos()
	{
		return $this->belongsToMany('App\Modulos\Acceso\Permission', 'permission_role', 'role_id' ,'permission_id')
						->withPivot('i_estado');
	}

	public function users()
    {
        return $this->belongsToMany('App\Modulos\Usuario\User', 'role_user', 'role_id', 'user_id');
    }
}