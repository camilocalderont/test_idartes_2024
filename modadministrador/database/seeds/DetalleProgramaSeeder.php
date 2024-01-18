<?php

use Illuminate\Database\Seeder;

class DetalleProgramaSeeder extends Seeder
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
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Congreso de la República',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1815,
				'vc_codigo_interno'=>"0199",
			],	
			[
				'vc_parametro_detalle'=>'Mejoramiento de la eficiencia y la transparencia legislativa',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1815,
				'vc_codigo_interno'=>"0101",
			],	
			[
				'vc_parametro_detalle'=>'Mecanismos de transición hacia la paz a nivel nacional y territorial desde el sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0210",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0299",
			],	
			[
				'vc_parametro_detalle'=>'Acción Integral contra minas antipersonal como mecanismo de transición hacia la paz territorial desde el Sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0206",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la infraestructura física de las entidades del Estado del nivel nacional desde el Sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0209",
			],	
			[
				'vc_parametro_detalle'=>'Prevención y mitigación del riesgo de desastres desde el sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0207",
			],	
			[
				'vc_parametro_detalle'=>'Reintegración de personas y grupos alzados en armas desde el Sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0211",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de las capacidades institucionales en transversalización del enfoque de género dentro de las entidades de los niveles nacional y territorial desde el Sector',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0205",
			],	
			[
				'vc_parametro_detalle'=>'Consolidación de la lucha contra la corrupción desde el sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0203",
			],	
			[
				'vc_parametro_detalle'=>'Gestión de la cooperación internacional del sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0208",
			],	
			[
				'vc_parametro_detalle'=>'Gestión para impulsar el desarrollo integral de los y las jóvenes desde el Sector Presidencia  ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0204",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de las capacidades de articulación estratégica, modernización, eficiencia administrativa, transparencia y acceso a la información desde el sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0214",
			],	
			[
				'vc_parametro_detalle'=>'Renovación territorial para el desarrollo integral de las zonas rurales afectadas por el conflicto armado',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0212",
			],	
			[
				'vc_parametro_detalle'=>'Articulación y fortalecimiento de la respuesta del Estado en materia de Derechos Humanos desde el Sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0201",
			],	
			[
				'vc_parametro_detalle'=>'Gestión de espacios para fortalecer el desarrollo integral de la primera infancia desde el sector Presidencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0202",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento a la garantía plena de derechos de las personas con discapacidad desde el Sector Presidencia de la República',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1816,
				'vc_codigo_interno'=>"0213",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Planeación',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1817,
				'vc_codigo_interno'=>"0399",
			],	
			[
				'vc_parametro_detalle'=>'Promoción de la prestación eficiente de los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1817,
				'vc_codigo_interno'=>"0303",
			],	
			[
				'vc_parametro_detalle'=>'Mejoramiento de la planeación territorial y sectorial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1817,
				'vc_codigo_interno'=>"0301",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento del sistema de compra pública',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1817,
				'vc_codigo_interno'=>"0304",
			],	
			[
				'vc_parametro_detalle'=>'Levantamiento, actualización y acceso a información agrológica',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0403",
			],	
			[
				'vc_parametro_detalle'=>'Levantamiento, actualización, y acceso a información geográfica y cartográfica',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0402",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Información Estadística',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0499",
			],	
			[
				'vc_parametro_detalle'=>'Levantamiento, actualización y administración de la información catastral',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0404",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo, innovación y transferencia de conocimiento geoespacial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0405",
			],	
			[
				'vc_parametro_detalle'=>'Levantamiento y actualización de información estadística de calidad',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1818,
				'vc_codigo_interno'=>"0401",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Empleo Público',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1819,
				'vc_codigo_interno'=>"0599",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la Gestión Pública en las Entidades Nacionales y Territoriales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1819,
				'vc_codigo_interno'=>"0505",
			],	
			[
				'vc_parametro_detalle'=>'Administración y vigilancia de las carreras administrativas de los servidores públicos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1819,
				'vc_codigo_interno'=>"0504",
			],	
			[
				'vc_parametro_detalle'=>'Mejoramiento de la calidad educativa en gestión pública ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1819,
				'vc_codigo_interno'=>"0503",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Relaciones Exteriores',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1199",
			],	
			[
				'vc_parametro_detalle'=>'Soberanía territorial y desarrollo fronterizo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1104",
			],	
			[
				'vc_parametro_detalle'=>'Posicionamiento en instancias globales, multilaterales, regionales y subregionales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1102",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento y diversificación de relaciones bilaterales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1101",
			],	
			[
				'vc_parametro_detalle'=>'Política migratoria y servicio al ciudadano',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1103",
			],	
			[
				'vc_parametro_detalle'=>'Cooperación internacional del sector relaciones exteriores',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1820,
				'vc_codigo_interno'=>"1105",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Justicia y del Derecho',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1299",
			],	
			[
				'vc_parametro_detalle'=>'Justicia transicional',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1204",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la política criminal del Estado colombiano',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1207",
			],	
			[
				'vc_parametro_detalle'=>'Promoción al acceso a la justicia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1202",
			],	
			[
				'vc_parametro_detalle'=>'Modernización de la información inmobiliaria',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1209",
			],	
			[
				'vc_parametro_detalle'=>'Formulación y coordinación de la política integral frente a las drogas y actividades relacionadas',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1208",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento del principio de seguridad jurídica, divulgación y depuración del ordenamiento jurídico',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1201",
			],	
			[
				'vc_parametro_detalle'=>'Promoción de los métodos de resolución de conflictos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1203",
			],	
			[
				'vc_parametro_detalle'=>'Defensa jurídica del Estado',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1205",
			],	
			[
				'vc_parametro_detalle'=>'Sistema penitenciario y carcelario en el marco de los derechos humanos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1821,
				'vc_codigo_interno'=>"1206",
			],	
			[
				'vc_parametro_detalle'=>'Reducción de la vulnerabilidad fiscal ante desastres y riesgos climáticos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1303",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Hacienda',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1399",
			],	
			[
				'vc_parametro_detalle'=>'Inspección, control y vigilancia financiera, solidaria y de recursos públicos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1304",
			],	
			[
				'vc_parametro_detalle'=>'Política macroeconómica y fiscal',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1301",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento del recaudo y tributación',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1305",
			],	
			[
				'vc_parametro_detalle'=>'Gestión de recursos públicos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1822,
				'vc_codigo_interno'=>"1302",
			],	
			[
				'vc_parametro_detalle'=>'Capacidades de la Policía Nacional en seguridad pública, prevención, convivencia y seguridad ciudadana',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1501",
			],	
			[
				'vc_parametro_detalle'=>'Capacidades de las Fuerzas Militares en seguridad pública y defensa en el territorio nacional',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1502",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Defensa y Seguridad',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1599",
			],	
			[
				'vc_parametro_detalle'=>'Gestión del riesgo de desastres desde el sector defensa y seguridad',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1506",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo marítimo, fluvial y costero desde el sector defensa',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1504",
			],	
			[
				'vc_parametro_detalle'=>'Generación de bienestar para la Fuerza Pública y sus familias',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1505",
			],	
			[
				'vc_parametro_detalle'=>'Grupo Social y Empresarial de la Defensa (GSED) Competitivo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1823,
				'vc_codigo_interno'=>"1507",
			],	
			[
				'vc_parametro_detalle'=>'Ordenamiento social y uso productivo del territorio rural',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1704",
			],	
			[
				'vc_parametro_detalle'=>'Servicios financieros y gestión del riesgo para las actividades agropecuarias y rurales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1703",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura productiva y comercialización',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1709",
			],	
			[
				'vc_parametro_detalle'=>'Inclusión productiva de pequeños productores rurales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1702",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Agropecuario',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1799",
			],	
			[
				'vc_parametro_detalle'=>'Sanidad agropecuaria e inocuidad agroalimentaria',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1707",
			],	
			[
				'vc_parametro_detalle'=>'Restitución de tierras a víctimas del conflicto armado',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1705",
			],	
			[
				'vc_parametro_detalle'=>'Ciencia, tecnología e innovación agropecuaria',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1708",
			],	
			[
				'vc_parametro_detalle'=>'Aprovechamiento de mercados externos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1706",
			],	
			[
				'vc_parametro_detalle'=>'Mejoramiento de la habitabilidad rural',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1824,
				'vc_codigo_interno'=>"1701",
			],	
			[
				'vc_parametro_detalle'=>'Salud pública y prestación de servicios  ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1825,
				'vc_codigo_interno'=>"1901",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Salud y Protección Social',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1825,
				'vc_codigo_interno'=>"1999",
			],	
			[
				'vc_parametro_detalle'=>'Inspección, vigilancia y control',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1825,
				'vc_codigo_interno'=>"1903",
			],	
			[
				'vc_parametro_detalle'=>'Sanidad Ambiental',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1825,
				'vc_codigo_interno'=>"1904",
			],	
			[
				'vc_parametro_detalle'=>'Aseguramiento y administración del Sistema General de la Seguridad Social en Salud - SGSSS',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1825,
				'vc_codigo_interno'=>"1902",
			],	
			[
				'vc_parametro_detalle'=>'Consolidación productiva del sector minero',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2104",
			],	
			[
				'vc_parametro_detalle'=>'Consolidación productiva del sector de energía eléctrica',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2102",
			],	
			[
				'vc_parametro_detalle'=>'Acceso al servicio público domiciliario de gas combustible',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2101",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Minas y Energía ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2199",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo ambiental sostenible del sector minero energético',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2105",
			],	
			[
				'vc_parametro_detalle'=>'Gestión de la información en el sector minero energético',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2106",
			],	
			[
				'vc_parametro_detalle'=>'Consolidación productiva del sector hidrocarburos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1826,
				'vc_codigo_interno'=>"2103",
			],	
			[
				'vc_parametro_detalle'=>'Calidad y fomento de la educación superior',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1827,
				'vc_codigo_interno'=>"2202",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Educación',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1827,
				'vc_codigo_interno'=>"2299",
			],	
			[
				'vc_parametro_detalle'=>'Calidad, cobertura y fortalecimiento de la educación inicial, prescolar, básica y media',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1827,
				'vc_codigo_interno'=>"2201",
			],	
			[
				'vc_parametro_detalle'=>'Cierre de brechas para el goce efectivo de derechos fundamentales de la población en condición de discapacidad',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1827,
				'vc_codigo_interno'=>"2203",
			],	
			[
				'vc_parametro_detalle'=>'Fomento del desarrollo de aplicaciones, software y contenidos para impulsar la apropiación de las Tecnologías de la Información y las Comunicaciones (TIC)',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1828,
				'vc_codigo_interno'=>"2302",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Comunicaciones',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1828,
				'vc_codigo_interno'=>"2399",
			],	
			[
				'vc_parametro_detalle'=>'Facilitar el acceso y uso de las Tecnologías de la Información y las Comunicaciones (TIC) en todo el territorio nacional',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1828,
				'vc_codigo_interno'=>"2301",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura de transporte fluvial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2406",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura de transporte férreo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2404",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura de transporte marítimo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2405",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura red vial regional',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2402",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura red vial primaria',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2401",
			],	
			[
				'vc_parametro_detalle'=>'Prestación de servicios de transporte público de pasajeros',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2408",
			],	
			[
				'vc_parametro_detalle'=>'Seguridad de transporte',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2409",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura y servicios de transporte aéreo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2403",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Transporte',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2499",
			],	
			[
				'vc_parametro_detalle'=>'Regulación y supervisión de infraestructura y servicios de transporte',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2410",
			],	
			[
				'vc_parametro_detalle'=>'Infraestructura y servicios de logística de transporte',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1829,
				'vc_codigo_interno'=>"2407",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento del control y la vigilancia de la gestión fiscal y resarcimiento al daño del patrimonio público',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1830,
				'vc_codigo_interno'=>"2501",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Organismos de Control',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1830,
				'vc_codigo_interno'=>"2599",
			],	
			[
				'vc_parametro_detalle'=>'Promoción, protección y defensa de los Derechos Humanos y el Derecho Internacional Humanitario',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1830,
				'vc_codigo_interno'=>"2502",
			],	
			[
				'vc_parametro_detalle'=>'Lucha contra la corrupción',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1830,
				'vc_codigo_interno'=>"2503",
			],	
			[
				'vc_parametro_detalle'=>'Vigilancia de la gestión administrativa de los funcionarios del Estado',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1830,
				'vc_codigo_interno'=>"2504",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Rama Judicial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1831,
				'vc_codigo_interno'=>"2799",
			],	
			[
				'vc_parametro_detalle'=>'Mejoramiento a las competencias de la administración de justica',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1831,
				'vc_codigo_interno'=>"2701",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Registraduría',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1832,
				'vc_codigo_interno'=>"2899",
			],	
			[
				'vc_parametro_detalle'=>'Identificación y registro del estado civil de la población',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1832,
				'vc_codigo_interno'=>"2802",
			],	
			[
				'vc_parametro_detalle'=>'Procesos democráticos y asuntos electorales',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1832,
				'vc_codigo_interno'=>"2801",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Fiscalía ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1833,
				'vc_codigo_interno'=>"2999",
			],	
			[
				'vc_parametro_detalle'=>'Efectividad de la investigación penal y técnico científica',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1833,
				'vc_codigo_interno'=>"2901",
			],	
			[
				'vc_parametro_detalle'=>'Gestión integral de mares, costas y recursos acuáticos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3207",
			],	
			[
				'vc_parametro_detalle'=>'Conservación de la biodiversidad y sus servicios ecosistémicos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3202",
			],	
			[
				'vc_parametro_detalle'=>'Gestión de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3204",
			],	
			[
				'vc_parametro_detalle'=>'Gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3206",
			],	
			[
				'vc_parametro_detalle'=>'Ordenamiento ambiental territorial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3205",
			],	
			[
				'vc_parametro_detalle'=>'Gestión integral del recurso hídrico',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3203",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Ambiente y Desarrollo Sostenible',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3299",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento del desempeño ambiental de los sectores productivos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3201",
			],	
			[
				'vc_parametro_detalle'=>'Educación Ambiental ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1834,
				'vc_codigo_interno'=>"3208",
			],	
			[
				'vc_parametro_detalle'=>'Gestión, protección y salvaguardia del patrimonio cultural colombiano',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1835,
				'vc_codigo_interno'=>"3302",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Cultura',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1835,
				'vc_codigo_interno'=>"3399",
			],	
			[
				'vc_parametro_detalle'=>'Promoción y acceso efectivo a procesos culturales y artísticos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1835,
				'vc_codigo_interno'=>"3301",
			],	
			[
				'vc_parametro_detalle'=>'Productividad y competitividad de las empresas colombianas',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1836,
				'vc_codigo_interno'=>"3502",
			],	
			[
				'vc_parametro_detalle'=>'Ambiente regulatorio y económico para la competencia y la actividad empresarial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1836,
				'vc_codigo_interno'=>"3503",
			],	
			[
				'vc_parametro_detalle'=>'Internacionalización de la economía',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1836,
				'vc_codigo_interno'=>"3501",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Comercio, Industria y Turismo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1836,
				'vc_codigo_interno'=>"3599",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Trabajo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3699",
			],	
			[
				'vc_parametro_detalle'=>'Formación para el trabajo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3603",
			],	
			[
				'vc_parametro_detalle'=>'Generación y formalización del empleo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3602",
			],	
			[
				'vc_parametro_detalle'=>'Fomento de la investigación, desarrollo tecnológico e innovación del sector trabajo',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3605",
			],	
			[
				'vc_parametro_detalle'=>'Protección Social',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3601",
			],	
			[
				'vc_parametro_detalle'=>'Derechos fundamentales del trabajo y fortalecimiento del diálogo social',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1837,
				'vc_codigo_interno'=>"3604",
			],	
			[
				'vc_parametro_detalle'=>'Gestión del riesgo de desastres naturales y antrópicos en la zona de influencia del Volcán Nevado del Huila',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3707",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento institucional a los procesos organizativos de concertación; garantía, prevención y respeto de los derechos humanos como fundamentos para la paz',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3701",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento a la gobernabilidad territorial para la seguridad, convivencia ciudadana, paz y post-conflicto',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3702",
			],	
			[
				'vc_parametro_detalle'=>'Política pública de víctimas del conflicto armado y postconflicto',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3703",
			],	
			[
				'vc_parametro_detalle'=>'Participación Ciudadana, Política y diversidad de creencias',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3704",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Interior',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3799",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento institucional y operativo de los Bomberos de Colombia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3708",
			],	
			[
				'vc_parametro_detalle'=>'Protección de personas, grupos y comunidades en riesgo extraordinario y extremo UNP',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3705",
			],	
			[
				'vc_parametro_detalle'=>'Protección, promoción y difusión del derecho de autor y los derechos conexos',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1838,
				'vc_codigo_interno'=>"3706",
			],	
			[
				'vc_parametro_detalle'=>'Generación de una cultura que valora y gestiona el conocimiento y la innovación',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1839,
				'vc_codigo_interno'=>"3904",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Ciencia y Tecnología',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1839,
				'vc_codigo_interno'=>"3999",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo tecnológico e innovación para crecimiento empresarial',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1839,
				'vc_codigo_interno'=>"3903",
			],	
			[
				'vc_parametro_detalle'=>'Investigación con calidad e impacto',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1839,
				'vc_codigo_interno'=>"3902",
			],	
			[
				'vc_parametro_detalle'=>'Consolidación de una institucionalidad habilitante para la Ciencia Tecnología e Innovación (CTI) ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1839,
				'vc_codigo_interno'=>"3901",
			],	
			[
				'vc_parametro_detalle'=>'Acceso de la población a los servicios de agua potable y saneamiento básico',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1840,
				'vc_codigo_interno'=>"4003",
			],	
			[
				'vc_parametro_detalle'=>'Ordenamiento territorial y desarrollo urbano',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1840,
				'vc_codigo_interno'=>"4002",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Vivienda, Ciudad y Territorio',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1840,
				'vc_codigo_interno'=>"4099",
			],	
			[
				'vc_parametro_detalle'=>'Acceso a soluciones de vivienda',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1840,
				'vc_codigo_interno'=>"4001",
			],	
			[
				'vc_parametro_detalle'=>'Inclusión social y productiva para la población en situación de vulnerabilidad',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1841,
				'vc_codigo_interno'=>"4103",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo integral de niñas, niños, adolescentes y sus familias',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1841,
				'vc_codigo_interno'=>"4102",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Inclusión Social y Reconciliación ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1841,
				'vc_codigo_interno'=>"4199",
			],	
			[
				'vc_parametro_detalle'=>'Atención, asistencia  y reparación integral a las víctimas',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1841,
				'vc_codigo_interno'=>"4101",
			],	
			[
				'vc_parametro_detalle'=>'Desarrollo de Inteligencia Estratégica y Contrainteligencia de Estado',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1842,
				'vc_codigo_interno'=>"4201",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Inteligencia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1842,
				'vc_codigo_interno'=>"4299",
			],	
			[
				'vc_parametro_detalle'=>'Formación y preparación de deportistas',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1843,
				'vc_codigo_interno'=>"4302",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Deporte y Recreación ',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1843,
				'vc_codigo_interno'=>"4399",
			],	
			[
				'vc_parametro_detalle'=>'Fomento a la recreación, la actividad física y el deporte para desarrollar entornos de convivencia y paz',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1843,
				'vc_codigo_interno'=>"4301",
			],	
			[
				'vc_parametro_detalle'=>'Fortalecimiento de la gestión y dirección del Sector Sistema Integral de Verdad , Justicia, Reparación y No Repetición',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1844,
				'vc_codigo_interno'=>"4499",
			],	
			[
				'vc_parametro_detalle'=>'Jurisdicción especial para la paz',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1844,
				'vc_codigo_interno'=>"4401",
			],	
			[
				'vc_parametro_detalle'=>'Esclarecimiento de la verdad, la convivencia y la no repetición',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1844,
				'vc_codigo_interno'=>"4402",
			],	
			[
				'vc_parametro_detalle'=>'Búsqueda humanitaria de personas dadas por desaparecidas en el contexto y en razón del conflicto armado en Colombia',
				'i_fk_id_parametro'=>45,
				'i_estado'=>1,
				'i_fk_id_padre'=>1844,
				'vc_codigo_interno'=>"4403",
			],*/
			[
				'i_pk_id'=>6555,
				'vc_parametro_detalle'=>'Fortalecimiento de la convivencia y la seguridad ciudadana',
				'i_fk_id_parametro'=>45,	
				'i_estado'=>1,
				'i_fk_id_padre'=>6554,
				'vc_codigo_interno'=>'4501'
			],
			[
				'i_pk_id'=>6556,
				'vc_parametro_detalle'=>'Fortalecimiento del buen gobierno para el respeto y garantía de los derechos humanos.',
				'i_fk_id_parametro'=>45,	
				'i_estado'=>1,
				'i_fk_id_padre'=>6554,
				'vc_codigo_interno'=>'4502'
			],
			[
				'i_pk_id'=>6557,
				'vc_parametro_detalle'=>'Gestión del riesgo de desastres y emergencias',
				'i_fk_id_parametro'=>45,	
				'i_estado'=>1,
				'i_fk_id_padre'=>6554,
				'vc_codigo_interno'=>'4503'
			],
			[
				'i_pk_id'=>6558,
				'vc_parametro_detalle'=>'Fortalecimiento a la gestión y dirección de la administración pública territorial',
				'i_fk_id_parametro'=>45,	
				'i_estado'=>1,
				'i_fk_id_padre'=>6554,
				'vc_codigo_interno'=>'4599'
			],
        ]);           
        
    }
}