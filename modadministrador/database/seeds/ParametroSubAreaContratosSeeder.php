<?php

use Illuminate\Database\Seeder;

class ParametroSubAreaContratosSeeder extends Seeder
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
                'i_pk_id'=>40,
                'vc_parametro' => 'SUB ÁREA DE CONTRATO',
                'i_estado' => 1,
            ]                      
        ]);
    }
}
