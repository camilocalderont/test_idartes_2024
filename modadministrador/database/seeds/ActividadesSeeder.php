<?php

use Illuminate\Database\Seeder;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_actividades')->insert([
            [
                'i_pk_id'=>1,
                'vc_actividad' => 'Registro de usuarios',
                'vc_descripcion' => 'descripcion 1',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
                'i_fk_id_modulo' => 1,
            ],
            [
                'i_pk_id'=>2,
                'vc_actividad' => 'Permisos de usuario',
                'vc_descripcion' => 'descripcion 1',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
                'i_fk_id_modulo' => 1,
            ],
            [
                'i_pk_id'=>3,
                'vc_actividad' => 'Bandeja de solicitudes ',
                'vc_descripcion' => 'descripcion 1',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
                'i_fk_id_modulo' => 2,
            ],[
                'i_pk_id'=>4,
                'vc_actividad' => 'Historial de Aprobaciones',
                'vc_descripcion' => 'descripcion 2',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
                'i_fk_id_modulo' => 2,
            ]
        ]);

    }
}
