<?php

use Illuminate\Database\Seeder;

class UpzUprSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>31,
                'vc_parametro' => 'UPZ - UPR',
                'i_estado' => 1,
            ],
        ]);
    }
}
