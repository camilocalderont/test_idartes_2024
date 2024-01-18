<?php

use Illuminate\Database\Seeder;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_tipo')->insert([
            [
                'vc_tipo' => 'Supervisor',
                'i_estado' => 1,
            ],[
                'vc_tipo' => 'Jefe de area.',
                'i_estado' => 1,
            ],[
                'vc_tipo' => 'Apoyo del area.',
                'i_estado' => 1,
            ]
        ]);

    }
}
