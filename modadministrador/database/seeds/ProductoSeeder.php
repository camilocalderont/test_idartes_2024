<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
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
                'i_pk_id'=>46,
                'vc_parametro' => 'PRODUCTO',
                'i_estado' => 1,
            ],
        ]);
    }
}
