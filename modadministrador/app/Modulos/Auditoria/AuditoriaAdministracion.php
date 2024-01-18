<?php

namespace App\Modulos\Auditoria;

use Illuminate\Database\Eloquent\Model;
use idartes\usuario\Auditoria as Aud;
class AuditoriaAdministracion extends Aud
{
    protected $table = 'tbl_auditoria_administracion';
}