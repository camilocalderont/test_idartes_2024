<?php

use Illuminate\Database\Seeder;

class EnfoqueDiferencialSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>30,
                'vc_parametro' => 'ENFOQUE POBLACIONAL DIFERENCIAL',
                'i_estado' => 1,
            ],
        ]);
    }
}
