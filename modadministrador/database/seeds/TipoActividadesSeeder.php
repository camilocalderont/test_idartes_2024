<?php

use Illuminate\Database\Seeder;

class TipoActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_tipo_actividad')->insert([
            // Permisos a Tipos personas a las actividades:

            //Actividad Aprobacion de solicitudes
            //Actividad 1 Modulo 1 a los rolles de:
            [ // Supervisor
                'actividad_id' => 1,
                'tipo_id' => 1,
                'i_estado' => 1,
            ],[ // Jefe de area
                'actividad_id' => 1,
                'tipo_id' => 2,
                'i_estado' => 1,
            ],[ // Apoyo
                'actividad_id' => 1,
                'tipo_id' => 3,
                'i_estado' => 1,
            ],

            //Actividad Historial
            //Actividad 2 Modulo 1 a los rolles de:
            [ // Supervisor
                'actividad_id' => 2,
                'tipo_id' => 1,
                'i_estado' => 1,
            ],[ // Jefe de area
                'actividad_id' => 2,
                'tipo_id' => 2,
                'i_estado' => 1,
            ],[ // Apoyo
                'actividad_id' => 2,
                'tipo_id' => 3,
                'i_estado' => 1,
            ],

            //Actividad Historial
            //Actividad 3 Modulo 2 a los rolles de:
            [ // Supervisor
                'actividad_id' => 3,
                'tipo_id' => 1,
                'i_estado' => 1,
            ],[ // Jefe de area
                'actividad_id' => 3,
                'tipo_id' => 2,
                'i_estado' => 1,
            ],[ // Apoyo
                'actividad_id' => 3,
                'tipo_id' => 3,
                'i_estado' => 1,
            ],

            //Actividad Historial
            //Actividad 3 Modulo 2 a los rolles de:
            [ // Supervisor
                'actividad_id' => 4,
                'tipo_id' => 1,
                'i_estado' => 1,
            ],[ // Jefe de area
                'actividad_id' => 4,
                'tipo_id' => 2,
                'i_estado' => 1,
            ],[ // Apoyo
                'actividad_id' => 4,
                'tipo_id' => 3,
                'i_estado' => 1,
            ]


        ]);

    }
}
