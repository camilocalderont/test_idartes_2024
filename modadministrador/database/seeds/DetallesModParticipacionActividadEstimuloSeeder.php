<?php

use Illuminate\Database\Seeder;

class DetallesModParticipacionActividadEstimuloSeeder extends Seeder
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
                'vc_parametro_detalle' => 'PERSONA NATURAL',
                'i_fk_id_parametro' => 38,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PERSONA JURÍDICA',
                'i_fk_id_parametro' => 38,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'AGRUPACIÓN',
                'i_fk_id_parametro' => 38,
                'i_estado' => 1,
            ],
        ]);
    }
}
