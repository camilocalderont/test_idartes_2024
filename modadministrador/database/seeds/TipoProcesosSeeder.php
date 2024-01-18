<?php

use Illuminate\Database\Seeder;

class TipoProcesosSeeder extends Seeder
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
                'i_pk_id'=>55,
                'vc_parametro' => 'TIPO DE PROCESO',
                'i_estado' => 1,
            ],
        ]);
    }
}
