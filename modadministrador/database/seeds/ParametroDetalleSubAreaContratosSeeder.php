<?php

use Illuminate\Database\Seeder;

class ParametroDetalleSubAreaContratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parametros_detalles')->insert([
            [
                'vc_parametro_detalle' =>'EC- LITERATURA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- TEATRO',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- MÚSICA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- ARTES PLÁSTICAS',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- AUDIOVISUALES',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- ARTES ELECTRÓNICAS',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'EC- DANZA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'ARTES ELECTRÓNICAS',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'ARTES PLÁSTICAS',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'AUDIOVISUALES',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'DANZA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'LITERATURA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'MÚSICA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'TEATRO',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' =>'INFRAESTRUCTURA',
                'i_fk_id_parametro' => 40,
                'i_estado' => 1,
            ],
        ]);
    }
}
