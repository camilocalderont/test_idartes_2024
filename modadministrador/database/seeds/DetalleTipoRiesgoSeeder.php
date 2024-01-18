<?php

use Illuminate\Database\Seeder;

class DetalleTipoRiesgoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'ADMINISTRATIVOS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ASOCIADOS A FENÓMENOS DE ORIGEN BIOLÓGICO: PLAGAS, EPIDEMIAS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ASOCIADOS A FENÓMENOS DE ORIGEN HUMANO NO INTENCIONALES: AGLOMERACIÓN DE PÚBLICO',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ASOCIADOS A FENÓMENOS DE ORIGEN NATURAL: ATMOSFÉRICOS, HIDROLÓGICOS, GEOLÓGICOS, OTROS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ASOCIADOS A FENÓMENOS DE ORIGEN SOCIO-NATURAL: INUNDACIONES, MOVIMIENTOS EN MASA, INCENDIOS FORESTALES',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ASOCIADOS A FENÓMENOS DE ORIGEN TECNOLÓGICO: QUÍMICOS, ELÉCTRICOS, MECÁNICOS, TÉRMICOS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DE CALENDARIO',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DE COSTOS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DE MERCADO',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'FINANCIEROS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'LEGALES',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'OPERACIONALES',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'SANITARIOS',
                'i_fk_id_parametro' => 43,
                'i_estado' => 1,
            ],
        ]);
    }
}
