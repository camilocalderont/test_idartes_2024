<?php

use Illuminate\Database\Seeder;

class ParametrosDetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_parametros_detalles')->insert([
            [
                'i_pk_id'=>1,
                'vc_parametro_detalle' => 'Cédula de ciudadanía (CC)',
                'i_fk_id_parametro' => 1,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>2,
                'vc_parametro_detalle' => 'Tarjeta de identidad (TI)',
                'i_fk_id_parametro' => 1,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>3,
                'vc_parametro_detalle' => 'Tarjeta pasaporte (TP) ',
                'i_fk_id_parametro' => 1,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>4,
                'vc_parametro_detalle' => 'Cédula de extranjería (CE)',
                'i_fk_id_parametro' => 1,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>5,
                'vc_parametro_detalle' => 'Registro civil (RC)',
                'i_fk_id_parametro' => 1,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>6,
                'vc_parametro_detalle' => 'Bogota',
                'i_fk_id_parametro' => 2,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>7,
                'vc_parametro_detalle' => 'Cundinamarca',
                'i_fk_id_parametro' => 2,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>8,
                'vc_parametro_detalle' => 'Mestizos',
                'i_fk_id_parametro' => 3,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>9,
                'vc_parametro_detalle' => 'Raizal',
                'i_fk_id_parametro' => 3,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>10,
                'vc_parametro_detalle' => 'Mulatos',
                'i_fk_id_parametro' => 3,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>11,
                'vc_parametro_detalle' => 'Nueva EPS',
                'i_fk_id_parametro' => 4,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>12,
                'vc_parametro_detalle' => 'Compensar',
                'i_fk_id_parametro' => 4,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>13,
                'vc_parametro_detalle' => 'Colsanita',
                'i_fk_id_parametro' => 4,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>14,
                'vc_parametro_detalle' => 'Hombre',
                'i_fk_id_parametro' => 5,
                'i_estado' => 1,
            ],[
                'i_pk_id'=>15,
                'vc_parametro_detalle' => 'Mujer',
                'i_fk_id_parametro' => 5,
                'i_estado' => 1,
            ]
        ]);

    }
}
