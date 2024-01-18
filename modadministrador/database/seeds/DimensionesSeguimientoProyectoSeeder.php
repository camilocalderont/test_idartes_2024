<?php

use Illuminate\Database\Seeder;

class DimensionesSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>28,
                'vc_parametro' => 'DIMENSIONES',
                'i_estado' => 1,
            ],
        ]);
    }
}
