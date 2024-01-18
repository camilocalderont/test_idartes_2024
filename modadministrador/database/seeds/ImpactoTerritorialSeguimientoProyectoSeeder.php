<?php

use Illuminate\Database\Seeder;

class ImpactoTerritorialSeguimientoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parametros')->insert([
            [
                'i_pk_id'=>32,
                'vc_parametro' => 'IMPACTO TERRITORIAL',
                'i_estado' => 1,
            ],
        ]);
    }
}
