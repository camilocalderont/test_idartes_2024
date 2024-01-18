<?php

use Illuminate\Database\Seeder;

class DetallesTipoEstimuloActividadEstimuloSeeder extends Seeder
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
                'vc_parametro_detalle' => 'BECA',
                'i_fk_id_parametro' => 36,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PREMIO',
                'i_fk_id_parametro' => 36,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'RESIDENCIA',
                'i_fk_id_parametro' => 36,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PASANTÍA',
                'i_fk_id_parametro' => 36,
                'i_estado' => 1,
            ],
        ]);
    }
}
