<?php

use Illuminate\Database\Seeder;

class DetallesImpactoSeguimientoProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'METROPOLITANO',
                'i_fk_id_parametro' => 32,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'LOCAL',
                'i_fk_id_parametro' => 32,
                'i_estado' => 1,
            ],
        ]);
    }
}
