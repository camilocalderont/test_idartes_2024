<?php

namespace App\Modulos\Usuario;

use App\Modulos\Radicacion\Documentacion\Documentacion;
use Illuminate\Notifications\Notifiable;

use idartes\usuario\User as UserM;
class User extends UserM
{
    public function __construct()
    {
    	
    }   
    public function contratos()
    {

        return $this->hasMany('App\Modulos\Contrato\Contrato', 'i_fk_id_usuario', 'id');
    }   

}