<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
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
                'i_pk_id'=>44,
                'vc_parametro' => 'SECTOR',
                'i_estado' => 1,
            ],
        ]);
    }
}
