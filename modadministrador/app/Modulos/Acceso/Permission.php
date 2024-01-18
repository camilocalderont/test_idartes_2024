<?php 

namespace App\Modulos\Acceso;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	public function roles()
	{
		return $this->belongsToMany('App\Modulos\Acceso\Role', 'permission_role', 'permission_id', 'role_id')
						->withPivot('i_estado');
	}

	public function modulo()
	{
		return $this->belongsTo('App\Modulos\Modulo\Modulo', 'i_fk_id_modulo');
	}
}