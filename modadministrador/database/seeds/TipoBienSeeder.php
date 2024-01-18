<?php

use Illuminate\Database\Seeder;

class TipoBienSeeder extends Seeder
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
                'i_pk_id'=>47,
                'vc_parametro' => 'TIPO DE BIEN',
                'i_estado' => 1,
            ],
        ]);
    }
}
