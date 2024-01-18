<?php

use Illuminate\Database\Seeder;

class DetallesTipoMetaProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parametros_detalles')->insert([
            [
                'vc_parametro_detalle' => 'ASISTENCIA / ATENCIÓN',
                'i_fk_id_parametro' => 27,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ESTÍMULO / JURADOS',
                'i_fk_id_parametro' => 27,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'OTROS',
                'i_fk_id_parametro' => 27,
                'i_estado' => 1,
            ],
        ]);
    }
}
