<?php

use Illuminate\Database\Seeder;

class InsumoMgaSeeder extends Seeder
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
                'i_pk_id'=>48,
                'vc_parametro' => 'INSUMO MGA',
                'i_estado' => 1,
            ],
        ]);
    }
}
