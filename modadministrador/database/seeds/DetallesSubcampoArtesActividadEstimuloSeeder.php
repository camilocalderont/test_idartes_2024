<?php

use Illuminate\Database\Seeder;

class DetallesSubcampoArtesActividadEstimuloSeeder extends Seeder
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
                'vc_parametro_detalle' => 'FORMACIÓN',
                'i_fk_id_parametro' => 37,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INVESTIGACIÓN',
                'i_fk_id_parametro' => 37,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CREACIÓN',
                'i_fk_id_parametro' => 37,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CIRCULACIÓN',
                'i_fk_id_parametro' => 37,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'APROPIACIÓN',
                'i_fk_id_parametro' => 37,
                'i_estado' => 1,
            ],
        ]);
    }
}
