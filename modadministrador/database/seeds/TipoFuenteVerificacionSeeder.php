<?php

use Illuminate\Database\Seeder;

class TipoFuenteVerificacionSeeder extends Seeder
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
                'i_pk_id'=>42,
                'vc_parametro' => 'TIPO FUENTE VERIFICACIÓN',
                'i_estado' => 1,
            ],
        ]);
    }
}
