<?php

use Illuminate\Database\Seeder;

class DetalleTipoProcesosSeeder extends Seeder
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
                'i_pk_id'=>7780,
                'vc_parametro_detalle' => 'ESTRATÉGICO',
                'i_fk_id_parametro' => 55,
                'i_estado' => 1,
            ],
            [ 
                'i_pk_id'=>7781,
                'vc_parametro_detalle' => 'EVALUACIÓN Y MEJORA',
                'i_fk_id_parametro' => 55,
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7782,
                'vc_parametro_detalle' => 'MISIONAL',
                'i_fk_id_parametro' => 55,
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7783,
                'vc_parametro_detalle' => 'TRANSVERSAL',
                'i_fk_id_parametro' => 55,
                'i_estado' => 1,
            ],
        ]);
    }
}
