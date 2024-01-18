<?php

use Illuminate\Database\Seeder;

class PersonaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_tipo_persona')->insert([
            // Tecnologia> supervisor, jefe de area y apoyo
            [ // Supervisor
                'i_estado' => 1,
                'user_id' => 1,
                'tipo_id' => 1,
            ],[ // Jefe de area
                'i_estado' => 1,
                'user_id' => 1,
                'tipo_id' => 2,
            ],[ // Apoyo
                'i_estado' => 1,
                'user_id' => 2,
                'tipo_id' => 3,
            ],
            // Juridica> supervisor y jefe de area, no tiene apoyos
            [ // Supervisor
                'i_estado' => 1,
                'user_id' => 3,
                'tipo_id' => 1,
            ],[ // Jefe de area
                'i_estado' => 1,
                'user_id' => 3,
                'tipo_id' => 2,
            ],
            // Recurso humano> supervisor, jefe de area y apoyo
            [ // Supervisor
                'i_estado' => 1,
                'user_id' => 4,
                'tipo_id' => 1,
            ],[ // Jefe de area
                'i_estado' => 1,
                'user_id' => 4,
                'tipo_id' => 2,
            ],[ // Apoyo
                'i_estado' => 1,
                'user_id' => 5,
                'tipo_id' => 3,
            ],
            // Almacen> supervisor y jefe de area
            [ // Supervisor
                'i_estado' => 1,
                'user_id' => 6,
                'tipo_id' => 1,
            ],[ // Jefe de area
                'i_estado' => 1,
                'user_id' => 6,
                'tipo_id' => 2,
            ]

        ]);

    }
}
