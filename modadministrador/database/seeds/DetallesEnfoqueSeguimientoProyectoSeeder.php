<?php

use Illuminate\Database\Seeder;

class DetallesEnfoqueSeguimientoProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'ADULTO',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ADULTO MAYOR',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COMUNIDAD NEGRA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COMUNIDAD RURAL Y CAMPESINA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COMUNIDADES NEGRAS, AFROCOLOMBIANOS O PALENQUES',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COMUNIDADES RURALES Y CAMPESINAS',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CONCIERTOS',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'DISCAPACIDAD',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'GRUPOS ETNICOS',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'HABITANTES DE CALLE',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'INFANCIA Y ADOLESCENCIA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'JUVENTUD',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'LGBTI',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'MUJERES',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'NIÑOS, NIÑAS Y ADOLESCENTES',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PERSONAS CON DISCAPACIDAD',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PERSONAS PRIVADAS DE LA LIBERTAD',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'POBLACIÓN AFROCOLOMBIANA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'POBLACIÓN RAIZAL',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PRIMERA INFANCIA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PUEBLO O COMUNIDAD INDÍGENA',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PUEBLOS INDÍGENAS',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PUEBLOS ROM',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'SIN VOCACIÓN POBLACIONAL',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'VÍCTIMAS DEL CONFLICTO ARMADO',
                'i_fk_id_parametro' => 30,
                'i_estado' => 1,
            ],
        ]);
    }
}
