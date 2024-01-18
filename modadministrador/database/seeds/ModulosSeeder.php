<?php

use Illuminate\Database\Seeder;

class ModulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_modulo')->insert([
            [
                'vc_modulo' => 'Modulo Admin',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
            ],[
                'vc_modulo' => 'Modulo Paz y Salvo',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 1,
            ],[
                'vc_modulo' => 'Modulo almacén',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ],[
                'vc_modulo' => 'Modulo administrativa',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ],[
                'vc_modulo' => 'Modulo contratación',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ],[
                'vc_modulo' => 'Modulo almacén',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ],[
                'vc_modulo' => 'Modulo jurídico',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ],[
                'vc_modulo' => 'Aplicativo convocatorias',
                'vc_redireccion' => '/localhost/',
                'vc_imagen' => '/localhost/',
                'i_estado' => 0,
            ]
        ]);

    }
}
