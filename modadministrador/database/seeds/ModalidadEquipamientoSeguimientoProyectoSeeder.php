<?php

use Illuminate\Database\Seeder;

class ModalidadEquipamientoSeguimientoProyectoSeeder extends Seeder
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
                'i_pk_id'=>34,
                'vc_parametro' => 'MODALIDAD DE USO DEL EQUIPAMIENTO',
                'i_estado' => 1,
            ],
        ]);
    }
}
