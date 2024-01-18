<?php

use Illuminate\Database\Seeder;

class ConcursoActividadEstimuloSeeder extends Seeder
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
                'i_pk_id'=>35,
                'vc_parametro' => 'CATEGORÍA',
                'i_estado' => 1,
            ],
        ]);
    }
}
