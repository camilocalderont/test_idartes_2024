<?php

use Illuminate\Database\Seeder;

class TipoEstimuloActividadEstimuloSeeder extends Seeder
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
                'i_pk_id'=>36,
                'vc_parametro' => 'TIPO DE ESTÍMULO',
                'i_estado' => 1,
            ],
        ]);
    }
}
