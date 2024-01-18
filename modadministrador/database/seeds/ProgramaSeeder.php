<?php

use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
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
                'i_pk_id'=>45,
                'vc_parametro' => 'PROGRAMA',
                'i_estado' => 1,
            ],
        ]);
    }
}
