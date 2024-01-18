<?php

use Illuminate\Database\Seeder;

class TipoMetaProyectoSeeder extends Seeder
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
                'i_pk_id'=>27,
                'vc_parametro' => 'TIPO META PROYECTO',
                'i_estado' => 1,
            ],
        ]);
    }
}
