<?php

use Illuminate\Database\Seeder;

class IniciativaSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>33,
                'vc_parametro' => 'ORIGEN DE LA INICIATIVA',
                'i_estado' => 1,
            ],
        ]);
    }
}
