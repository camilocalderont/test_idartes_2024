<?php

use Illuminate\Database\Seeder;

class NovedadEstimuloActividadEstimuloSeeder extends Seeder
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
                'i_pk_id'=>39,
                'vc_parametro' => 'NOVEDAD DEL ESTÍMULO',
                'i_estado' => 1,
            ],
        ]);
    }
}
