<?php

use Illuminate\Database\Seeder;

class DetallesFuenteTipoVerificacionSeeder extends Seeder
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
				'vc_parametro_detalle'=>'DOCUMENTO OFICIAL',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'ENCUESTA',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'ENTREVISTA',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'ESTADÍSTICAS',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'EVALUACIÓN',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'INFORME',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'INSPECCIÓN',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'PUBLICACIÓN',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
			[
				'vc_parametro_detalle'=>'REGISTROS CONTABLES',
				'i_fk_id_parametro'=>42,
				'i_estado'=>1,
			],
            
        ]); 
    }
}
