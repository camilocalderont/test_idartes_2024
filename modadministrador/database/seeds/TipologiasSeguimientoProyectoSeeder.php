<?php

use Illuminate\Database\Seeder;

class TipologiasSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>29,
                'vc_parametro' => 'TIPOLOGÍA DE LA ACTIVIDAD',
                'i_estado' => 1,
            ],
        ]);
    }
}
