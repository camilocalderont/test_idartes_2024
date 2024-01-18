<?php

use Illuminate\Database\Seeder;

class ParametrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        DB::table('tbl_parametros')->insert([
            [
                'i_pk_id'=>1,
                'vc_parametro' => 'Tipo de documento',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>2,
                'vc_parametro' => 'Ciudad',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>3,
                'vc_parametro' => 'Etnia',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>4,
                'vc_parametro' => 'EPS',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>5,
                'vc_parametro' => 'Genero',
                'i_estado' => 1,
            ],[
                'i_pk_id'=>6,
                'vc_parametro' => 'Area',
                'i_estado' => 1,
            ]
        ]);

    }
}
