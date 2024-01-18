<?php

use Illuminate\Database\Seeder;

class TipoRiesgoSeeder extends Seeder
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
                'i_pk_id'=>43,
                'vc_parametro' => 'TIPO DE RIESGO',
                'i_estado' => 1,
            ],
        ]);
    }
}
