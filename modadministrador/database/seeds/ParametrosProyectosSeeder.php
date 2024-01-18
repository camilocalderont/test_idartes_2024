<?php

use Illuminate\Database\Seeder;

class ParametrosProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parametros')->insert([
            /*[
                'i_pk_id'=>23,
                'vc_parametro' => 'CENTRO POBLADO',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>24,
                'vc_parametro' => 'MEDIDO A TRAVÉS DE',
                'i_estado' => 1,
            ], */ 
            [
                'i_pk_id'=>25,
                'vc_parametro' => 'CLASE DE PERFIL',
                'i_estado' => 1,
            ]                      
        ]);
    }
}
