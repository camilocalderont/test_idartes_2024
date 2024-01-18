<?php

namespace App\Modulos\Modulo;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = 'tbl_modulo';
    protected $primaryKey= 'i_pk_id';
    protected $fillable = [
        'vc_modulo', 'vc_redireccion','vc_imagen','i_estado',
    ];
    public $timestamps = true;

    public function actividades()
    {
    	return $this->hasMany('App\Modulos\Modulo\Actividad', 'i_fk_id_modulo','i_pk_id');
    }

}