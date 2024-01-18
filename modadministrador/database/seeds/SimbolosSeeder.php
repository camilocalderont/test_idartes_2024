<?php

use Illuminate\Database\Seeder;

class SimbolosSeeder extends Seeder
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
                'i_pk_id'=>56,
                'vc_parametro' => 'SIMBOLOS PROCEDIMIENTO SIG',
                'i_estado' => 1,
            ],
        ]);
    }
}
