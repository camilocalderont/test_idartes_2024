<?php

use Illuminate\Database\Seeder;

class GrupoTrabajoSeeder extends Seeder
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
                'i_pk_id'=>41,
                'vc_parametro' => 'GRUPOS DE TRABAJO',
                'i_estado' => 1,
            ],
        ]);
    }
}
