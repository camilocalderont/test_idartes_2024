<?php

use Illuminate\Database\Seeder;

class DetallesEtapaProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'PREINVERSIÓN',
                'i_fk_id_parametro' => 26,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INVERSIÓN',
                'i_fk_id_parametro' => 26,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'OPERACIÓN',
                'i_fk_id_parametro' => 26,
                'i_estado' => 1,
            ],
        ]);            
    }
}
