<?php

use Illuminate\Database\Seeder;

class DetallesNovedadEstimuloActividadEstimuloSeeder extends Seeder
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
                'vc_parametro_detalle' => 'DESIERTO',
                'i_fk_id_parametro' => 39,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'RENUNCIA DEL ESTÍMULO',
                'i_fk_id_parametro' => 39,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DECLINACIÓN DEL ESTÍMULO',
                'i_fk_id_parametro' => 39,
                'i_estado' => 1,
            ],
        ]);
    }
}
