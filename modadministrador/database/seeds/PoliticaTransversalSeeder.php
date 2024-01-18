<?php

use Illuminate\Database\Seeder;

class PoliticaTransversalSeeder extends Seeder
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
                'i_pk_id'=>63, 
                'vc_parametro' => 'POLÍTICAS TRANSVERSALES SUIFP-TERRITORIO',
                'i_estado' => 1,
            ],
        ]);
    }
}
