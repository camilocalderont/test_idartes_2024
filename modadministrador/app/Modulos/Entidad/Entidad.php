<?php

namespace App\Modulos\Entidad;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'tbl_entidad';
    protected $primaryKey= 'i_pk_id';
    protected $fillable = [
        'vc_nombre',
        'vc_acronimo',
        'vc_codigo',
        'vc_codigo_bogdata',
        'vc_nombre_responsable',
        'vc_telefono_responsable',
        'vc_correo_responsable',
        'i_principal',
        'i_cabeza_sector',
    ];
    public $timestamps = true;

}
