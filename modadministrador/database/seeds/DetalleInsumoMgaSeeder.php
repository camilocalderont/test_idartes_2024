<?php

use Illuminate\Database\Seeder;

class DetalleInsumoMgaSeeder extends Seeder
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
				'vc_parametro_detalle'=>'Mano de obra calificada',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1.00',
			],
			[
				'vc_parametro_detalle'=>'Mano de obra no calificada',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.60',
			],
			[
				'vc_parametro_detalle'=>'Materiales',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.79',
			],
			[
				'vc_parametro_detalle'=>'Servicios domiciliarios',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1.47',
			],
			[
				'vc_parametro_detalle'=>'Terrenos',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1.00',
			],
			[
				'vc_parametro_detalle'=>'Edificios',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Maquinaria y Equipo',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.77',
			],
			[
				'vc_parametro_detalle'=>'Mantenimiento maquinaria y equipo',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.71',
			],
			[
				'vc_parametro_detalle'=>'Transporte',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios de venta y de distribución',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios de alojamiento comidas y bebidas',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios financieros y conexos',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios de leasing',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios inmobiliarios',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios prestados a las empresas y servicios de producción',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Servicios para la comunidad, sociales y personales',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'0.80',
			],
			[
				'vc_parametro_detalle'=>'Gastos imprevistos',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1',
			],
			[
				'vc_parametro_detalle'=>'Adquisición de activos financieros',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1',
			],
			[
				'vc_parametro_detalle'=>'Disminución de pasivos',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1',
			],
			[
				'vc_parametro_detalle'=>'Impuestos, pagos de derechos, contribuciones, multas y sanciones',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1',
			],
			[
				'vc_parametro_detalle'=>'Transferencias corrientes y de capital',
				'i_fk_id_parametro'=>	48,
				'i_estado'=>	1,				
				'vc_codigo_interno'=>	'1',
			],

        ]);
    }
}
