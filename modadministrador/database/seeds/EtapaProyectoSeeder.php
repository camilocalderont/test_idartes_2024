<?php

use Illuminate\Database\Seeder;

class EtapaProyectoSeeder extends Seeder
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
                'i_pk_id'=>26,
                'vc_parametro' => 'ETAPA',
                'i_estado' => 1,
            ],
        ]);
    }
}
