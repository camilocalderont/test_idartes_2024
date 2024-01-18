<?php

use Illuminate\Database\Seeder;

class DetalleSimbolosSeeder extends Seeder
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
                'i_pk_id'=>7784,
                'vc_parametro_detalle' => 'Inicio o Final',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'inicio.jpg',
                'i_estado' => 1, 
            ],
            [
                'i_pk_id'=>7785,
                'vc_parametro_detalle' => 'Actividad',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'actividad.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7786,
                'vc_parametro_detalle' => 'Decisión',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'decision.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7787,
                'vc_parametro_detalle' => 'Documento',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'documento.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7788,
                'vc_parametro_detalle' => 'Multidocumento',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'multidocumento.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7789,
                'vc_parametro_detalle' => 'Conector',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'conector.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7790,
                'vc_parametro_detalle' => 'Conector de página',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'conector-de-pagina.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7791,
                'vc_parametro_detalle' => 'Interconexión',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'interconexion.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7792,
                'vc_parametro_detalle' => 'Base de datos',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'base-de-datos.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7793,
                'vc_parametro_detalle' => 'Punto de Control',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'punto-de-control.jpg',
                'i_estado' => 1,
            ],
            [
                'i_pk_id'=>7794,
                'vc_parametro_detalle' => 'Líneas de flujo',
                'i_fk_id_parametro' => 56,
                'vc_codigo_interno'=>'lineas-de-flujo.jpg',
                'i_estado' => 1,
            ],     
        ]);
    }
}
