<?php

use Illuminate\Database\Seeder;

class DetallesEquipamientoSeguimientoProyectoSeeder extends Seeder
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
                'vc_parametro_detalle' => 'PRÉSTAMO GRATUITO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PROPIO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CONVENIO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ARRENDAMIENTO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COPRODUCCIÓN',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'CONTRATO APOYO A LA GESTIÓN',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PÚBLICO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'GESTIONADO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'COMODATO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'GRATUITO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PAGO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'ALQUILER',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'PRIVADO',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
            [
                'vc_parametro_detalle' => 'N.A',
                'i_fk_id_parametro' => 34,
                'i_estado' => 1,
            ],
        ]);
    }
}
