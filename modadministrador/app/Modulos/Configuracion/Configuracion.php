<?php

namespace App\Modulos\Configuracion;
use App\Modulos\Usuario\User;
use App\Modulos\Parametrizable\ParametroDetalles;
use Illuminate\Support\Facades\DB;

class Configuracion
{

    const TIPO_DOCUMENTO = 1; 
    const CIUDAD = 2;
    const ETNIA = 3;
    const EPS = 4;
    const GENERO = 5;
    const AREA = 6;

    static function tipoUsuario($tipo)
    {
        $estado = '';
        switch ($tipo) {
            case 1:
                $estado = 'SUPERVISOR';
            break;
            case 2:
                $estado = 'JEFE AREA';
            break;
            case 3:
                $estado = 'APOYO';
            break;
            default:
                $estado = 0;
            break;
        }

        return $estado;
    }


    static function tipoEstado($tipo)
    {
        $estado = '';
        switch ($tipo) {
            case 0:
                $estado = 'NO';
            break;
            case 1:
                $estado = 'SI';
            break;

            default:
                $estado = 0;
            break;
        }

        return $estado;
    }


    static function estado($tipo)
    {
        $estado = '';
        switch ($tipo) {
            case 0:
                $estado = 'Inactivo';
            break;
            case 1:
                $estado = 'Activo';
            break;

            default:
                $estado = 0;
            break;
        }

        return $estado;
    }

    static function obtenerAnios(){
        $anios=array();
        for ($i=date("Y")-10; $i <= date("Y") ; $i++) { 
            $anios[$i]=$i;
        }
        return $anios;        
    }

    static function obtenerUsuarios(){
        return User::where('vc_estado','=',1)->get()->pluck('full_name', 'id')->toArray();
    }

    static function obtenerParametro($parametro){
        return ParametroDetalles::where('i_fk_id_parametro',$parametro)->pluck('vc_parametro_detalle', 'i_pk_id')->toArray();
    }

    static function obtenerTablasConTriggers(){
        $tablas = DB::select('SELECT  DISTINCT T.event_object_table FROM INFORMATION_SCHEMA.TRIGGERS T');
        $arrayTablas = [];

        foreach ($tablas as $key => $value) {
            $arrayTablas[$value->event_object_table]=$value->event_object_table;
        }
        return $arrayTablas;
    }
    
} 