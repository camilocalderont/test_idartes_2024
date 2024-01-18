<?php

use Illuminate\Database\Seeder;

class DetallesIniciativaSeguimientoProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'IDARTES',
                'i_fk_id_parametro' => 33,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'SECTOR ARTÍSTICO',
                'i_fk_id_parametro' => 33,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PRIVADO',
                'i_fk_id_parametro' => 33,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INTERSECTORIAL',
                'i_fk_id_parametro' => 33,
                'i_estado' => 1,
            ],
        ]);
    }
}
