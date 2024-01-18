<?php

use Illuminate\Database\Seeder;

class SubcampoArtesActividadEstimuloSeeder extends Seeder
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
                'i_pk_id'=>37,
                'vc_parametro' => 'SUBCAMPO DE LAS ARTES',
                'i_estado' => 1,
            ],
        ]);
    }
}
