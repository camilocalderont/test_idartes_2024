<?php

use Illuminate\Database\Seeder;

class DetallesDimensionesSeguimientoProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'APROPIACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CIRCULACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CIRCULACIÓN Y APROPIACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CREACIÓN ',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DIVULGACIÓN CIENTÍFICA',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'FOMENTO',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'FORMACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INVESTIGACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INVESTIGACIÓN Y CIRCULACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PARTICIPACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PROCESO DE INFORMACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PROCESO DE ORGANIZACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PROCESO DE PARTICIPACIÓN',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'SELECCIÓN Y ACABADOS PIEZAS DE PLASTILINA A EXPONER',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'SEMINARIO',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'N.A',
                'i_fk_id_parametro' => 28,
                'i_estado' => 1,
            ],
        ]);
    }
}
