<?php

use Illuminate\Database\Seeder;

class DetalleSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parametros_detalles')->insert([            
			/*[ 
				'vc_parametro_detalle'=>'CONGRESO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"01",
			],	
			[ 
				'vc_parametro_detalle'=>'PRESIDENCIA DE LA REPÚBLICA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"02",
			],	
			[ 
				'vc_parametro_detalle'=>'PLANEACIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"03",
			],	
			[ 
				'vc_parametro_detalle'=>'INFORMACIÓN ESTADÍSTICA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"04",
			],	
			[ 
				'vc_parametro_detalle'=>'EMPLEO PÚBLICO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"05",
			],	
			[ 
				'vc_parametro_detalle'=>'RELACIONES EXTERIORES',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"11",
			],	
			[ 
				'vc_parametro_detalle'=>'JUSTICIA Y DEL DERECHO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"12",
			],	
			[ 
				'vc_parametro_detalle'=>'HACIENDA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"13",
			],	
			[ 
				'vc_parametro_detalle'=>'SECTOR DEFENSA Y POLICÍA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"15",
			],	
			[ 
				'vc_parametro_detalle'=>'AGRICULTURA Y DESARROLLO RURAL',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"17",
			],	
			[ 
				'vc_parametro_detalle'=>'SALUD Y PROTECCIÓN SOCIAL',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"19",
			],	
			[ 
				'vc_parametro_detalle'=>'MINAS Y ENERGÍA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"21",
			],	
			[ 
				'vc_parametro_detalle'=>'EDUCACIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"22",
			],	
			[ 
				'vc_parametro_detalle'=>'TECNOLOGÍAS DE LA INFORMACIÓN Y LAS COMUNICACIONES',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"23",
			],	
			[ 
				'vc_parametro_detalle'=>'TRANSPORTE',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"24",
			],	
			[ 
				'vc_parametro_detalle'=>'ORGANISMOS DE CONTROL',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"25",
			],	
			[ 
				'vc_parametro_detalle'=>'RAMA JUDICIAL',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"27",
			],	
			[ 
				'vc_parametro_detalle'=>'REGISTRADURÍA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"28",
			],	
			[ 
				'vc_parametro_detalle'=>'FISCALÍA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"29",
			],	
			[ 
				'vc_parametro_detalle'=>'AMBIENTE Y DESARROLLO SOSTENIBLE',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"32",
			],	
			[ 
				'vc_parametro_detalle'=>'CULTURA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"33",
			],	
			[ 
				'vc_parametro_detalle'=>'COMERCIO, INDUSTRIA Y TURISMO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"35",
			],	
			[ 
				'vc_parametro_detalle'=>'TRABAJO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"36",
			],	
			[ 
				'vc_parametro_detalle'=>'INTERIOR',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"37",
			],	
			[ 
				'vc_parametro_detalle'=>'CIENCIA, TECNOLOGÍA E INNOVACIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"39",
			],	
			[ 
				'vc_parametro_detalle'=>'VIVIENDA, CIUDAD Y TERRITORIO',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"40",
			],	
			[ 
				'vc_parametro_detalle'=>'INCLUSIÓN SOCIAL Y RECONCILIACIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"41",
			],	
			[ 
				'vc_parametro_detalle'=>'INTELIGENCIA',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"42",
			],	
			[ 
				'vc_parametro_detalle'=>'DEPORTE Y RECREACIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"43",
			],	
			[ 
				'vc_parametro_detalle'=>'SISTEMA INTEGRAL DE VERDAD, JUSTICIA, REPARACIÓN Y NO REPETICIÓN',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"44",
			],*/
			[ 
				'i_pk_id'=>6554,
				'vc_parametro_detalle'=>'GOBIERNO TERRRITORIAL',
				'i_fk_id_parametro'=>44,
				'i_estado'=>1,
				'vc_codigo_interno'=>"45",
			],

        ]);//
    }
}
