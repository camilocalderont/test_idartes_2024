<?php

use Illuminate\Database\Seeder;

class ModParticipacionActividadEstimuloSeeder extends Seeder
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
                'i_pk_id'=>38,
                'vc_parametro' => 'MODALIDAD DE PARTICIPACIÓN',
                'i_estado' => 1,
            ],
        ]);
    }
}
