<?php

use Illuminate\Database\Seeder;

class DetalleProductoSeeder extends Seeder
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
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199069',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0101001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0101002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de difusión de información legislativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0101004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0101005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199055',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199056',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199057',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199058',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199059',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199065',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199063',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199013',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0199068',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para proyectos de restauración de ecosistemas degradados en áreas protegidas y Áreas de Especial Importancia Ambiental (AEIA) ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210018',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo técnico y financiero para la implementación de proyectos productivos sostenibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo técnico y financiero para la conservación de la biodiversidad y sus servicios ecosistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210022',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210005',
			],
			[
				'vc_parametro_detalle'=>'Vía terciara mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210006',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299062',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la planeación y seguimiento de intervenciones de desminado humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206001',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0209005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de urbanización del suelo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0209008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de habilitación del suelo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0209009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la Acción Integral Contra Minas Antipersonales - AICMA',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la implementación de mecanismos de financiación de Gestión del Riesgo de Desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en derechos humanos,  análisis y gestión del riesgo de victimización y reincidencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a iniciativas locales de prevención de riesgos de victimización y reincidencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a iniciativas locales de prevención de riesgos de victimización y reincidencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación sobre reintegración/reincorporación, convivencia y reconciliación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la transversalización de los enfoques de género e interseccionalidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la promoción de acciones en garantía de los derechos de las mujeres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205010',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para el fortalecimiento de escenarios y mecanismos de diálogo formal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205011',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en Acción Integral Contra Minas Antipersonales - AICMA',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en formulación de instrumentos de planificación para la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207015',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la consolidación de la Acción Integral contra Minas Antipersonal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206008',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en Ley de Transparencia y del Derecho de Acceso a la Información Pública Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el ejercicio del control social, rendición de cuentas y participación ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a proyectos de cooperación internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la educación formal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a proyectos de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de recursos de cooperación Internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la consolidación de la interinstitucionalidad para la lucha contra la corrupción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en cultura de la integridad y transparencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203008',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la generación de planes, programas y proyectos para la reincorporación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211019',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la gestión institucional de la reincorporación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a iniciativas locales para la reincorporación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de acompañamiento a la población beneficiaria de la reincorporación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal para la reincorporación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la promoción de acciones en garantía de los derechos de los niños, niñas y adolescentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de las políticas de primera infancia e infancia y adolescencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica territorial para gestión e implementación de la política pública de discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204020',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión para la protección y seguridad personal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la gestión de cumplimiento de las prioridades de gobierno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0214001',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la modernización del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0214002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0214003',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo técnico y financiero para la generación de capacidades en evaluación y formulación de proyectos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de estrategias que promuevan el desarrollo de los jóvenes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión en temas de juventud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a las salas de crisis territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica integral dirigida a familias  del Plan Nacional Integral de sustitución (PNIS)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210025',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento técnico para la formulación y estructuración de proyectos estratégicos para la renovación del territorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financieropara la implementación de proyectos de pequeña infraestructura comunitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212003',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para asistencia alimentaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212004',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para proyectos de generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para la renovación del territorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos de desarrollo rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a proyectos de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo al fortalecimiento de capacidades territoriales en los municipios PDET',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación del Plan de Atención Inmediata',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para las unidades productivas para el autoconsumo de los hogares en situación de vulnerabilidad social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a activos productivos y de comercialización para proyectos de ciclo corto e ingreso rápido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a activos productivos y de comercialización para proyectos productivos con visión de largo plazo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la transición de los hogares vinculados a cultivos ilícitos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a iniciativas de generación de ingresos a recolectores en el marco del Programa Nacional Integral de Sustitución de Cultivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en derechos humanos y derecho internacional humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de acciones frente a los derechos de verdad, la justicia y la reparación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201015',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la implementación de proyectos productivos agropecuarios sostenibles y negocios verdes no agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210020',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de medidas en derechos humanos y derecho internacional humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la promoción y difusión de información en temas de Paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la elaboración de estudios, diagnósticos, asesorías y consultorías en temas de Paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para acciones y actividades relacionadas con el logro y mantenimiento de la paz.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la articulación y coordinación del Sistema Nacional de Derechos Humanos y Derecho Internacional Humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de acciones para la prevención del reclutamiento, violencia sexual, uso y utilización de niños, niñas y adolescentes en el conflicto armado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la promoción de una cultura en derechos humanos y construcción de paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la gestión de información y conocimiento sobre la situación de derechos humanos y Derecho Internacional Humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal respecto a los sistemas internacionales de protección de los Derechos Humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información en Derechos Humanos y Derecho Internacional Humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201010',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207010',
			],
			[
				'vc_parametro_detalle'=>'Parques interactivos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en cooperación internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el sistema de información para la cooperación internacional de Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de buenas prácticas internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de cooperación internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en temas de derechos humanos y construcción de paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en prevención del reclutamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información estadística en temas de Derechos Humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0201013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la atención integral de primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la construcción, adecuación y ampliación de infraestructuras para la atención integral a la primera infancia.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica nacional y territorial para gestión e implementación de la política de Primera Infancia.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en desarrollo integral de la primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de información de la Política de Primera Infancia De Cero a Siempre.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para la cooperación institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación intersectorial para la atención integral de la primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0202009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la formulación e implementación de las Políticas de juventud.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la conformación y operación de los sistemas locales de juventud.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la realización de las rendiciones de cuentas con enfoque poblacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la transferencia metodológica de estrategias que promueven el desarrollo integral de los jóvenes.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de Juventud y Adolescencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del Sistema Nacional de Juventud.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación sectorial para el fortalecimiento del Sistema Nacional de Juventud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para la incidencia en el posicionamiento de los temas de juventud en la agenda pública.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del Sistema Nacional de Juventud.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información estadística en temas de Juventud y adolescencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204012',
			],
			[
				'vc_parametro_detalle'=>'Material pedagógico del Sistema Nacional de Juventud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación a casos de violencias contra las mujeres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información estadística en temas de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0205008',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo para la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la cultura de paz y resolución no violenta de conflictos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la cooperación internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de la infraestructura física de las entidades del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0209001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0209002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en reintegración comunitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnicaterritorial para gestión e implementación de la política pública de discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0213001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en oferta institucional para personas con discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0213002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la reintegración comunitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a programas y proyectos para el logro y mantenimiento de la paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0210011',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de alianzas para la garantía de los derechos de los jóvenes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0204014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299054',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299061',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en ERM (Educación en el Riesgo de Minas)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206004',
			],
			[
				'vc_parametro_detalle'=>'Serviciosde información para seguimiento y monitoreo de la Acción Integral Contra Minas Antipersonal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0206005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la elaboración de diagnósticos participativos sobre factores comunitarios en promoción de convivencia, la reintegración y la reconciliación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211001',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la elaboración del diagnóstico participativo sobre factores de riesgo y oportunidades para la prevención del reclutamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la formulación de Proyectos Comunitarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211004',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para el fortalecimiento Iniciativas Locales Juveniles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0211005',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Lineamientos Técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0203004',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299014',
			],
			[
				'vc_parametro_detalle'=>'Obras de infraestructura para mitigación y atención a desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207012',
			],
			[
				'vc_parametro_detalle'=>'Servicios de implementación del plan de gestión del riesgo de desastres y estrategia para la respuesta a emergencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0207013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de recursos de cooperación internacional pública, privada, técnica y financiera no reembolsable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la gestión de iniciativas incluidas en los PDET',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0212011',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0208017',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0299066',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399062',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en tecnologías de la información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303013',
			],
			[
				'vc_parametro_detalle'=>'Servicios de integración de la oferta pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301025',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia a la calidad del agua para consumo humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia a la correcta prestación de los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la formalización de prestadores de servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303016',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en tecnologías de la información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de generación e implementación de agendas de trabajo participativo con la comunidad en el tema de servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a la inversión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301028',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos para la focalización del gasto público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301029',
			],
			[
				'vc_parametro_detalle'=>'Documentos para la identificación de prestadores rurales en servicios públicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301001',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a la política pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación a la política pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301011',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de análisis de coyuntura y prospectiva sectorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la actualización de la metodología del Sistema de Identificación de Potenciales Beneficiarios de Programas Sociales -SISBEN',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a proyectos de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301021',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399044',
			],
			[
				'vc_parametro_detalle'=>'Documentos de análisis de coyuntura y prospectiva sectorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la compra pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la integración regional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301022',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399065',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399064',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399055',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399056',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la gestión administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399054',
			],
			[
				'vc_parametro_detalle'=>'Centros Integrados de Servicio - CIS',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301018',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento al mercado de energía mayorista',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección a los prestadores de servicios públicos domiliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información relacionado con la prestación de los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303007',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación en temas relacionados con los servicios de apoyo a la compra pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303008',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación en temas relacionados con los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas relacionados con la prestación de los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303011',
			],
			[
				'vc_parametro_detalle'=>'Instrumentos de agregación de demanda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal dirigido al comprador público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría en el ejercicio de control social de los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303001',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0303012',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0301026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de las herramientas del Sistema de Compra Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0304008',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0399066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de levantamientos de suelos competitivos del país',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0403001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información Cartográfica actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Información Geodésica actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402016',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499061',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Información Geográfica Actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamiento Técnico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402018',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Catastral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la gestión de los recursos geográficos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0405006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión del conocimiento e Innovación Geográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0405005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de avalúos ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404007',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información agrológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0403005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401102',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401103',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0405007',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402020',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de cultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401031',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de demografía y población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401032',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de Resultados temática Educación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401033',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de gobierno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401034',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de industria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401035',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de mercado laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401036',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de pobreza y condiciones de vida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401037',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de precios y costos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401038',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401039',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de seguridad y defensa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401040',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401041',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de tecnología e innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401042',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401043',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401044',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401047',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401048',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de geo información Estadística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de levantamientos topográficos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información geográfica, geodésica y cartográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402003',
			],
			[
				'vc_parametro_detalle'=>'Red geodésica Nacional Activa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402004',
			],
			[
				'vc_parametro_detalle'=>'Red geodésica Nacional Pasiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402005',
			],
			[
				'vc_parametro_detalle'=>'Red geodésica Nacional de Nivelación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos con información geodésica para Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402007',
			],
			[
				'vc_parametro_detalle'=>'Base de Datos del Diccionario geográfico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos sobre geografía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos de deslindes y de Territorios Indígenas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico a las solicitudes recibidas por la cancillería en temas fronterizos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis químicos, físicos, mineralógicos y biológicos de suelos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0403002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos sobre cobertura, usos de la tierra y conflictos del territorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0403004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de actualización catastral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conservación catastral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404002',
			],
			[
				'vc_parametro_detalle'=>'Servicio valorización predial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0404003',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de comercio internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401028',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática de comercio interno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401029',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Industria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401019',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Mercado Laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401020',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Pobreza y Condiciones de Vida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401021',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Precios y Costos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401022',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos Temática de la Seguridad y Defensa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401023',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Tecnología e Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401024',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401025',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados para la temática agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401026',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la temática de Demografía y Población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401001',
			],
			[
				'vc_parametro_detalle'=>'Bases de Datos del Directorio Estadístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401002',
			],
			[
				'vc_parametro_detalle'=>'Bases de Datos del Marco Geoestadístico Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401003',
			],
			[
				'vc_parametro_detalle'=>'Bases de Datos de la temática de Mercado Laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401004',
			],
			[
				'vc_parametro_detalle'=>'Bases de Datos de la temática de Pobreza y Condiciones de Vida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401005',
			],
			[
				'vc_parametro_detalle'=>'Bases de Datos de la temática de Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401006',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401007',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401008',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Comercio Internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401009',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos Temática Construcción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401010',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos Temática Transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401011',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Comercio Interno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401012',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Cuentas Nacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401013',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Cultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401014',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos para la temática de servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401015',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Demografía y Población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401016',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Temática Educación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401017',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos del censo de población y vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios postcensales temáticas demográficas y poblacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401053',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados del censo de población y vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401054',
			],
			[
				'vc_parametro_detalle'=>'Base de datos del censo de población y vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401055',
			],
			[
				'vc_parametro_detalle'=>'Base de datos de la operación censal agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401056',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos de la operación censal agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401057',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios postcensales temática agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401058',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de resultados de la operación censal agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401059',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática Agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401061',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática Ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401062',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Comercio Internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401063',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Comercio Interno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401064',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Construcción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401065',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Cultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401066',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Educación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401068',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Gobierno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401069',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Industria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401070',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Precios y Costos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401071',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401072',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Tecnología e Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401073',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de la Temática de Transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401074',
			],
			[
				'vc_parametro_detalle'=>'Cuadros de Resultados para la temática construcción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de estratificación socioeconómica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0402013',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos del indicador de Seguimiento a la Economía -ISE',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401099',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación del Sistema Estadístico Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401096',
			],
			[
				'vc_parametro_detalle'=>'Servicio de procesamiento especializado de microdatos anonimizados de uso en sitio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401097',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión de la información estadística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401098',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de las Cuentas Anuales de Bienes y Servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401075',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de las Cuentas Departamentales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401076',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite de Turismo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401077',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite de Cultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401078',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite de Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401079',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite Piloto de Agroindustria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401080',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite Economía del Cuidado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401081',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite de Medio Ambiente.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401082',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de las Cuentas Anuales de Sectores Institucionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401083',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicosdel PIB Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401084',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicosdel PIBBogotá D.C.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401085',
			],
			[
				'vc_parametro_detalle'=>'Boletines Técnicos de la Cuenta Satélite de Cultura Bogotá',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401087',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Regulación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401088',
			],
			[
				'vc_parametro_detalle'=>'Documentos de diagnóstico del aprovechamiento de registros administrativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401089',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de las estadísticas de las entidades del Sistema Estadístico Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401090',
			],
			[
				'vc_parametro_detalle'=>'Bases de microdatos anonimizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401091',
			],
			[
				'vc_parametro_detalle'=>'Servicio de revisión de solicitudes de intercambio de microdato confidencial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401092',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal sobre los instrumentos de coordinación del Sistema Estadístico Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401093',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de la capacidad estadística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401094',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del proceso estadístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401095',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación de información estadística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401100',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información estadística sobre registro y satisfacción ciudadana y atención de trámites y servicios del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0401101',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499060',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0499065',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599065',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599070',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para el diseño institucional de las entidades',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal  a servidores públicos del estado y a la sociedad en general',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de la política de Integridad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de la política de gestión del conocimiento y la innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en temas de Gestión Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia para el cumplimiento de las normas de carrera administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información observatorio de políticas públicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503003',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503004',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503005',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503006',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503008',
			],
			[
				'vc_parametro_detalle'=>'Sedes con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal en el saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en el saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la formación de lo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del desempeño laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de provisión de empleo de carrera administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro público de carrera administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de selección de candidatos para la provisión de cargos de carrera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0504005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en el saber administrativo público para la alta gerencia del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503021',
			],
			[
				'vc_parametro_detalle'=>'Sistema de Control Interno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de selección de candidatos para conformar las listas de las cuales se elaborarán las ternas para la designación de Directores regionales o territoriales.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de selección de candidatos para la provisión de cargos de libre nombramiento y remoción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Monitoreo y Evaluación a la política de empleo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a la Gestión Territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de empleo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505027',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599044',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505003',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica en Gestión Estratégica del talento humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el diseño e implementación de incentivos a la gestión Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica en la gestión y administración estratégica de Personal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica en la implementación de la política de empleo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia técnica en la implementación de laspolíticas de Función Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica en la implementación de Modelos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la implementación del Modelo Integrado de Planeación y Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Plan de mejoramiento de la gestión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en racionalización de escala salarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en rendición de cuentas, participación, transparencia y servicio al ciudadano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de la política de trámites',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de las políticas de Gestión y Desempeño',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de los Planes de Acción Técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación del Plan de atención integral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de diseño, desarrollo e implementación de la Estrategia Territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de diseño, desarrollo e implementación de la Herramienta de Valoración del desempeño Institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a servidores públicos del estado y a la sociedad en general',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal de Multiplicadores en procesos de control social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal de Servidores Públicos en Pedagogía de Paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en sistemas de empleo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de gestión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información estadística en gestión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la construcción de paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en el saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599055',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599056',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599058',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en temas del saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento de la gestión de las entidades públicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0505039',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599068',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599066',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación en el saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación en políticas públicas del saber administrativo público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0503020',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599009',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'0599069',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de iniciativas de inversión de impacto social y económico en zonas de frontera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1104005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo  para la construcción de tejido social en casas lúdicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1102008',
			],
			[
				'vc_parametro_detalle'=>'Servicios de promoción de derechos de Niños, Niñas y Adolescentes - NNA',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1102009',
			],
			[
				'vc_parametro_detalle'=>'Servicio culturales para la promoción de Colombia en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1101004',
			],
			[
				'vc_parametro_detalle'=>'Servicio deportivos para la promoción de Colombia en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1101006',
			],
			[
				'vc_parametro_detalle'=>'Instrumentos internacionales con instancias multilaterales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1102001',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1102002',
			],
			[
				'vc_parametro_detalle'=>'Visitas y reuniones en el marco de organismos multilaterales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1102005',
			],
			[
				'vc_parametro_detalle'=>'Punto de control migratorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103001',
			],
			[
				'vc_parametro_detalle'=>'Centro facilitador de Servicios migratorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de verificación migratoria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia a colombianos en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la política migratoria y la oferta institucional del Estado para colombianos en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión de la política migratoria y la oferta institucional del Estado para colombianos en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en mesas de trabajo-dialogo de connacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al retornado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103012',
			],
			[
				'vc_parametro_detalle'=>'Consulados consolidados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de intervención social y económica en zonas de frontera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1104002',
			],
			[
				'vc_parametro_detalle'=>'Instrumentos internacionales con Estados para el desarrollo de la soberanía e integración fronteriza',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1104003',
			],
			[
				'vc_parametro_detalle'=>'Instrumentos internacionales de cooperación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1105001',
			],
			[
				'vc_parametro_detalle'=>'Proyectos de cooperación internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1105002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de difusión sobre retorno y la oferta institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1103015',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199060',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199009',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199011',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para la articulación interinstitucional en pasos de frontera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1104007',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1199065',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de justicia transicional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204009',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de política criminal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en materia de promoción al acceso a la justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento de la política criminal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la coordinación de la política criminal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la promoción al acceso a la justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción del acceso a la justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202019',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para promover el acceso a la Justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de  educación informal para el  acceso a la justicia ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202021',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202022',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209009',
			],
			[
				'vc_parametro_detalle'=>'Documento de investigación ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la modernización de la información inmobiliaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209011',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209012',
			],
			[
				'vc_parametro_detalle'=>'Servicio publico registral modificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208002',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208003',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el diseño e implementación de la Política Nacional de Drogas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevención del consumo de drogas y reducción de riesgos y daños',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fiscalización de sustancias químicas controladas por el Consejo Nacional de Estupefacientes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para el control de sustancias y productos químicos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la toma de decisiones en materia de drogas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1208010',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1201001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1201002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para fortalecer el acceso al marco normativo y jurisprudencial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1201003',
			],
			[
				'vc_parametro_detalle'=>'Casas de Justicia en operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de justicia a los ciudadanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202002',
			],
			[
				'vc_parametro_detalle'=>'Centros de Convivencia Ciudadana en operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la articulación de los operadores de los Servicio de justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la descentralización de los Servicio de justicia en los territorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para orientar al ciudadano en el acceso a la justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202008',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202010',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de acceso a la justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para promover los métodos de resolución de conflictos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de los métodos de resolución de conflictos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203002',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203005',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de captura de información para la conciliación, arbitraje y amigable composición',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en resolución de conflictos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, control y vigilancia en resolución de conflictos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1203010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la construcción y actualización de mecanismos de justicia transicional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204001',
			],
			[
				'vc_parametro_detalle'=>'Servicio para la articulación de los mecanismos de justicia transicional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204003',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204005',
			],
			[
				'vc_parametro_detalle'=>'Servicio para fortalecer los procesos de restitución de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204006',
			],
			[
				'vc_parametro_detalle'=>'Servicio para fortalecer los procesos de saneamiento y formalización a los entes territoriales y a la ciudadanía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204007',
			],
			[
				'vc_parametro_detalle'=>'Servicio para la Identificación registral de los predios presuntamente baldíos de la Nación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1204008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a las entidades en materia de defensa jurídica, gerencia jurídica publica, solución amistosa de conflictos y /o prevención del daño antijurídico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para implementar mejores prácticas en materia de prevención del daño antijurídico y defensa jurídica del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en los componentes del ciclo de defensa jurídica del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205005',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en materia de defensa jurídica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1205008',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura penitenciaria y carcelaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206001',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura penitenciaria y carcelaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206002',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura penitenciaria y carcelaria con mejoramiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia carcelaria y penitenciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de resocialización de personas privadas de la libertad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información penitenciaria y carcelaria para la toma de decisiones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de bienestar a la población privada de libertad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207003',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207005',
			],
			[
				'vc_parametro_detalle'=>'Servicio para incorporar el enfoque de género en la Política Criminal y Penitenciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207006',
			],
			[
				'vc_parametro_detalle'=>'Servicio para incorporar los enfoques diferenciales en la política criminal y penitenciaria (Etáreo, étnico, condiciones especiales.)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207007',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la política criminal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1207009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso a información registral inmobiliaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Interoperabilidad e integración de la información del Registro y el Catastro Multipropósito',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información registral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209003',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura registral mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209004',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura registral mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209005',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura registral construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1209006',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299044',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura penitenciaria y carcelaria dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1206008',
			],
			[
				'vc_parametro_detalle'=>'Casa de justicia dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202013',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299060',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1202017',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1299065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de restauración de ecosistemas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303007',
			],
			[
				'vc_parametro_detalle'=>'Jarillón de Cali con medidas de reducción del riesgo implementadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303003',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399061',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304028',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301011',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305018',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304022',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación para el trabajo para la supervisión basada en riesgos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación sobre el sistema de supervisión basado en riesgos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de la información del sector solidario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304026',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en materia de contabilidad pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control fisico en el ingreso de mercancia de contrabando por pasos fronterizos ilegales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recolección de información y análisis a los sistemas criminales dedicados al contrabando, la evasión fiscal y las infracciones cambiarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la compra de vivienda nueva de no de interés social ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302013',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para la gestión financiera pública actualizados  ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para la gestión financiera pública implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de procesamiento de evidencia digital ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control tributario, aduanero y cambiario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305025',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de aduanas fortalecido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305021',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305022',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control al uso de los recursos del Sistema General de Participaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento a las entidades territoriales para la rendición de cuentas a la ciudadanía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la implementación de programas de saneamiento fiscal o restructuracion de pasivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301015',
			],
			[
				'vc_parametro_detalle'=>'Documentos diagnóstico fiscales y financieros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301016',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399066',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303010',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303011',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303012',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Social urbanas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación para el manejo y ordenación de cuencas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para el buen gobierno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304033',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303001',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Prioritario rural construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303005',
			],
			[
				'vc_parametro_detalle'=>'Acueductos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303008',
			],
			[
				'vc_parametro_detalle'=>'La Mojana con medidas de reducción del riesgo implementadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la banca multilateral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información al Sistema Nacional Anti Lavado de Activos y Contra la Financiación del Terrorismo actualizado ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información al Sistema Nacional Anti Lavado de Activos y Contra la Financiación del Terrorismo implementación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en técnicas de investigación e inteligencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a la implementación del Plan Todos Somos Pacifico ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a proyectos de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302015',
			],
			[
				'vc_parametro_detalle'=>'Documento Normativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación deen materia fiscal y financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en materia fiscal y financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información y gestión misionales fortalecidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301007',
			],
			[
				'vc_parametro_detalle'=>'Documento normativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoria en transacciones accionaria de la Nación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de capacitación a entidades para el desarrollo de proyectos de infraestructura con vinculación de capital privado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de nómina.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de reconocimiento pensional.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de valoración del portafolio de empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de supervisión basado en riesgos y Normas Internacionales de Información Financieraimplementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304004',
			],
			[
				'vc_parametro_detalle'=>'Documento de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305001',
			],
			[
				'vc_parametro_detalle'=>'Informe de campañas realizadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305002',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de Aduanasconstruido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305003',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de Aduanas adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305004',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de Aduanas ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305005',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de Aduanas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305006',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de Aduanas modificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305007',
			],
			[
				'vc_parametro_detalle'=>'Serviciode incautación de elementos de Juegos de Suerte y Azar que se encuentran operando de manera ilegal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305008',
			],
			[
				'vc_parametro_detalle'=>'Serviciode Información sobre facturación electrónica de miPyme',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de factura electrónica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305010',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría en gestión y monitoreo de participaciones accionarias y entes gestores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la prestación de transporte público masivo de pasajeros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305015',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305016',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399060',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de supervisión, atención y vigilancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operativos de control contra la operación ilegal de juegos de suerte y azar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamiento técnico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de consultas, peticiones y solicitudes de información por parte de entidades financieras supervisadas, consumidores financieros y partes interesadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de quejas o reclamos contra entidades financieras vigiladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación del sector financiero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de definiciónde obligaciones de proteccion social para declarar o corregir',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de detección de Redes Criminales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acciones de fiscalización a aportantes al sistema de la proteccion Social..',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educacióninformal en aportes al Sistema de la Protección Social.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de estadística del sector financiero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de funciones Jurisdiccionales para entidades vigiladas y consumidores financieros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificaciónde corrupción tributaria en las entidades vigiladas por la Unidad Administrativa Especial Agencia del Inspector General de Tributos, Rentas y Contribuciones Parafiscales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a entidades financieras supervisadas y partes interesadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al sector Hacienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1302018',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1301010',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304029',
			],
			[
				'vc_parametro_detalle'=>'Canal del Dique con medidas de reducción del riesgo implementadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1303002',
			],	
			[
				'vc_parametro_detalle'=>'Servicio de aseguramiento para mitigar los riesgos identificados mediante las inspecciones en las entidades vigiladas por la Unidad Administrativa Especial Agencia del Inspector General de Tributos, Rentas y Contribuciones Parafiscales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304007',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1399065',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1305017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de visitas a organizaciones del sector solidario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1304021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operaciones de erradicación de cultivos de uso ilícito',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501016',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operacional construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502088',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502090',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operacional con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502089',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502091',
			],
			[
				'vc_parametro_detalle'=>'Servicio de suministro de energía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599063',
			],
			[
				'vc_parametro_detalle'=>'Museo de las Fuerzas Militares adecuado y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502142',
			],
			[
				'vc_parametro_detalle'=>'Comandos de policía construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501019',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de policía construidas y dotadas ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501020',
			],
			[
				'vc_parametro_detalle'=>'Comandos de policía adecuados y dotados ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501027',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte construida y dotada ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501022',
			],
			[
				'vc_parametro_detalle'=>'Unidades especializadas descentralizadas de la Policía Nacional adecuadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501030',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte adecuada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501031',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de policía adecuadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501028',
			],
			[
				'vc_parametro_detalle'=>'Unidades descentralizadas de carabineros adecuadas y dotadas ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501029',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos y operativos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506022',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599009',
			],
			[
				'vc_parametro_detalle'=>'Centro de datos construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de desminado humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de suministro de agua',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de señales de emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información metereológicoy cartográfico para la navegación aérea',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502122',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Ciberdefensa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502114',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a emergencias y desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información de Inteligencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502113',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Ciberseguridad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502115',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información de contrainteligencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502116',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502118',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de equipos de inserción e infiltración de fuerzas especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502119',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el mando y control de operaciones especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502120',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de sistemas de navegación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502109',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de elementos de buceo táctico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502110',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo tecnológicoe innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502111',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros de combate adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502103',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros de combate con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502104',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros de campaña adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502105',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros de campaña con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502106',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros fijos con adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502107',
			],
			[
				'vc_parametro_detalle'=>'Equipos militares de ingenieros fijoscon mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502108',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de munición militar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502092',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de equipos de comunicación militar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502093',
			],
			[
				'vc_parametro_detalle'=>'Equipos de comunicación militar con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502094',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de equipo de asalto aerotransportado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502095',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de elementos de protección militar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502096',
			],
			[
				'vc_parametro_detalle'=>'Vehículos anfibios adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502097',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de grupos comandos especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502098',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación para el patrullaje marítimo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502099',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación para el patrullaje fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502100',
			],
			[
				'vc_parametro_detalle'=>'Unidades Mayores Navales adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502101',
			],
			[
				'vc_parametro_detalle'=>'Unidades Mayores Navales con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502102',
			],
			[
				'vc_parametro_detalle'=>'Equipo aéreo adquirido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502080',
			],
			[
				'vc_parametro_detalle'=>'Equipo aéreo con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502081',
			],
			[
				'vc_parametro_detalle'=>'Vehículos tácticos adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502082',
			],
			[
				'vc_parametro_detalle'=>'Vehículos tácticos con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502083',
			],
			[
				'vc_parametro_detalle'=>'Vehículos blindados con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de armamento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502086',
			],
			[
				'vc_parametro_detalle'=>'Armas con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502087',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo del espectro marítimo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control del espacio aéreo ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502137',
			],
			[
				'vc_parametro_detalle'=>'Servicio de actualización del sistema de armas ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502135',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mantenimiento aeronáutico ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502136',
			],
			[
				'vc_parametro_detalle'=>'Servicio de patrullaje aéreo para la seguridad ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de armamento ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de elementos de protección',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501025',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte adecuada ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502134',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación de municion policial ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control del tráfico y vigilancia marítima y fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguridad náutica en zonas portuarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504020',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operativa con reforzamiento estructural ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504016',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte con reforzamiento estructural ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia costera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504018',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo logístico para el aprovisionamiento del personal y carga',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el comando y control estratégico ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502138',
			],
			[
				'vc_parametro_detalle'=>'Centros de operaciones cibernéticas construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502123',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para las comunicaciones de las fuerzas militares actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502124',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para las comunicaciones de las fuerzas militares implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502125',
			],
			[
				'vc_parametro_detalle'=>'Centros de comando y control adecuados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502126',
			],
			[
				'vc_parametro_detalle'=>'Servicios de inteligencia tecnica para las operaciones contra delitos que afecten la seguridad personal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502127',
			],
			[
				'vc_parametro_detalle'=>'Unidades operativas con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504007',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operativa con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504008',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte con mantenimiento mayor ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504009',
			],
			[
				'vc_parametro_detalle'=>'Documento de planeación ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504010',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operativa construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504011',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504013',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura operativa adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504014',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de soporte adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguridad y defensa de las unidades militares',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502128',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotacion para el despliegue operacional de la Fuerza',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502129',
			],
			[
				'vc_parametro_detalle'=>'Servicio de extinción de incendios en el desarrollo de operaciones aéreas ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502130',
			],
			[
				'vc_parametro_detalle'=>'Centros y laboratorios adecuados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502131',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502132',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento de ruta ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504030',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 adecuada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505024',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505027',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 con mantenimiento ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505028',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 con mantenimiento ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505029',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 con mantenimiento ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Ciberseguridad ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de búsqueda y salvamento marítimo y fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504022',
			],
			[
				'vc_parametro_detalle'=>'Equipos tácticos y especializados adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502139',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación para la movilidad operacional y el apoyo logístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502140',
			],
			[
				'vc_parametro_detalle'=>'Equipos tácticos y especializados adquiridos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dotación para la movilidad operacional y el apoyo logístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte de pacientes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505013',
			],
			[
				'vc_parametro_detalle'=>'Equipos y dispositivos médicos de alta tecnología adquiridos ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505014',
			],
			[
				'vc_parametro_detalle'=>'Equipos y dispositivos médicos de alta tecnología con mantenimiento mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505015',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 construida y dotada ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505017',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505018',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de señalización marítima y fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504021',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504026',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información para el seguimiento de asuntos internacionales implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos marítimos internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1504035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de telecomunicaciones de banda ancha para la protección pública y la atención de operaciones de socorro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506015',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación del manejo, reducción y respuesta a emergencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de emergencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506021',
			],
			[
				'vc_parametro_detalle'=>'Unidades Básicas de Carabineros construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501017',
			],
			[
				'vc_parametro_detalle'=>'Unidades Básicas de Carabineros con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de activación de grupos antiexplosivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502078',
			],
			[
				'vc_parametro_detalle'=>'Documento de lineamientos doctrinarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502079',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599075',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599073',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599074',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599064',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599065',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599066',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599069',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599071',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599072',
			],
			[
				'vc_parametro_detalle'=>'Servicios de alojamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Atención a la Familia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505007',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación formal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505008',
			],
			[
				'vc_parametro_detalle'=>'Servicios de recreación y turismo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de rehabilitación inclusiva y de bienestar social para pensionados por invalidez.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505010',
			],
			[
				'vc_parametro_detalle'=>'Servicios Deportivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de estadía en hogares de paso',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1507017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación tecnológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1507020',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión e inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1507026',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1507027',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1507028',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión e inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control especial de aeronaves',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección a motonave',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección intrusiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección no intrusiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inteligencia estratégica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502070',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inteligencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de armas, municiones y explosivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguridad de la información militar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de búsqueda y rescate en combate',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de saneamiento básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la educación formal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la educación formal de la Policía Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la Vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de reconocimiento y exaltación del personal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505004',
			],
			[
				'vc_parametro_detalle'=>'Servicios Culturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1505005',
			],
			[
				'vc_parametro_detalle'=>'Comando de Atención Inmediata construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501002',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599016',
			],
			[
				'vc_parametro_detalle'=>'Documento de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502024',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de comunicaciones entre uniformados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de liderazgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502029',
			],
			[
				'vc_parametro_detalle'=>'Estación de policía construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control de disturbios, multitudes y bloqueos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la atención de actividades de seguridad y órden público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte especial de personal y carga',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte especial de personal y carga',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia y reconocimiento de zonas en riesgo o afectadas por desastres naturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1506012',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1501034',
			],
			[
				'vc_parametro_detalle'=>'Servicios de comunicaciones aeronáuticas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1502133',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1599076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de entrega de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la gestión de riesgos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de tierras de la Nación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704008',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión para adecuación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709097',
			],
			[
				'vc_parametro_detalle'=>'Distritos de adecuación de tierras construidos y ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709099',
			],
			[
				'vc_parametro_detalle'=>'Distritos de adecuación de tierras rehabilitados, complementados y modernizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709100',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formalización de la propiedad privada rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financieroa la reforestación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702034',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799061',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo para la formulación de proyectos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos productivos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamientointegral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la inclusión financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento de capacidades locales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la reforestación comercial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709110',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709111',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en inclusión financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la implementación de mecanismos y herramientas para el conocimiento, reducción y manejo de riesgos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la producción de las cadenas agrícolas, forestales, pecuarias, pesqueras y acuícolas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709105',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la comercialización de las cadenas agrícolas, forestales, pecuarias, pesqueras y acuícolas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709106',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción al consumo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709107',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709108',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709109',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de la actividad pesquera y acuícola',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707065',
			],
			[
				'vc_parametro_detalle'=>'Terminal pesquero adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702027',
			],
			[
				'vc_parametro_detalle'=>'Alevinos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702028',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702030',
			],
			[
				'vc_parametro_detalle'=>'Cuartos fríos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis de Información para la planificación pesquera y de la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de información para la planificación pesquera y de la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para las alianzas productivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702033',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707067',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y socialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707069',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707070',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Buenas Prácticas Agrícolas y producción sostenible',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703010',
			],
			[
				'vc_parametro_detalle'=>'Documento de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703011',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799066',
			],
			[
				'vc_parametro_detalle'=>'Plazas de mercado mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709112',
			],
			[
				'vc_parametro_detalle'=>'Plazas de mercado dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709113',
			],
			[
				'vc_parametro_detalle'=>'Servicios de administración de los recurso pesqueros y de la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707072',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo al fomento de la pesca y la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707073',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a las estaciones de acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control de la pesca y la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de ordenación pesquera y de la acuicultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia jurídica y técnica para adelantar los procedimientos administrativos especiales agrarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704041',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de sujetos de ordenamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión catastral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704037',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704038',
			],
			[
				'vc_parametro_detalle'=>'Documentos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de delimitación de territorios de las comunidades étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704035',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico para el uso eficiente de recursos naturales en ecosistemas estratégicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de trazabilidad vegetal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de medidas de protección y cancelación de predios y territorios abandonados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de entrega de predios restituidos y compensados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de presentación de demandas de restitucion de tierras y territorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de las políticas públicas de restitución y protección de tierras y territorios abandonados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la comercialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702038',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en comercialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702039',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707009',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de referencia agropecuario adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707010',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de referencia agropecuario con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707012',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de referencia agropecuario con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707013',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de referencia agropecuario construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707014',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de referencia agropecuario restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de trazabilidad animal implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis y diagnóstico sanitario, fitosanitario e inocuidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a brotes de enfermedades en animales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a brotes poblacionales de plagas en cultivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707020',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709034',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709035',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709036',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709037',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709038',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de pos cosecha restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709039',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709040',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709041',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709042',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709043',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709044',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción agrícola restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709045',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709046',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709047',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709048',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709049',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709050',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de producción pecuaria restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709051',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para el almacenamiento adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709052',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para el almacenamiento ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709053',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para el almacenamiento con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709054',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para el almacenamiento construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de titulación colectiva a comunidades étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de restitución y protección de tierras y territorios abandonados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Observatorio de Tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la planificación agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de adjudicación de baldíos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación en normas de Buenas Prácticas de Manufactura - BPM',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control a la movilización de animales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control y certificación a las importaciones de productos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del riesgo sanitario y fitosanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de registros sanitarios y fitosanitarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificación de riesgos de plagas para cultivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707031',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para el almacenamiento restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709058',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709059',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709060',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709061',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709062',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709063',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la transformación de productos agropecuarios restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709064',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709065',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709066',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709067',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709068',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709069',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709070',
			],
			[
				'vc_parametro_detalle'=>'Plataformas logísticas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709071',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709072',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709073',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709074',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709075',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709076',
			],
			[
				'vc_parametro_detalle'=>'Plaza de Ferias restructurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709077',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709078',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709079',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709080',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709081',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709082',
			],
			[
				'vc_parametro_detalle'=>'Plaza de mercado restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709083',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la administración, operación y conservación de los distritos de adecuación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709084',
			],
			[
				'vc_parametro_detalle'=>'Terminal pesquero adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para formular e implementar proyectos productivos familiares en predios restituidos y compensados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la adquisición de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la formalización de la propiedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para adelantar procesos agrarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de tierras rurales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificación para la inscripción o no en el registro de Tierras Despojadas y Abandonadas Forzosamente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de comercio exterior agropecuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la participación en Ferias nacionales e internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría para certificación en comercio exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en los espacios bilaterales y multilaterales de comercio exterior agropecuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de información de comercio exterior agropecuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707002',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707003',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707004',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707005',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de análisis y diagnóstico animal, vegetal e inocuidad con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro a productores y predios agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro para la comercialización de productos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a la sanidad de los predios agrícolas registrados ante el ICA',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707039',
			],
			[
				'vc_parametro_detalle'=>'Bancos de germoplasma adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708001',
			],
			[
				'vc_parametro_detalle'=>'Bancos de germoplasma ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708002',
			],
			[
				'vc_parametro_detalle'=>'Bancos de germoplasma con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708003',
			],
			[
				'vc_parametro_detalle'=>'Bancos de germoplasma construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708005',
			],
			[
				'vc_parametro_detalle'=>'Bancos de germoplasma restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708007',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación Adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708008',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación Ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708009',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708010',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación Construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708012',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación Modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708013',
			],
			[
				'vc_parametro_detalle'=>'Centros de Investigación Restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708016',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708017',
			],
			[
				'vc_parametro_detalle'=>'Especies animales y vegetales mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708018',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708019',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708020',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708021',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708022',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708023',
			],
			[
				'vc_parametro_detalle'=>'Estaciones experimentales para uso investigativo agrícola y pecuario restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708024',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de investigación agropecuaria Ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708025',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de investigación agropecuaria Adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708027',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de investigación agropecuaria construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708029',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios de investigación agropecuaria modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708030',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708032',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708033',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708034',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708035',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708036',
			],
			[
				'vc_parametro_detalle'=>'Parcelas, módulos y unidades demostrativas restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conservación y mantenimiento de especies animales, vegetales y microbiales en bancos de germoplasma',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de transferencia de tecnología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de extensión agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708041',
			],
			[
				'vc_parametro_detalle'=>'Alevinos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709001',
			],
			[
				'vc_parametro_detalle'=>'Astilleros adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709002',
			],
			[
				'vc_parametro_detalle'=>'Centrales de abastos ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709008',
			],
			[
				'vc_parametro_detalle'=>'Centrales de abastos con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709009',
			],
			[
				'vc_parametro_detalle'=>'Centrales de abastos construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709010',
			],
			[
				'vc_parametro_detalle'=>'Centrales de abastos modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709011',
			],
			[
				'vc_parametro_detalle'=>'Centrales de abastos restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709012',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709013',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709014',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709015',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709016',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709017',
			],
			[
				'vc_parametro_detalle'=>'Centros de acopio restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709018',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709019',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709020',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709021',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709022',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709023',
			],
			[
				'vc_parametro_detalle'=>'Centros logísticos agropecuarios restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709024',
			],
			[
				'vc_parametro_detalle'=>'Cuartos Fríos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709025',
			],
			[
				'vc_parametro_detalle'=>'Cuartos Fríos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709026',
			],
			[
				'vc_parametro_detalle'=>'Cuartos Fríos con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709027',
			],
			[
				'vc_parametro_detalle'=>'Cuartos Fríos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para soluciones de vivienda rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701001',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de interés social rural construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701002',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de interés social rural mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701003',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico para vivienda rural construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701004',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico para vivienda rural adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701005',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico para vivienda rural modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701006',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico para vivienda rural mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701007',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702001',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702002',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702003',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702004',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702005',
			],
			[
				'vc_parametro_detalle'=>'Casas comunitarias campesinas restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para educación en carreras agropecuarias o afines',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso a activos productivos y de comercialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica agropecuaria dirigida a pequeños productores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría para el fortalecimiento de la asociatividad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas administrativos y de gestión financiera a pequeños productores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703001',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión de riesgos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a través de Incentivos a la Capitalización rural - ICR',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero con la Línea especial de crédito -LEC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso al crédito agropecuario y rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fomento y la reactivación agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1703008',
			],
			[
				'vc_parametro_detalle'=>'Cartografía de zonificación y evaluación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704003',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799044',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la organización de ferias nacionales e internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1706009',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de trapiche panelero construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709091',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de trapiche panelero con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709092',
			],
			[
				'vc_parametro_detalle'=>'Servicio de procesamiento de caña panelera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709093',
			],
			[
				'vc_parametro_detalle'=>'Servicio de beneficio de animales destinados para el consumo humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709094',
			],
			[
				'vc_parametro_detalle'=>'Plantas de beneficio animal con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709095',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709096',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el mantenimiento y conservacion de los bancos de germoplasma',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la planificación agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis de información para la planificación agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de información para la planificación agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la gestión de conocimiento y comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control y certificación a las exportaciones de productos agropecuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación en buenas practicas agropecuarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorizaciones sanitarias y de inocuidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificaciones sanitarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de empresas productoras, importadoras y comercializadoras de insumos veterinarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro, inspección, vigilancia, control, y uso seguro de insumos veterinarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevención y control de enfermedades',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia epidemiológica veterinaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorización de organismos de inspección',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro a laboratorios externos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorizaciona laboratorios externos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control en la producción y comercialización y uso seguro de semillas e insumos agrícolas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia epidemiológica fitosanitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro para la producción y comercialización de insumos agrícolas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control a la movilización de material vegetal y forestales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal en Extensión Agropecuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Habilitación a las Entidades Prestadoras del Servicio de Extensión Agropecuaria -EPSEA´s',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1708048',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de acompañamiento en la implementaciónde Planes de desarrollo agropecuario y rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en la formulación y estructuración de proyectos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702026',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701008',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1701010',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración, operación y conservación de distritos de adecuación de tierras de propiedad del estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709101',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento a la prestación del servicio público de adecuación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709102',
			],
			[
				'vc_parametro_detalle'=>'Servicio de trámites legales de asociaciones de usuarios de distritos de adecuación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709103',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709104',
			],
			[
				'vc_parametro_detalle'=>'Servicio de revisión de proyectos de adecuación de tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1709098',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fomento de la asociatividad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fomento organizativo de la Agricultura Campesina, Familiar y Comunitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702018',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento productivo y empresarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702021',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de constitución de resguardos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de ampliación de resguardos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de caracterización de los territorios indígenas ocupados o poseídos ancestralmente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de adquisición de tierras y/o mejoras para comunidades étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para iniciativas comunitarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704030',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevención y control de plagas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorización de organismos de inspección',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de variedades vegetales protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de saneamiento de resguardos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de delimitación del territorio de las comunidades indígenas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mediación de resolución de conflictos territoriales de comunidades étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de titulación colectiva a comunidades negras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorización del uso para Organismos vivos modificados (OVM)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración sobre limitaciones a la propiedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia jurídica y técnica para asegurar el cumplimiento de la función ecológica y social de la propiedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento para la elaboración de planes de desarrollo sostenible',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de adjudicación de bienes fiscales patrimoniales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1704019',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a maquinaria y equipos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de vacunación para especies animales de interés agropecuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707042',
			],
			[
				'vc_parametro_detalle'=>'Servicios de control de parásitos para especies de interés agropecuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707043',
			],
			[
				'vc_parametro_detalle'=>'Servicios deinformación de pesca artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1702013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para alivios de pasivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de compensación por bien equivalente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1705007',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1799065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación de semillas para siembra',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1707021',
			],
			[
				'vc_parametro_detalle'=>'Cuartos fríos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901156',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación técnico - científica de los productos sujetos de inspección, vigilancia y control',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903048',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901167',
			],
			[
				'vc_parametro_detalle'=>'Servicios de comunicación y divulgación en inspección, vigilancia y control',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903047',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999065',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901170',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904018',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999068',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901168',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901169',
			],
			[
				'vc_parametro_detalle'=>'Unidades móviles para la atención médica adquiridas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901178',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901173',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901174',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901175',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901176',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la dotación hospitalaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901177',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902024',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902025',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en la gestión de insumos para el manejo de eventos de interés en salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901171',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fortalecimiento del talento humano en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901172',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la participación social en materia de salud y de seguridad social en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901093',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Salud prestados a población pobre en lo no cubierto por subsidios.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901100',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificación y selección de beneficiarios del régimen subsidiado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902019',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica comunitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación de laboratorios que realizan pruebas y ensayos a eventos de interés en salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de capacidades básicas y técnicas en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fortalecimiento de la prestación del servicio de salud en el nivel territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fortalecimiento institucional ante urgencias, emergencias desastres en el nivel territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de vigilancia epidemiológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación tecnológica en Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de emisión de conceptos técnicos de viabilidad para laboratorios de salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en suministros de tecnologías en salud para la atención a población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de laboratorio de referencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en monitoreo y organización de la red de bancos de sangre y Servicio de transfusión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transferencia y apropiación social del conocimiento en bancos de sangre',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención en salud publica de baja complejidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación, gestión y supervisión de la red de bancos de sangre y Servicio de transfusión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación externa del desempeño para bancos de sangre y Servicio de transfusión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de salud para pacientes con lepra',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación tecnológica en enfermedad de lepra',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del servicio de las empresas prestadoras de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901049',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la elaboración de planes financieros territoriales de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a las entidades territoriales para la implementación y/o ejecución de los planes financieros territoriales de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recobros por prestación de tecnologías y servicios No incluidas en el Productos Bioterapéuticos de Referencia - Subcuenta del Seguro de Riesgos Catastróficos y Accidentes de Transito, tramitados en el periodo.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902008',
			],
			[
				'vc_parametro_detalle'=>'Servicio liquidación de procesos de compensación del régimen contributivo durante la vigencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de liquidación mensual de afiliados al Régimen Subsidiado durante la vigencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de pre jornadas y jornadas de la función de conciliación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conciliación entre actores del Sistema General de Seguridad Social en Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de justicia dentro del Sistema General de Seguridad Social en Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis de laboratorio de estándares sanitarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorización y modificación de los programas de pagos moderadores y copagos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903018',
			],
			[
				'vc_parametro_detalle'=>'Servicio del ejercicio del procedimiento administrativo sancionatorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de diseño de metodologías, instrumentos y estrategias de inspección, vigilancia y control',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de salud para pacientes con cáncer',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en cáncer a entidades',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación tecnológica en cáncer',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el registros de cáncer',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal del talento humano en cáncer',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación tecnológica en epidemiologia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901033',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de adopción y seguimiento de acciones y medidas especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de auditoría y visitas inspectivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903016',
			],
			[
				'vc_parametro_detalle'=>'Serviciode apoyo financiero para dotar el servicios de salud conforme con estándares de habilitación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción social para poblaciones vulnerables',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica generadora de capacidades individuales y organizacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901018',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de aprobación de planes bienales de inversiones públicas en los municipios de la jurisdicción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de las instituciones públicas prestadoras de Servicio de salud al Ministerio de Salud y de la Protección Social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro y control de los prestadores de Servicio de salud públicos y privado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de incorporación de las estrategias de atención primaria en el Plan Decenal de Salud Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de regulación de centros reguladores de urgencias, emergencias y desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero y vigilancia de los tribunales seccionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de redes de empresas sociales del estado en el programa territorial de reorganización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo mediante mecanismos de participación social en materia de salud y de seguridad social en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo técnicoen el desarrollo del proceso de planificación y programas de capacitación y acompañamiento para el control del Plan territorial de saludarticulando espacios de participación de la academia.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación de los integrantes del Sistema Nacional de Gestión del Riesgo de desastres con los diferentes actores del sector salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a entidades encargadas de la gestión del Plan Territorial de Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a los municipios en la prestación del plan de Intervenciones colectivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a los municipios para el desarrollo de intervenciones colectivas en coordinación con el departamento para el uso de los recursos de salud pública.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica de los compromisos con las Entidades Administradoras de Planes de Beneficios, las administradoras de Riesgos Laborales , en el marco de sus competencias.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica de sensibilización de la necesidad de prestación de servicios a quien porte el emblema.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia técnica en Planes, programas y estrategias desarrolladas y evaluadas en el marco delPlan Territorial de Salud con adecuación sociocultural.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de capacidades en los actores del Sistema General de Seguridad Social en Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901069',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de Autoridades sanitarias distritales y municipales fortalecidas en la elaboración de planes y proyectos, ejecución y control del Plan Territorial de',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'salud. 1901070',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de procesos de planificación, ejecución y control de los recursos financieros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a instituciones prestadoras de Servicio de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conformación de Centros Reguladores de Urgencias, Emergencias y Desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conformación de Comité de Urgencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control para la adopción de normas técnicas en temas de construcción, dotación y mantenimiento de dotación a Instituciones Prestadoras de Servicio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de diagnostico sobre necesidades y problemas de salud dirigidas para ajuste del Plan Decenal de Salud Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de los hallazgos, conclusiones y análisis de los resultados de monitoreo y evaluación anual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901078',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y difusión del Impacto de las condiciones de salud y calidad de vida de la población distrital.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901079',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formulación y ejecución de los planes, programas y proyectos en salud pública en su ámbito territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901080',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de los procesos de gestión del riesgo y el manejo de desastres en los instrumentos de gestión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901081',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación del plan de gestión del riesgo de desastres y estrategia para la respuesta a emergencias de su respectiva jurisdicción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901082',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de los procesos de conocimiento y reducción del riesgo y de manejo de desastres en el ámbito de su competencia territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901083',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de la planeación, ejecución, monitoreo y evaluación del Plan de Intervenciones Colectivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901084',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para las instituciones públicas prestadoras de salud a la dirección departamental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información sobre indicadores de logros en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901086',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información sobre plan territorial de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901087',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información integral en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901089',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y evaluación de la ejecución técnica, financiera y administrativa de los planes de salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901090',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de planes, programas, estrategias y proyectos municipales en salud y seguridad social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901094',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia de las condiciones ambientales que afectan la salud y el bienestar de la población en municipios especiales 1,2 y 3',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901097',
			],
			[
				'vc_parametro_detalle'=>'Servicio de urgencias para atención en salud afectadas por emergencias o desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901101',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de los recursos financieros del Sistema General de Participaciones en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyofinanciero para el pago de loslaboratorios de Salud Pública directos o por contratación.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el manejo de información financiera y contable de los recursos de salud y de rendición de cuentas para la cultura del buen gobierno',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de afiliaciones al régimen contributivo del Sistema General de Seguridad Social de las personas con capacidad de pago',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de supervisión y control del recaudo de los recursos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902021',
			],
			[
				'vc_parametro_detalle'=>'ServiciodelSistema General de Seguridad Social en Salud y en los regímenes de excepción definidos en la Ley 100 de 1991, vigilado y controlado en cada Jurisdicción.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de procesos de planificación, ejecución y control de los recursos financieros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1902023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control de los factores del riesgo del ambiente que afectan la salud humana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia y control de las políticas y normas técnicas, científicas y administrativas expedidas por el Ministerio de Salud y Protección Social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción, expendio, comercialización y distribución de medicamentos vigilada y controlada.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción, prevención, vigilancia y control de vectores y zoonosis',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de validación de mecanismos para adelantar las auditorias correspondientes a las entidades territoriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia de calidad del agua para consumo humano, recolección, transporte y disposición final de residuos sólidos; manejo y disposición final de radiaciones ionizantes, excretas, residuos líquidos y aguas servidas y calidad del aire.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia sanitaria e Inspección Vigilancia y Control del Sistema General de Seguridad Social en Salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia y control sanitario de los factores de riesgo para la salud, en los establecimientos y espacios que pueden generar riesgos para la población.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de aprobación de modificaciones de capacidad de afiliación de empresas administradoras de planes de beneficio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de aprobación de planes voluntarios de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en inspección, vigilancia y control',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a entidades en liquidación voluntaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de estrategias para el fortalecimiento del control social en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación, aprobación y seguimiento de acuerdos de reestructuración de pasivos para instituciones prestadoras de Servicio de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación, aprobación y seguimiento de planes de gestión integral del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de peticiones, quejas, reclamos y denuncias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de habilitación y autorización de empresas administradoras de planes de beneficio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de interventores, liquidadores y contralores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de vigilancia epidemiológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903031',
			],
			[
				'vc_parametro_detalle'=>'Servicios de evaluación de riesgo de toxicidad de plaguicidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de verificación de técnicas de análisis',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903033',
			],
			[
				'vc_parametro_detalle'=>'Servicio deasistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro sanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificaciones en buenas practicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis de laboratorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de sanidad animal en el coso municipal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904016',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y comunicación de estrategias de salud y promoción social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901136',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901137',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901139',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901140',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901141',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901142',
			],
			[
				'vc_parametro_detalle'=>'Centros de protección social para el adulto mayor modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901143',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901144',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901145',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901146',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901147',
			],
			[
				'vc_parametro_detalle'=>'Centros de día para el adulto mayor modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901148',
			],
			[
				'vc_parametro_detalle'=>'Servicios de atención y protección integral al adulto mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901149',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia funeraria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión de la inspección, vigilancia y control sanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903045',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control y aseguramiento de la calidad a los bienes y servicios de interés para la salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901151',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de laboratorios en salud con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901152',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de laboratorios en salud con mejoramiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901153',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de insumos de laboratorio para investigación, diagnóstico y control de eventos de interés para la salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901154',
			],
			[
				'vc_parametro_detalle'=>'Biológicos, biosimilares y medicamentos de síntesis de interés en salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901155',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo con tecnologías en salud no cubiertas en el Plan de Beneficios en Salud del régimen subsidiado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901164',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la habilitación y/o la rehabilitación funcional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901165',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de supervisión del acceso de la población a los servicios de salud de la jurisdicción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901157',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo, seguimiento y evaluación de la gestión de los recursos humanos, técnicos, administrativos y financieros del Plan Decenal de Salud Pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901158',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en temas de salud pública y prestación de servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901159',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de salud pública y prestación de servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901160',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de calidad en salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901161',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en materia de salud pública y prestación de servicios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901162',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención en salud a la población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901163',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999054',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999055',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999056',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999061',
			],
			[
				'vc_parametro_detalle'=>'Cuartos fríos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901134',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte de biológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901135',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de laboratorios construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903043',
			],
			[
				'vc_parametro_detalle'=>'Estudios y diseños de infraestructura de laboratorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a los servicios médicos legales y de ciencia forense',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la construcción y dotación de morgue',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la construcción de cementerios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la ampliación de cementerios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la remodelación de cementerios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la habilitación de cementerios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la construcción de cosos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la ampliación de cosos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904008',
			],
			[
				'vc_parametro_detalle'=>'Morgues construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904009',
			],
			[
				'vc_parametro_detalle'=>'Cementerios remodelados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904010',
			],
			[
				'vc_parametro_detalle'=>'Cementerios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904011',
			],
			[
				'vc_parametro_detalle'=>'Cementerios ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904012',
			],
			[
				'vc_parametro_detalle'=>'Cementerios habilitados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904013',
			],
			[
				'vc_parametro_detalle'=>'Cosos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904014',
			],
			[
				'vc_parametro_detalle'=>'Cosos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1904015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mantenimiento a ambulancias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901133',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de modos, condiciones y estilos de vida saludables',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901127',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de vida saludable y condiciones no transmisibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901131',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para abordar condiciones crónicas prevalentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901117',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para temas de consumo y aprovechamiento biológico de los alimentos, calidad e inocuidad de los alimentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901118',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para la prevención y atención integral a problemas y trastornos mentales y sustancias psicoactivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901119',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para la prevención y atención integral en salud sexual y reproductiva desde un enfoque de derechos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901120',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para abordar situaciones de salud relacionadas con condiciones ambientales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901121',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para abordar situaciones prevalentes de origen laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901122',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para enfermedades emergentes, reemergentes y desatendidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901123',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión del riesgo para enfermedades inmunoprevenibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901124',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción en temas de disponibilidad y acceso a los alimentos, consumo y aprovechamiento biológico de los alimentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901125',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción en temas de hábitat saludable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901126',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción en temas de salud mental y convivencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901128',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de los derechos sexuales y reproductivos y la equidad de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901129',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción en temas seguridad y salud en el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901130',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la prestación del servicio de transporte de pacientes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901132',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999016',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901102',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 adecuada.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901103',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901104',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901105',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901107',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901108',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901109',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 2 con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901110',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901112',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901113',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901114',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901115',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 3 modificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901116',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1999067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento para la destrucción de medicamentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para dotar con bienes y Servicio de interés para la salud pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del riesgo en inocuidad de alimentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del riesgo de toxicidad de plaguicidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1903006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de regulación de precios de tecnologías en el sistema de salud',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de habilitación de servicios oncológicos y unidades funcionales de cáncer',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'1901166',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección y control de la actividad minera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104012',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión nacional construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102018',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión nacional ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102017',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión nacional mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102019',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de distribución local construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102015',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de distribución local ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102014',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de distribución local mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102016',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión regional construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102021',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión regional ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102020',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de transmisión regional mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102022',
			],
			[
				'vc_parametro_detalle'=>'Gasoducto ramal construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101003',
			],
			[
				'vc_parametro_detalle'=>'Gasoducto ramal mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101004',
			],
			[
				'vc_parametro_detalle'=>'Gasoducto troncal construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101005',
			],
			[
				'vc_parametro_detalle'=>'Gasoducto troncal mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101006',
			],
			[
				'vc_parametro_detalle'=>'Redes de distribución de gas combustible mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101010',
			],
			[
				'vc_parametro_detalle'=>'Redes de distribución de gas combustible construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101009',
			],
			[
				'vc_parametro_detalle'=>'Unidades de generación de energía eléctrica con combustibles líquidos instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102055',
			],
			[
				'vc_parametro_detalle'=>'Central de generación eólica construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102053',
			],
			[
				'vc_parametro_detalle'=>'Unidades de generación fotovoltaica de energía eléctrica instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102058',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a la implementación de fuentes no convencionales de energía ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a la implementacion de medidas de eficiencia energética',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102063',
			],
			[
				'vc_parametro_detalle'=>'Central de generación fotovoltaica construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102038',
			],
			[
				'vc_parametro_detalle'=>'Central de generación fotovoltaica ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102039',
			],
			[
				'vc_parametro_detalle'=>'Central de generación híbrida construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102042',
			],
			[
				'vc_parametro_detalle'=>'Central de generación híbrida ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102043',
			],
			[
				'vc_parametro_detalle'=>'Redes de alumbrado público construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102012',
			],
			[
				'vc_parametro_detalle'=>'Redes de alumbrado público ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102010',
			],
			[
				'vc_parametro_detalle'=>'Redes de alumbrado público mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102013',
			],
			[
				'vc_parametro_detalle'=>'Redes de alumbrado público con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102011',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199063',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de regasificación construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101007',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de regasificación mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101008',
			],
			[
				'vc_parametro_detalle'=>'Tanques para el almacenamiento de gas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en oficios diferentes a la minería',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104024',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la gestión de procesos de participación, colaboración, y transparencia del sector minero energético',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106022',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de delimitación y declaración de Áreas Estratégicas Mineras para su adjudicación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104025',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199068',
			],
			[
				'vc_parametro_detalle'=>'Servicios de geoconservación al patrimonio geológico mueble e inmueble',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106027',
			],
			[
				'vc_parametro_detalle'=>'Museos geológicos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106028',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103025',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103026',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para el desarrollo de proyectos de inversión social en territorios estratégicos para el sector de hidrocarburos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de generación e implementación de agendas de trabajo participativas entre la comunidad y el sector minero energético',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la normalización de redes de energía eléctrica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la financiación de infraestructura de energía eléctrica en las zonas no interconectadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la financiación de infraestructura de energía eléctrica en las zonas rurales interconectadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102061',
			],
			[
				'vc_parametro_detalle'=>'Redes internas de gas combustible instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101015',
			],
			[
				'vc_parametro_detalle'=>'Redes domiciliarias de gas combustible instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101016',
			],
			[
				'vc_parametro_detalle'=>'Redes internas de energía eléctrica instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102044',
			],
			[
				'vc_parametro_detalle'=>'Redes domiciliarias de energía eléctrica instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102045',
			],
			[
				'vc_parametro_detalle'=>'Unidades de generación fotovoltáica de energía eléctrica con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102056',
			],
			[
				'vc_parametro_detalle'=>'Unidades de generación de energía eléctrica con combustibles líquidos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102057',
			],
			[
				'vc_parametro_detalle'=>'Central de generación eléctrica con combustibles líquidos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102048',
			],
			[
				'vc_parametro_detalle'=>'Central de generación fotovoltaica con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102049',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de monitoreo de medición de variables energéticas en las zonas no interconectadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de hidrocarburos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103024',
			],
			[
				'vc_parametro_detalle'=>'Servicios de calibración de equipos nucleares y radiológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de ensayo mediante técnicas radiactivas, nucleares e isotópicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106024',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para subsidios a la oferta en el servicio público de gas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para subsidios al consumo en el servicio público de gas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la financiación de proyectos de infraestructura para el servicio público de gas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101011',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2101002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la reconversión socio laboral de las actividades de contrabando de combustibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la estructuración de proyectos energéticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102030',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo de información de la prestación del servicio de energía eléctrica en las zonas no interconectadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102023',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la estructuración de convocatorias de los sistemas de transmisión de energía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo y el desarrollo humano en manipulación de energía eléctrica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102031',
			],
			[
				'vc_parametro_detalle'=>'Centrales hidroeléctricas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102002',
			],
			[
				'vc_parametro_detalle'=>'Centrales hidroeléctricas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102001',
			],
			[
				'vc_parametro_detalle'=>'Centrales hidroeléctricas modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102003',
			],
			[
				'vc_parametro_detalle'=>'Centrales térmicas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102005',
			],
			[
				'vc_parametro_detalle'=>'Centrales térmicas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la promoción y posicionamiento de los recursos hidrocarburíferos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la atención y disminución de la conflictividad del sector de hidrocarburos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de regularización de la actividad minera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al consumo del servicio de energía eléctrica del sistema interconectado nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al consumo del servicio de energía eléctrica en las zonas no interconectadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102025',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de exploración de áreas mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en actividades mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del sector minero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104009',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en créditos para la minería',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en estructuración de proyectos de energías limpias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105012',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación interinstitucional para el control a la explotación ilícita de minerales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para otorgar incentivos a la gestión eficiente de la energía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de los resultados obtenidos en asuntos ambientales en el sector minero energético',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105014',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de monitoreo de geo amenazas instaladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106002',
			],
			[
				'vc_parametro_detalle'=>'Cartografía de información minero energética',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106003',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación sobre avances sectoriales en la temática de pasivos ambientales mineros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de regulación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del sector minero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en actividades de explotación minera de pequeña y mediana escala',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la viabilización de proyectos mineros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de la infraestructura del sector minero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación del potencial mineral de las áreas de interés',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106014',
			],
			[
				'vc_parametro_detalle'=>'Servicio del sistema de monitoreo de las amenazas geológicas para la investigación aplicada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106016',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de desechos radiactivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106011',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106010',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102033',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103017',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104014',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y difusión de la actividad minera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de emergencias mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo competitivo del sector minero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la intervención de áreas mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el manejo socio ambiental en las actividades mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la reconversión socio laboral de las actividades de contrabando de combustibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la asignación de los volúmenes de combustibles líquidos derivados del petróleo subsidiados para las zonas de frontera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el control del consumo de combustibles líquidos derivados del petróleo en las zonas de frontera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la regularización de las actividades mineras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104018',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de la cadena de hidrocarburos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el manejo de temas minero energéticos internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del sector minero energético',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de levantamiento y actualización de activos energéticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102034',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la intervención de áreas afectadas por el sector minero energético',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2106020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la reconversión socio laboral de personas dedicadas a la minería',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la innovación y el desarrollo tecnológico en la minería',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2104022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de capacidades organizativas de los prestadores del servicio en las Zonas no Interconectadas del país',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a las comunidades en temas de eficiencia energética y el uso racional de la energía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2102036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199054',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199055',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199056',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199057',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199062',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199013',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de cooperación para el desarrollo minero energético sostenible',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2105015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para subsidiar el consumo de combustibles líquidos derivados del petróleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para subsidiar el transporte de combustibles líquidos derivados del petróleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2103022',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2199067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para la regionalización en la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202038',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299064',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de la estrategia de residencia escolar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para la prevención de riesgos sociales en entornos escolares',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de la estrategia educativa del sistema de responsabilidad penal para adolescentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de desarrollo de contenidos educativos para la educación inicial, preescolar, básica y media de personas con discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en calidad y pertinencia de la educación para el trabajo y el desarrollo humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el cumplimiento de  lineamientos técnicos y normativos en educación para el trabajo y el desarrollo humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información  de la Educación para el Trabajo- ETDH  actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202041',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202042',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de las estrategias educativas implementadas en la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de la calidad de la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a las capacidades de los docentes de educación Inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201074',
			],
			[
				'vc_parametro_detalle'=>'Servicio asistencia técnica en el desarrollo de estrategias para la permanencia en todos los niveles del sistema educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el acceso a servicios especializados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica de fomento a la calidad y pertinencia de la educación superior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202052',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a la investigación, proyección social e internacionalización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a proyectos pedagógicos productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201061',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la amortización de créditos educativos en la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fomento de la graduación en la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202048',
			],
			[
				'vc_parametro_detalle'=>'Servicio educativo de promoción del bilingüismo para docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201060',
			],
			[
				'vc_parametro_detalle'=>'Ambientes de aprendizaje dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202050',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202051',
			],
			[
				'vc_parametro_detalle'=>'Ambientes de aprendizaje para la educación inicial preescolar, básica y media dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201070',
			],
			[
				'vc_parametro_detalle'=>'Servicio educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de riesgos y desastres en establecimientos educativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201068',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201069',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201063',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación para docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201064',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación vocacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento de escuelas de padres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a las capacidades de los docentes o asistentes de educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección y vigilancia del sector educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento para el desarrollo de modelos educativos interculturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de docencia escolar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201038',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en política educativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201003',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de la permanencia en la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en inspección, vigilancia y control del sector educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control del sector educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento a la gestión del sector educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación del concurso docente y directivo docente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para el acceso a la educación inicial, preescolar, básica y media.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión de la educación inicial y preescolar en condiciones de calidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201018',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa restaurada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201021',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para educación inicial construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201022',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para educación inicial mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acondicionamiento de ambientes de aprendizaje',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la permanencia con alimentación escolar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la permanencia con transporte escolar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201029',
			],
			[
				'vc_parametro_detalle'=>'Servicio educación formal por modelos educativos flexibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación por ciclos lectivos especiales integrados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de alfabetización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para la permanencia en programas de educación formal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201033',
			],
			[
				'vc_parametro_detalle'=>'Servicio educativos de promoción del bilingüismo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación entre la educación media y el sector productivo.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de desarrollo de contenidos educativos para la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención integral para la primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201037',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para el acceso a la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la permanencia a la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso a la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la permanencia a la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso y permanencia a la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acreditación de la calidad de la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mejoramiento de la calidad de la educación para el trabajo y el desarrollo humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de convalidación de títulos obtenidos en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación entre la educación superior o terciaria y el sector productivo.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la permanencia en la educación superior o terciara',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de la calidad de la educación superior o terciara',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202017',
			],
			[
				'vc_parametro_detalle'=>'Servicio educativos de promoción del bilingüismo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la Educación Superior de Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de innovación pedagógica en la educación terciaria o superior, basada en tecnologías de la información y comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de innovación pedagógica en la educación terciaria o superior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a las capacidades de los docentes de educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de desarrollo de contenidos educativos para la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202024',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación superior o terciaria construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202025',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación superior o terciariamejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202026',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación superior restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a las Instituciones de Educación Superior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202030',
			],
			[
				'vc_parametro_detalle'=>'Modelos pedagógicos flexibles y pertinentes para población con discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención con modelos alternativos de educación y de organización de la oferta educativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en educación con enfoque incluyente y de calidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la permanencia en todos los niveles del sistema educativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a la educación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso y permanencia en la educación superior o terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203008',
			],
			[
				'vc_parametro_detalle'=>'Pruebas estandarizadas especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación y desarrollo para la comunicación especializada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación para el acceso a Servicio especializados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203014',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa especializada construida y acondicionada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación de los derechos de las personas con discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información estadística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de contenidos y ajustes razonables para promover y garantizar el acceso a la información y a la comunicación para personas discapacitadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203018',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información en materia educativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201048',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en innovación educativa en la educación inicial, preescolar, básica y media',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201046',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a la implementación de modelos de innovación educativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201047',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero a entidades territoriales para la ejecución de estrategias de permanencia con alimentación escolar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201045',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299044',
			],
			[
				'vc_parametro_detalle'=>'Servicios conexos a la prestación del servicio educativo oficial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201044',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión del riesgo físico en estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201043',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de accesibilidad a contenidos web para fines pedagógicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201050',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201051',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201052',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299060',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación aplicada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201041',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación aplicada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202035',
			],
			[
				'vc_parametro_detalle'=>'Servicios de atención psicosocial a estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201042',
			],
			[
				'vc_parametro_detalle'=>'Servicios de atención psicosocial a estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202036',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión del riesgo físico en estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2202037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el acceso a educación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2203019',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2299066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de validación de los modelos educativos flexibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación de los modelos educativos flexibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2201058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de contenidos radio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302073',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399061',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a los usuarios del sector de las comunicaciones en uso del espectro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorizaciones a operadores de televisión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301069',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Información para la implementación de la Estrategia de Gobierno digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302086',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo de ciudades inteligentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301067',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399064',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302083',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conservación del archivo sonoro y audio visual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302084',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación de los soportes del archivo sonoro y audio visual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en tecnologías de la información y las comunicaciones para empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302087',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento y monitoreo para el cierre de brecha digital regional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso y promoción a las tecnologías de la información y las comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia y control de telecomunicaciones y servicios postales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301078',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para las entidades del Sistema Nacional de Gestión del Riesgo de Desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la implementación del Sistema Nacional de Telecomunicaciones de Emergencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a operadores de televisión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301070',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302088',
			],
			[
				'vc_parametro_detalle'=>'Centros de emisión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de seguimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301005',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301006',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de monitoreo fijo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301007',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de radiodifusión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301008',
			],
			[
				'vc_parametro_detalle'=>'Estudios de radio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301009',
			],
			[
				'vc_parametro_detalle'=>'Estudios de video',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301010',
			],
			[
				'vc_parametro_detalle'=>'Salas de edición',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso Zonas Wifi',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para promocionar la oferta institucional en TIC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para promocionar el despliegue de infraestructura de las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para proyectos en Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al usuario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción y/o coproducción de contenidos convergentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción para la apropiación de la Estrategia de Gobierno digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción para la producción de piezas audiovisuales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302076',
			],
			[
				'vc_parametro_detalle'=>'Softwares y hardware para la inclusión de las personas con discapacidad en las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302078',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso y uso de Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el operador postal Oficial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica al sector postal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conexiones a redes de acceso',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conexiones a redes de servicio portador',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la regulación en materia de Tecnologías de la Información y las comunicaciones, y en materia postal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en tecnologías de la información y las comunicaciones.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en uso básico de tecnologías de la información y las comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en gestión de espectro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en tecnologías de la información y las comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en temas de uso pedagógico de tecnologías de la información y las comunicaciones.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo para operadores del servicio postal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de filatelia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de habilitación postal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo en espectro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de telecomunicaciones para el envío de alertas tempranas a la población.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del marco regulatorio de la prestación del servicio de televisión en Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de espectro radioeléctrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de telecomunicaciones de voz para las entidades del Sistema nacional de Riesgos y Desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301021',
			],
			[
				'vc_parametro_detalle'=>'Servicio del código postal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301043',
			],
			[
				'vc_parametro_detalle'=>'Contenidos digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302002',
			],
			[
				'vc_parametro_detalle'=>'Desarrollos digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302006',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302007',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de alianzas interinstitucionales para formación en Gestión Tecnologías de la Información, y Seguridad y Privacidad de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de almacenamiento local de información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al desarrollo de Contenidos Digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al desarrollo de soluciones tecnológicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo de programas de formación inicial y contínua en nuevas tecnologías',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo de proyectos e Investigación, desarrollo e innovación en temas TIC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo de soluciones tecnológicas para MiPyme',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para formación y educación que promueva y apoye las temáticas en Gobierno Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para incentivar la educación en Tecnologías de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la promoción de la innovación y la especialización en la industria de las Tecnologías de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el emprendimiento de base tecnológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a emprendedores y empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a empresas de la industria de Tecnologías de la Información para mejorar sus capacidades de comercialización e innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica especializada a equipos y empresas de base tecnológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de la Estrategia de Gobierno digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a usuarios para acceso a la memoria audiovisual y sonora',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de catalogación de documentos audiovisuales y sonoros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal para fortalecer las habilidades en Gobierno Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la implementación de la Estrategia de Gobierno digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en habilidades en Gobierno Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en tecnologías de la información y las comunicaciones para MiPymes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de alianzas para el fortalecimiento del análisis y prospectiva del sector TIC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de alianzas para promover la formación en Gobierno Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Investigación, Desarrollo e Innovación para la industria de las Tecnologías de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y evaluación a la implementación de la Estrategia de Gobierno digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la participación ciudadana para el fomento del diálogo con el Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la industria de Tecnologías de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación de estrategias para MiPyme',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación de la memoria audiovisual y sonora',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de posicionamiento de la radio pública Nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la educación para el trabajo en Gestión TI y en Seguridad y Privacidad de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de Arquitectura TI en Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión y promoción de la industria de aplicaciones y contenidos digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión de instrumentos de promoción de la innovación en la industria TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para generar competencias en Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para la inclusión de personas con discapacidad en las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para promover el uso de internet',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para el enfoque diferencial sobre las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para el teletrabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para el uso responsable de las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Teletrabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en uso responsable y seguro de las Tecnologías de la Información y las Comunicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302059',
			],
			[
				'vc_parametro_detalle'=>'Centro Integrado de Servicios construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301060',
			],
			[
				'vc_parametro_detalle'=>'Centro Integrado de Servicios adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en tecnologías de la información y las comunicaciones para la educación básica, primaria y secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recolección y gestión de residuos electrónicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la adecuada disposición de residuos de aparatos eléctricos y electrónicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la recolección y gestión de residuos electrónicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para elacceso a terminales de cómputo y contenidos digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para fortalecer el Gobierno Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302082',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399060',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399016',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de inspección y vigilancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301044',
			],
			[
				'vc_parametro_detalle'=>'Servicios de promoción de contenidos audiovisuales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302079',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fomento de contenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302081',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión para promover el uso de internet',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de medición de audiencias e impacto de los contenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y evaluación a la implementación de Arquitectura TI Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal sobre las Tecnologías de la Información y las Comunicaciones con enfoque diferencial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Gestión TI y en Seguridad y Privacidad de la Información',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas relacionados con el modelo de convergencia de la televisión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para aumentar la calidad y cantidad de talento humano para la industria TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para promover el uso de Internet',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2302062',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2399065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Televisión Digital',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2301022',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406027',
			],
			[
				'vc_parametro_detalle'=>'Muelle fluvial mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406008',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea rehabilitada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404013',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea en condiciones de operación por mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404023',
			],
			[
				'vc_parametro_detalle'=>'Malecón mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406012',
			],
			[
				'vc_parametro_detalle'=>'Vías de acceso en funcionamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405010',
			],
			[
				'vc_parametro_detalle'=>'Acceso carretero en funcionamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405011',
			],
			[
				'vc_parametro_detalle'=>'Acceso férreo en funcionamiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405012',
			],
			[
				'vc_parametro_detalle'=>'Corredor férreo construido y en condiciones para operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404001',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404002',
			],
			[
				'vc_parametro_detalle'=>'Segunda línea construida en la red férrea',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404005',
			],
			[
				'vc_parametro_detalle'=>'Vías secundarias y terciarias categorizadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402108',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404008',
			],
			[
				'vc_parametro_detalle'=>'Tercer riel construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404009',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea en condiciones de operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404016',
			],
			[
				'vc_parametro_detalle'=>'Paso a nivel rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404017',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria atendida por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402096',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401001',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido en vía primaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401002',
			],
			[
				'vc_parametro_detalle'=>'Túnel construido en vía primaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401003',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía primaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401004',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401008',
			],
			[
				'vc_parametro_detalle'=>'Nueva calzada construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401009',
			],
			[
				'vc_parametro_detalle'=>'Nuevo carril construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401010',
			],
			[
				'vc_parametro_detalle'=>'Vía ampliada o rectificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401011',
			],
			[
				'vc_parametro_detalle'=>'Vía pavimentada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401012',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401013',
			],
			[
				'vc_parametro_detalle'=>'Viaducto ampliado o rectificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401014',
			],
			[
				'vc_parametro_detalle'=>'Túnel construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401015',
			],
			[
				'vc_parametro_detalle'=>'Túnel ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401016',
			],
			[
				'vc_parametro_detalle'=>'Puente construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401017',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria rehabilitada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401020',
			],
			[
				'vc_parametro_detalle'=>'Puente rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401021',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401023',
			],
			[
				'vc_parametro_detalle'=>'Túnel rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401022',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria atendida por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operación de vías primarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401030',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria con obras complementarias de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401034',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria con dispositivos de control y señalización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401036',
			],
			[
				'vc_parametro_detalle'=>'Vías categorizadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401046',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402001',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402006',
			],
			[
				'vc_parametro_detalle'=>'Nueva calzada construida en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402007',
			],
			[
				'vc_parametro_detalle'=>'Nuevo carril construido en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402008',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria ampliada y/o rectificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402009',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria rehabilitada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402018',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria con mantenimiento periódico o rutinario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402021',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria con obras complementarias de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402028',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria atendida por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402035',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402039',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402041',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria ampliada y/o rectificada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402043',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria rehabilitada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402045',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria con obras complementarias de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402049',
			],
			[
				'vc_parametro_detalle'=>'Caminos ancestrales mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402055',
			],
			[
				'vc_parametro_detalle'=>'Caminos ancestrales con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402056',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico urbano construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408025',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico urbano ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408026',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico urbano mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402117',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408023',
			],
			[
				'vc_parametro_detalle'=>'Vía urbana con mantenimiento periódico o rutinario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402115',
			],
			[
				'vc_parametro_detalle'=>'Vía urbana rehabilitada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402116',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria con mantenimiento periódico o rutinario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402112',
			],
			[
				'vc_parametro_detalle'=>'Vía urbana construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402113',
			],
			[
				'vc_parametro_detalle'=>'Vía urbana mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402114',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de transporte para la seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409013',
			],
			[
				'vc_parametro_detalle'=>'Servicios de operación de vías primarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406037',
			],
			[
				'vc_parametro_detalle'=>'Vía habilitada por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Geográfica - SIG',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409021',
			],
			[
				'vc_parametro_detalle'=>'Viaductos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401055',
			],
			[
				'vc_parametro_detalle'=>'Vía secundaria con dispositivos de control y señalización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402123',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria con dispositivos de control y señalización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402124',
			],
			[
				'vc_parametro_detalle'=>'Puente ampliado o rectificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401076',
			],
			[
				'vc_parametro_detalle'=>'Documentos de apoyo técnico para el desarrollo de intervenciones en infraestructura vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401075',
			],
			[
				'vc_parametro_detalle'=>'Canal mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405022',
			],
			[
				'vc_parametro_detalle'=>'Canal mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405023',
			],
			[
				'vc_parametro_detalle'=>'Muelle fluvial mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406055',
			],
			[
				'vc_parametro_detalle'=>'Vía primaria intervenida y en operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401074',
			],
			[
				'vc_parametro_detalle'=>'Cicloinfraestructura construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409058',
			],
			[
				'vc_parametro_detalle'=>'Vía atendida por emergencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguridad ciudadana en vías nacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo tecnológico para la seguridad ciudadana en las vías',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409045',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406052',
			],
			[
				'vc_parametro_detalle'=>'Vías con obras complementarias de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409038',
			],
			[
				'vc_parametro_detalle'=>'Vías con dispositivos de control y señalización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409039',
			],
			[
				'vc_parametro_detalle'=>'Sistemas de contención vehicular',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409040',
			],
			[
				'vc_parametro_detalle'=>'Aeropuertos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403002',
			],
			[
				'vc_parametro_detalle'=>'Obras de saneamiento ambiental para la optimización de la navegabilidad fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406042',
			],
			[
				'vc_parametro_detalle'=>'Viaducto con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401057',
			],
			[
				'vc_parametro_detalle'=>'Andén construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402121',
			],
			[
				'vc_parametro_detalle'=>'Obras de prevención y control de la erosión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406056',
			],
			[
				'vc_parametro_detalle'=>'Puente peatonal de la red secundaria construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402122',
			],
			[
				'vc_parametro_detalle'=>'Obras para la prevención y control de inundaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406045',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499061',
			],
			[
				'vc_parametro_detalle'=>'Obras rehabilitadas para la prevención y control de inundaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406046',
			],
			[
				'vc_parametro_detalle'=>'Acceso marítimo profundizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405018',
			],
			[
				'vc_parametro_detalle'=>'Acceso marítimo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405019',
			],
			[
				'vc_parametro_detalle'=>'Acceso Marítimo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recaudo de la tasa de peaje',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401065',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de peaje construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401066',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de peaje mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401067',
			],
			[
				'vc_parametro_detalle'=>'Obras para la reducción del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409020',
			],
			[
				'vc_parametro_detalle'=>'Intersección construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401061',
			],
			[
				'vc_parametro_detalle'=>'Zonas escolares señalizadas y con obras de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401062',
			],
			[
				'vc_parametro_detalle'=>'Intersección mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401063',
			],
			[
				'vc_parametro_detalle'=>'Puente mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401058',
			],
			[
				'vc_parametro_detalle'=>'Viaductos rehabilitados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401056',
			],
			[
				'vc_parametro_detalle'=>'Pasos a nivel con servicio de operación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operación de túneles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401053',
			],
			[
				'vc_parametro_detalle'=>'Servicios a la navegación aérea',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403085',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de investigación con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de activación de redes de atención primaria a víctimas de accidentes e incidentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409019',
			],
			[
				'vc_parametro_detalle'=>'Servicios aeroportuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403086',
			],
			[
				'vc_parametro_detalle'=>'Obras de conectividad construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403087',
			],
			[
				'vc_parametro_detalle'=>'Obras de conectividad mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403088',
			],
			[
				'vc_parametro_detalle'=>'Obras de conectividad mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403089',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409022',
			],
			[
				'vc_parametro_detalle'=>'Obras de conexión entre la red marítima-fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del Registro Nacional Fluvial implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406049',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403090',
			],
			[
				'vc_parametro_detalle'=>'Servicio de sensibilización a los actores viales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409023',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499066',
			],
			[
				'vc_parametro_detalle'=>'Zonas escolares señalizadas y con obras de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409043',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410007',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410008',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410009',
			],
			[
				'vc_parametro_detalle'=>'Material rodante adquirido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408034',
			],
			[
				'vc_parametro_detalle'=>'Estructuras hidráulicas mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405024',
			],
			[
				'vc_parametro_detalle'=>'Embarcadero fluvial instalado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406053',
			],
			[
				'vc_parametro_detalle'=>'Embarcadero fluvial mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406054',
			],
			[
				'vc_parametro_detalle'=>'Dependencias aeronáuticas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409057',
			],
			[
				'vc_parametro_detalle'=>'Servicios a la navegación fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406051',
			],
			[
				'vc_parametro_detalle'=>'Retornos y variantes construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento ambiental a obras de infraestructura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409054',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406050',
			],
			[
				'vc_parametro_detalle'=>'Puentes peatonales rehabilitados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación superior o terciaria para la aviación civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403109',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión del riesgo físico en estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403110',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación superior fortalecidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403111',
			],
			[
				'vc_parametro_detalle'=>'Sedes de instituciones de educación superior o terciaria mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403112',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acondicionamiento de ambientes de aprendizaje',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403113',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación entre la educación superior o terciaria y el sector productivo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403114',
			],
			[
				'vc_parametro_detalle'=>'Túnel habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409047',
			],
			[
				'vc_parametro_detalle'=>'Puente habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409048',
			],
			[
				'vc_parametro_detalle'=>'Puente ampliado o rectificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409049',
			],
			[
				'vc_parametro_detalle'=>'Sitios críticos estabilizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409051',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407010',
			],
			[
				'vc_parametro_detalle'=>'Puente peatonal con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402120',
			],
			[
				'vc_parametro_detalle'=>'Andenes de la red urbana construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408029',
			],
			[
				'vc_parametro_detalle'=>'Andenes de la red urbana rehabilitados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408030',
			],
			[
				'vc_parametro_detalle'=>'Andén de la red primaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401069',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la seguridad aérea del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la facilitación aeroportuaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control a la cadena de logística de transporte de mercancias peligrosas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409028',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia a los proveedores de servicios de Seguridad Operacional y de Aviación Civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación a los proveedores de servicios de Seguridad Operacional y de Aviación Civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de verificación y validación de la condición psicofísica del personal aeronáutico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control y seguimiento a recomendaciones emanadas de investigaciones de accidentes e incidentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación a productos aeronáuticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de licencias aeronáuticas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de verificación y validación de la condición técnico operacional del personal aeronáutico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la definición de indicadores de rendimiento de seguridad operacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409037',
			],
			[
				'vc_parametro_detalle'=>'Servicios de atención psicosocial a estudiantes y docentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403106',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión educativa ofrecida por el  Centro de Estudios Aeronáuticos actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403107',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión educativa ofrecida por el  Centro de Estudios Aeronáuticos implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403108',
			],
			[
				'vc_parametro_detalle'=>'Puentes peatonales construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en navegación aérea y servicios  aeroportuarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403117',
			],
			[
				'vc_parametro_detalle'=>'Dependencias aeronáuticas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403118',
			],
			[
				'vc_parametro_detalle'=>'Dependencias aeronáuticas mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403119',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia administrativa y financiera a los proveedores de servicios de Seguridad Operacional y de Aviación Civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de permisos de operación y funcionamiento a los proveedores de servicios de aviación civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de supervisión en el cumplimiento de los requisitos en el sector transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operación de muelles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de operación de transbordadores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección de transporte fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406036',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406038',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406040',
			],
			[
				'vc_parametro_detalle'=>'Corredores logísticos operando',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407001',
			],
			[
				'vc_parametro_detalle'=>'Plataformas logísticas operando',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407002',
			],
			[
				'vc_parametro_detalle'=>'Centro de atención fronterizo y de comercio internacional construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en temas de logística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la modernización del parque automotor de carga',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2407009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte público organizado implementados (SITM. SITP. SETP, SITR)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408001',
			],
			[
				'vc_parametro_detalle'=>'Portales construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408002',
			],
			[
				'vc_parametro_detalle'=>'Estaciones construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408003',
			],
			[
				'vc_parametro_detalle'=>'Espacios dedicados a la intermodalidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408004',
			],
			[
				'vc_parametro_detalle'=>'Obras complementarias para la seguridad vial en el transporte público organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408008',
			],
			[
				'vc_parametro_detalle'=>'Ciclo parqueaderos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408018',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Auditorías de Seguridad Vial a sistemas de transporte público organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Auditorías de Seguridad Vial a sistemas de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de sensibilización a usuarios de los sistemas de transporte, en relación con la seguridad al desplazarse',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409002',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura de transporte para la seguridad vial mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409003',
			],
			[
				'vc_parametro_detalle'=>'Seguimiento y control a la operación de los sistemas de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en seguridad en Servicio de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en temas de seguridad de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y difusión para la seguridad de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control a la seguridad vial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409011',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409012',
			],
			[
				'vc_parametro_detalle'=>'Cruce a desnivel construido en la red férrea existente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404011',
			],
			[
				'vc_parametro_detalle'=>'Túnel férreo rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404015',
			],
			[
				'vc_parametro_detalle'=>'Malecones construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406011',
			],
			[
				'vc_parametro_detalle'=>'Señalización física mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406028',
			],
			[
				'vc_parametro_detalle'=>'Obra de mitigación y/o compensación socio ambiental realizada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406029',
			],
			[
				'vc_parametro_detalle'=>'Sedes de control de tráfico en funcionamiento (unidad)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406030',
			],
			[
				'vc_parametro_detalle'=>'Sedes de control de tráfico construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406031',
			],
			[
				'vc_parametro_detalle'=>'Sedes de control de tráfico mantenidas (unidad)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406032',
			],
			[
				'vc_parametro_detalle'=>'Obra de mitigación y/o compensación socio ambiental realizada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406013',
			],
			[
				'vc_parametro_detalle'=>'Zonas de uso público de malecón mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406014',
			],
			[
				'vc_parametro_detalle'=>'Obra de protección construidas en malecón',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406015',
			],
			[
				'vc_parametro_detalle'=>'Obra de protección mejorada en malecón',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406016',
			],
			[
				'vc_parametro_detalle'=>'Malecones mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406019',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable Mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406022',
			],
			[
				'vc_parametro_detalle'=>'Obras de adecuación para mejoramiento de canal fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406023',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable con señalización física',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406024',
			],
			[
				'vc_parametro_detalle'=>'Obra de mitigación y/o compensación socio ambiental realizada en canal fluvial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406025',
			],
			[
				'vc_parametro_detalle'=>'Sistema de Señalización Satelital implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406026',
			],
			[
				'vc_parametro_detalle'=>'Corredor férreo atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404024',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea atendida en emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404025',
			],
			[
				'vc_parametro_detalle'=>'Puente férreo habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404026',
			],
			[
				'vc_parametro_detalle'=>'Puente férreo rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405016',
			],
			[
				'vc_parametro_detalle'=>'Muelle fluvial construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406001',
			],
			[
				'vc_parametro_detalle'=>'Zonas de uso público en muelles fluviales mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406003',
			],
			[
				'vc_parametro_detalle'=>'Obras de protección construidas en muelles fluviales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406004',
			],
			[
				'vc_parametro_detalle'=>'Obra de protección mejorada en muelles fluviales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406005',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico de vía férrea atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404027',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura complementaria requerida para la red férrea',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404028',
			],
			[
				'vc_parametro_detalle'=>'Estaciones férreas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404029',
			],
			[
				'vc_parametro_detalle'=>'Estaciones férreas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404030',
			],
			[
				'vc_parametro_detalle'=>'Estaciones férreas con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404031',
			],
			[
				'vc_parametro_detalle'=>'Anexidades construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404032',
			],
			[
				'vc_parametro_detalle'=>'Anexidades adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404033',
			],
			[
				'vc_parametro_detalle'=>'Anexidades mantenidas y conservadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404034',
			],
			[
				'vc_parametro_detalle'=>'Anexidades mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404035',
			],
			[
				'vc_parametro_detalle'=>'Bienes de la red férrea declarados de Interés Cultural restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404036',
			],
			[
				'vc_parametro_detalle'=>'Anexidades rehabilitadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404037',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404040',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404041',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404042',
			],
			[
				'vc_parametro_detalle'=>'Material Rodante',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404043',
			],
			[
				'vc_parametro_detalle'=>'Canales de acceso público mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405001',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405002',
			],
			[
				'vc_parametro_detalle'=>'Estructuras hidráulicas del canal de acceso construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405003',
			],
			[
				'vc_parametro_detalle'=>'Canales de acceso público mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405004',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405005',
			],
			[
				'vc_parametro_detalle'=>'Estructuras hidráulicas del canal de acceso mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405006',
			],
			[
				'vc_parametro_detalle'=>'Obras de protección de la zona costera construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405008',
			],
			[
				'vc_parametro_detalle'=>'Obras de protección de la zona costera mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405009',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico de vía férrea estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404018',
			],
			[
				'vc_parametro_detalle'=>'Corredor férreo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404019',
			],
			[
				'vc_parametro_detalle'=>'Vía férrea mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404020',
			],
			[
				'vc_parametro_detalle'=>'Puente férreo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404021',
			],
			[
				'vc_parametro_detalle'=>'Puente férreo mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404010',
			],
			[
				'vc_parametro_detalle'=>'Puente férreo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404004',
			],
			[
				'vc_parametro_detalle'=>'Cruce a desnivel construido en la red férrea nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404007',
			],
			[
				'vc_parametro_detalle'=>'Variantes construidas en la red férrea',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404006',
			],
			[
				'vc_parametro_detalle'=>'Túnel férreo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas aeronáuticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en temas aeronáuticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para acceso a educación superior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403044',
			],
			[
				'vc_parametro_detalle'=>'Aeropuertos con servicio de Sanidad Aeroportuaria implementada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403046',
			],
			[
				'vc_parametro_detalle'=>'Aeródromos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403049',
			],
			[
				'vc_parametro_detalle'=>'Aeródromos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403050',
			],
			[
				'vc_parametro_detalle'=>'Pista aérea para aeródromo construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403051',
			],
			[
				'vc_parametro_detalle'=>'Calle de rodaje para aeródromo construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403052',
			],
			[
				'vc_parametro_detalle'=>'Zonas de seguridad para aeródromo construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403053',
			],
			[
				'vc_parametro_detalle'=>'Zonas de seguridad para aeródromo ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403054',
			],
			[
				'vc_parametro_detalle'=>'Hangar para aeródromo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403055',
			],
			[
				'vc_parametro_detalle'=>'Cerramiento para aeródromo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403056',
			],
			[
				'vc_parametro_detalle'=>'Plataforma para aeródromo construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403057',
			],
			[
				'vc_parametro_detalle'=>'Pista aérea para aeródromo ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403058',
			],
			[
				'vc_parametro_detalle'=>'Calle de rodaje para aeródromo ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403059',
			],
			[
				'vc_parametro_detalle'=>'Torre de control para aeródromo adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403060',
			],
			[
				'vc_parametro_detalle'=>'Plataforma para aeródromo ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403061',
			],
			[
				'vc_parametro_detalle'=>'Aeródromos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403062',
			],
			[
				'vc_parametro_detalle'=>'Helipuertos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403070',
			],
			[
				'vc_parametro_detalle'=>'Helipuertos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403071',
			],
			[
				'vc_parametro_detalle'=>'Zonas de seguridad para helipuerto construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403072',
			],
			[
				'vc_parametro_detalle'=>'Plataforma para helipuerto ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403073',
			],
			[
				'vc_parametro_detalle'=>'Cerramiento para helipuerto mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403074',
			],
			[
				'vc_parametro_detalle'=>'Helipuertos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403075',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403079',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403080',
			],
			[
				'vc_parametro_detalle'=>'Terminales de transporte construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402110',
			],
			[
				'vc_parametro_detalle'=>'Terminales de transporte mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402111',
			],
			[
				'vc_parametro_detalle'=>'Aeropuertos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403001',
			],
			[
				'vc_parametro_detalle'=>'Zonas ribereñas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402095',
			],
			[
				'vc_parametro_detalle'=>'Puente de vía terciaria atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402097',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico de la red terciaria estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402098',
			],
			[
				'vc_parametro_detalle'=>'Puente de vía urbana atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402100',
			],
			[
				'vc_parametro_detalle'=>'Túnel peatonal construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402091',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico de la red urbana estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402101',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402103',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402104',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402105',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de asuntos de política y técnicos referentes a la red vial regional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402106',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en infraestructura y Servicio de la red vial regional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402107',
			],
			[
				'vc_parametro_detalle'=>'Aeropuertos con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403025',
			],
			[
				'vc_parametro_detalle'=>'Pista aérea mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403026',
			],
			[
				'vc_parametro_detalle'=>'Calle de rodaje mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403027',
			],
			[
				'vc_parametro_detalle'=>'Zonas de seguridad mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403028',
			],
			[
				'vc_parametro_detalle'=>'Torre de control mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403030',
			],
			[
				'vc_parametro_detalle'=>'Plataforma mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403031',
			],
			[
				'vc_parametro_detalle'=>'Obras complementarias mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403032',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403039',
			],
			[
				'vc_parametro_detalle'=>'Puente binacional construido en vía primaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401005',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido en vía primaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401007',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido para el mejoramiento de vías primarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401019',
			],
			[
				'vc_parametro_detalle'=>'Puente habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401027',
			],
			[
				'vc_parametro_detalle'=>'Túnel con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401025',
			],
			[
				'vc_parametro_detalle'=>'Puente con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401024',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido en vía secundaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de asuntos de política y técnicos referentes a la red vial primaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401048',
			],
			[
				'vc_parametro_detalle'=>'Estación de peaje construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401031',
			],
			[
				'vc_parametro_detalle'=>'Estación de peaje adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401032',
			],
			[
				'vc_parametro_detalle'=>'Peaje con servicio de administración',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401033',
			],
			[
				'vc_parametro_detalle'=>'Túnel habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401028',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401029',
			],
			[
				'vc_parametro_detalle'=>'Puente peatonal construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401039',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401042',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401043',
			],
			[
				'vc_parametro_detalle'=>'Puente de vía secundaria rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402019',
			],
			[
				'vc_parametro_detalle'=>'Túnel construido en vía secundaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402003',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía secundaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402004',
			],
			[
				'vc_parametro_detalle'=>'Túnel ampliado en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402014',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402015',
			],
			[
				'vc_parametro_detalle'=>'Puente ampliado o rectificado en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402016',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido para el mejoramiento de vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402017',
			],
			[
				'vc_parametro_detalle'=>'Viaducto ampliado o rectificado en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402012',
			],
			[
				'vc_parametro_detalle'=>'Túnel construido en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402013',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido en vía secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402011',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico de la red vial secundaria estabilizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402038',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía terciaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402040',
			],
			[
				'vc_parametro_detalle'=>'Túnel de la red vial secundaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402023',
			],
			[
				'vc_parametro_detalle'=>'Puente de la red vial secundaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402036',
			],
			[
				'vc_parametro_detalle'=>'Túnel de la red vial secundaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402037',
			],
			[
				'vc_parametro_detalle'=>'Estación de peaje construida en la red vial secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402025',
			],
			[
				'vc_parametro_detalle'=>'Estación de peaje adecuada en la red vial secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402026',
			],
			[
				'vc_parametro_detalle'=>'Peaje de la red vial secundaria con servicio de administración',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402027',
			],
			[
				'vc_parametro_detalle'=>'Puente de la red vial secundaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402022',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido en vía secundaria nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402005',
			],
			[
				'vc_parametro_detalle'=>'Túnel de vía secundaria rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402020',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402044',
			],
			[
				'vc_parametro_detalle'=>'Puente de la red vial terciaria rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402046',
			],
			[
				'vc_parametro_detalle'=>'Puente en caminos ancestrales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402057',
			],
			[
				'vc_parametro_detalle'=>'Puente peatonal de la red terciaria construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402051',
			],
			[
				'vc_parametro_detalle'=>'Puente de la red vial terciaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402048',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido en vía urbana nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402059',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía urbana nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402061',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402062',
			],
			[
				'vc_parametro_detalle'=>'Viaducto ampliado o rectificado en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402069',
			],
			[
				'vc_parametro_detalle'=>'Paso deprimido construido en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402070',
			],
			[
				'vc_parametro_detalle'=>'Paso deprimido de vía urbana ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402071',
			],
			[
				'vc_parametro_detalle'=>'Paso elevado construido en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402072',
			],
			[
				'vc_parametro_detalle'=>'Paso elevado de vía urbana ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402073',
			],
			[
				'vc_parametro_detalle'=>'Puente ampliado o rectificado en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402075',
			],
			[
				'vc_parametro_detalle'=>'Intercambiador construido en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402076',
			],
			[
				'vc_parametro_detalle'=>'Sitio crítico estabilizado en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402077',
			],
			[
				'vc_parametro_detalle'=>'Viaducto construido en vía urbana existente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402068',
			],
			[
				'vc_parametro_detalle'=>'Puente de vía urbana rehabilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402079',
			],
			[
				'vc_parametro_detalle'=>'Paso deprimido rehabilitado en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402080',
			],
			[
				'vc_parametro_detalle'=>'Paso elevado rehabilitado en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402081',
			],
			[
				'vc_parametro_detalle'=>'Puente de la red vial urbana con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402083',
			],
			[
				'vc_parametro_detalle'=>'Paso deprimido en vía urbana con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402084',
			],
			[
				'vc_parametro_detalle'=>'Paso elevado en vía urbana con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402085',
			],
			[
				'vc_parametro_detalle'=>'Muelle fluvial atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406043',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499044',
			],
			[
				'vc_parametro_detalle'=>'Canal navegable atendido por emergencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la implementación de sistemas de transporte público de pasajeros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408022',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401052',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión para la red vial regional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402118',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403084',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404044',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2405017',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406047',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408024',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409016',
			],
			[
				'vc_parametro_detalle'=>'Puente construido en vía urbana existente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402119',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de investigación construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499060',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499016',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409014',
			],
			[
				'vc_parametro_detalle'=>'Paso deprimido construido en vía urbana nueva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402060',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406041',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410006',
			],
			[
				'vc_parametro_detalle'=>'Túnel férreo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2404022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración vial en vías primarias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401054',
			],
			[
				'vc_parametro_detalle'=>'Servicio a la navegacion aérea a baja altura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2403115',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2499067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención integral a víctimas directas e indirectas de accidentes e incidentes de transporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2409024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control sobre la red fluvial navegable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2406033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión y divulgación de la normatividad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2410001',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401037',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2401038',
			],
			[
				'vc_parametro_detalle'=>'Andén de la red terciaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402052',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura construida en red vial terciaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402053',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura de la red terciaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402054',
			],
			[
				'vc_parametro_detalle'=>'Placa huella construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402042',
			],
			[
				'vc_parametro_detalle'=>'Puente peatonal de la red secundaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402031',
			],
			[
				'vc_parametro_detalle'=>'Andén de la red secundaria habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402032',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura construida en red vial secundaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402033',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura de la redsecundaria con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402034',
			],
			[
				'vc_parametro_detalle'=>'Andén de la red urbana habilitado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402092',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura construida en vía urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402093',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura urbana con mantenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2402094',
			],
			[
				'vc_parametro_detalle'=>'Andenes de la red urbana mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408015',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura construida para la integración del servicio público de transporte organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408009',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura para la integración del servicio público de transporte organizado mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408010',
			],
			[
				'vc_parametro_detalle'=>'Ciclo infraestructura para la integración del servicio público de transporte organizado rehabilitadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408011',
			],
			[
				'vc_parametro_detalle'=>'Vías urbanas construidas para la operación del servicio público de transporte organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408005',
			],
			[
				'vc_parametro_detalle'=>'Vías urbanas mejoradas para la operación del servicio público de transporte organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408006',
			],
			[
				'vc_parametro_detalle'=>'Vías urbanas rehabilitadas para la operación del servicio público de transporte organizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2408007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de jurisdicción coactiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501010',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información actualizado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento de políticas publicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control fiscal micro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control fiscal macro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501013',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en áreas relacionadas con el control fiscal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501018',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501019',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501020',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599066',
			],
			[
				'vc_parametro_detalle'=>'Servicio para tramitar quejas y denuncias ciudadanas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de advertencia y seguimiento a los riesgos de vulneración de los Derechos Humanos, el Derecho Internacional Humanitario y en los escenarios de paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para atención, orientación y asesoría en materia de Derechos Humanos, el Derecho Internacional Humanitario y en escenarios de paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en materia de Derechos Humanos y Derecho Internacional Humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de los derechos humanos y del derecho internacional humanitario de la población',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502007',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502008',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502009',
			],
			[
				'vc_parametro_detalle'=>'Servicio información para la toma de decisiones en derechos humanos y derecho internacional humanitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502010',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en materia de transparencia y acceso a la información pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de lucha contra la corrupción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la difusión de la cultura de legalidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en materia de cultura de legalidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en las áreas jurídica/profesional, técnica y talento humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en temas de lucha contra la corrupción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503008',
			],
			[
				'vc_parametro_detalle'=>'Servicio para fortalecer las capacidades en temas de lucha contra la corrupción',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2503009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal de la cultura de la legalidad y la integridad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en vigilancia y monitoreo a la gestión administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación disciplinaria para los funcionarios públicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504005',
			],
			[
				'vc_parametro_detalle'=>'Servicio para tramitar quejas interpuestas por posibles faltas cometidas por funcionarios públicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de control y vigilancia fiscal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control fiscal participativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para fortalecer la imagen de control fiscal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación en el proceso de responsabilidad fiscal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2501009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Seguimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2502011',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de estrategias para la vigilancia y monitoreoa la gestión pública',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el ejercicio del control público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de comunicación e interacción con la ciudadanía para el control público',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504009',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504010',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2504011',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599060',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599061',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2599065',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de procesos judiciales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de cobro coactivo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de Registro Nacional de Abogados.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de gestión de jurisprudencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de la especialidadde tierras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701006',
			],
			[
				'vc_parametro_detalle'=>'Sistema de información de seguimiento de control de penas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de grabación de audiencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701008',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799064',
			],
			[
				'vc_parametro_detalle'=>'Palacios de justicia construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701012',
			],
			[
				'vc_parametro_detalle'=>'Palacios de justicia adecuados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701013',
			],
			[
				'vc_parametro_detalle'=>'Palacios de justicia modificados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701014',
			],
			[
				'vc_parametro_detalle'=>'Palacios de justicia ampliados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701015',
			],
			[
				'vc_parametro_detalle'=>'Palacios de justicia restaurados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701016',
			],
			[
				'vc_parametro_detalle'=>'Palacios de Justicia con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701017',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701018',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales adecuados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701019',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales modificados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701020',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales ampliados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701021',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales restaurados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701022',
			],
			[
				'vc_parametro_detalle'=>'Despachos judiciales con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701023',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701024',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia adecuadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701025',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia modificadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701026',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia ampliadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701027',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia restauradas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701028',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencia con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701029',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención judicial construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701030',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención adecuada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701031',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención modificada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701032',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención ampliada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701033',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención restaurada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701034',
			],
			[
				'vc_parametro_detalle'=>'Unidad básica de atención con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701035',
			],
			[
				'vc_parametro_detalle'=>'Centro de servicio construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701036',
			],
			[
				'vc_parametro_detalle'=>'Centros de servicios adecuados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701037',
			],
			[
				'vc_parametro_detalle'=>'Centros de servicios modificados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701038',
			],
			[
				'vc_parametro_detalle'=>'Centros de servicios ampliados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701039',
			],
			[
				'vc_parametro_detalle'=>'Centros de servicios restaurados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701040',
			],
			[
				'vc_parametro_detalle'=>'Centros de servicios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de procesamiento de información jurisprudencial, normativa y doctrinaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701042',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación y publicación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701043',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conformación de registros de elegibles de la rama judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701050',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en competencias judiciales y gerenciales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de licencias, tarjeta profesional y carnets',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701045',
			],
			[
				'vc_parametro_detalle'=>'Documento de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión digital de procesos judiciales digitales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en la gestión Judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a la administración de justicia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación informal para aspirantes a servidores judiciales.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701001',
			],
			[
				'vc_parametro_detalle'=>'Licencia y tarjeta profesional expedida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701002',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información Doctrinario y Normativo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2701004',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799060',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2799065',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899061',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en fomento del Registro Civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia móvil para la identificación de los colombianos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802003',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en valores democráticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de procesos electorales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de organización de procesos electorales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de procesos electorales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2801006',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899063',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2899066',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos del Archivo Nacional de Identificación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802007',
			],
			[
				'vc_parametro_detalle'=>'Documento de Identidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802004',
			],
			[
				'vc_parametro_detalle'=>'Base de datos de registro civil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802005',
			],
			[
				'vc_parametro_detalle'=>'Servicio tecnológicos para la producción de documentos de identificación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2802001',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999054',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999009',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999066',
			],
			[
				'vc_parametro_detalle'=>'Salas de monitoreo adecuada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901017',
			],
			[
				'vc_parametro_detalle'=>'Unidad de investigación ambiental adecuada y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901018',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de genética forense en filiación de menores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901019',
			],
			[
				'vc_parametro_detalle'=>'Servicios de valoración del riesgo de feminicidio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901020',
			],
			[
				'vc_parametro_detalle'=>'Servicio forense en lesiones no fatales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901022',
			],
			[
				'vc_parametro_detalle'=>'Documento de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de valoración de personas privadas de la libertad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901024',
			],
			[
				'vc_parametro_detalle'=>'Servicios forenses ajustados a estándares de calidad nacional e internacional.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901001',
			],
			[
				'vc_parametro_detalle'=>'Servicios de laboratorio forense',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901002',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio forense dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Investigación penal, criminalística y medicina legal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de genética forense',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901007',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901008',
			],
			[
				'vc_parametro_detalle'=>'Salas de necropsia dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901010',
			],
			[
				'vc_parametro_detalle'=>'Certificaciones otorgadas a peritos forenses',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acreditación de organismo de evaluación y certificación de peritos forenses en Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación de cadaveres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificación de cadaveres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de entrega de cadaveres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la formulación de proyectos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2901016',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999055',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999056',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999057',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999058',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999065',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'2999067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de restauración ecológica de ecosistemas marino costeros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de erradicación de cultivos ilícitos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelamiento para la conservación de la biodiversidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración y manejo de áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección de ecosistemas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de restauración de ecosistemas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de reforestación de ecosistemas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202006',
			],
			[
				'vc_parametro_detalle'=>'Servicio apoyo financiero para la implementación de esquemas de pago por Servicio ambientales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202017',
			],
			[
				'vc_parametro_detalle'=>'Servicio declaración de áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de rehabilitación de ecosistemas con especies forestales dendroenergeticas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206013',
			],
			[
				'vc_parametro_detalle'=>'Obras para la prevención y control de movimientos en masa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205018',
			],
			[
				'vc_parametro_detalle'=>'Obras para el control y reducción de la erosión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación de cuerpos de agua lénticos y lóticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202037',
			],
			[
				'vc_parametro_detalle'=>'Obras para reducir el riesgo de avenidas torrenciales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevención, vigilancia y control de las áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202032',
			],
			[
				'vc_parametro_detalle'=>'Gaviones construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207012',
			],
			[
				'vc_parametro_detalle'=>'Diques construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207013',
			],
			[
				'vc_parametro_detalle'=>'Espolones construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207014',
			],
			[
				'vc_parametro_detalle'=>'Tajamares construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207015',
			],
			[
				'vc_parametro_detalle'=>'Barreras rompe vientos recuperadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de delimitación de rondas hídricas.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203044',
			],
			[
				'vc_parametro_detalle'=>'Obras y medidas de adecuación hidráulica.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203047',
			],
			[
				'vc_parametro_detalle'=>'Obras de recarga artificial de acuíferos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203043',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299061',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dragado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dragado.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203046',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en planificación y gestión ambiental.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205022',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política para la gestión de  la información y el conocimiento  ambiental  ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión del conocimiento  ambiental implementado ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204055',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos para el sistema de información ambiental ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en el marco de la conservación de la biodiversidad, el manejo y uso sostenible de los ecosistemas marino-costeros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos de inversión ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a las entidades del sector ambiental en el marco de la compensación ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la protección de la fauna y flora silvestre',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202040',
			],
			[
				'vc_parametro_detalle'=>'Estaciones hidrológicas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203014',
			],
			[
				'vc_parametro_detalle'=>'Estaciones hidrológicas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203015',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203016',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203017',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de monitoreo de agua subterránea construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203018',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación para la gestión integral del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política para la gestión integral del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203003',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos para la gestión integral del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos regionales sobre recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica relacionado con calidad, uso y planificación del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo hidrológico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de caracterización de la calidad del agua',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelación hidráulica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelación hidrológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelación de calidad del agua y de sedimentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y socialización ambiental en el marco del ordenamiento ambiental territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de generación de alertas tempranas para la gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de autorización de comercio internacional de especies amenazadas de fauna y flora silvestres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en el marco de la conservación de la biodiversidad y los Servicio ecostémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202014',
			],
			[
				'vc_parametro_detalle'=>'Cartografía de las áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de ecoturismo en las áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control y vigilancia al tráfico ilegal de especies',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202007',
			],
			[
				'vc_parametro_detalle'=>'Cartografía ambiental temática',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de zonificación ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de manejo de datos hidrometeorológicos y de calidad del agua',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203023',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203024',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203025',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios mejorados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203026',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para la conservación de la biodiversidad y sus servicios eco sistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación para la conservación de la biodiversidad y sus servicios eco sistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política para la conservación de la biodiversidad y sus servicio eco sistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación para la conservación de la biodiversidad y sus servicios eco sistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202004',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202019',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202020',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202021',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202022',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre modificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202023',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de fauna silvestre con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202024',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de flora silvestre construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202025',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención y Valoración de flora silvestre construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202026',
			],
			[
				'vc_parametro_detalle'=>'Centro de atención e interpretación de la biodiversidad y sus servicios ecosistemicos construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202027',
			],
			[
				'vc_parametro_detalle'=>'Centro de Atención e interpretación de la biodiversidad y sus servicios ecosistemicos adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202028',
			],
			[
				'vc_parametro_detalle'=>'Centro de atención e interpretación de la biodiversidad y sus servicios ecosistemicos construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202029',
			],
			[
				'vc_parametro_detalle'=>'Centros de atención de las áreas protegidas construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202030',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política para el fortalecimiento del desempeño ambiental de los sectores productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para el fortalecimiento del desempeño ambiental de los sectores productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la consolidación de negocios verdes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el marco de la formulación e implementación de proyectos demostrativos para la reducción de impactos ambientales de la minería',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos para el fortalecimiento del desempeño ambiental de los sectores productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201005',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos para el fortalecimiento del desempeño ambiental de los sectores productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la incorporación de varibales ambientales en la planificación sectorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia de la calidad del aire',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento y evaluación de los programas de recolección de residuos pos consumo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la incorporación de consideraciones ambientales en la planificación sectorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201010',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para el ordenamiento ambiental territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos para el ordenamiento ambiental territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico para lainternacionalización de la educación ambiental y la participación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de lasestrategias educativo ambientales y de participación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico a proyectos de educación ambiental y participación con enfoque diferencial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la información de la política nacional de educación ambiental y participación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación para la gestión de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204001',
			],
			[
				'vc_parametro_detalle'=>'Documentos diagnóstico para la gestión de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204002',
			],
			[
				'vc_parametro_detalle'=>'Documento de estudios técnicos para la gestión de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicospara la gestión de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para la gestión del cambio climático y un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico para la implementación de acciones de mitigación y adaptación al cambio climático',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la información en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para la gestión integral de mares, costas y recursos acuáticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos para la gestión integral de mares, costas y recursos acuáticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación para la gestión integral de mares, costas y recursos acuáticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación para la gestión integral de mares, costas y recursos acuáticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207004',
			],
			[
				'vc_parametro_detalle'=>'Cartografía para la zonificación costera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo de la biodiversidad y los Servicio eco sistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo hidrológico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo meteorológico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo sobre meteorología aeronáutica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en biodiversidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información sobre deforestación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información hidrológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información hidrogeológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información meteorológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en ciencias marinas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Información Ambiental Marina',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204027',
			],
			[
				'vc_parametro_detalle'=>'Inventario de fauna',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204028',
			],
			[
				'vc_parametro_detalle'=>'Inventario de flora',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204029',
			],
			[
				'vc_parametro_detalle'=>'Inventario forestal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204030',
			],
			[
				'vc_parametro_detalle'=>'Inventario de recursos naturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204031',
			],
			[
				'vc_parametro_detalle'=>'Colecciones biológicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204032',
			],
			[
				'vc_parametro_detalle'=>'Bases de datos de monitoreo ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204033',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de investigación mejoradas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204034',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204035',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios mejorados y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204036',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204037',
			],
			[
				'vc_parametro_detalle'=>'Laboratorios construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204038',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204039',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a emprendimientos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la generación de cadenas productivas sostenibles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control de especies invasoras y exóticas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en tiempo real de pronósticos y alertas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acreditación de laboratorios y organizaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información ambiental de la Amazonía colombiana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección del conocimiento tradicional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal en el marco de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en el marco de la información y el conocimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204011',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para la gestión integral del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación para la gestión del cambio climático y un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el ordenamiento ambiental de las zonas litorales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación de alianzas nacionales para el desarrollo de la política nacional ambiental y la participación en la gestión ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la calidad de la educación ambiental en la educación superior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3208002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en cultura y participación para la gestión ambiental y territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204025',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204041',
			],
			[
				'vc_parametro_detalle'=>'Estaciones meteorológicas mejoradas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificaciónde sitios generadores de gases efecto invernadero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de plántulas en viveros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206014',
			],
			[
				'vc_parametro_detalle'=>'Estufas ecoeficientes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento de la biodiversidad y los servicios ecosistémicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204053',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para el seguimiento a los compromisos en cambio climático de Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206011',
			],
			[
				'vc_parametro_detalle'=>'Obras de infraestructura para mitigación y atención a desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento y control a usuarios del recurso hídrico.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203045',
			],
			[
				'vc_parametro_detalle'=>'Laboratorio de calidad ambiental acreditado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204052',
			],
			[
				'vc_parametro_detalle'=>'Documento de la fase de aprestamiento del plan de ordenación y manejo de cuenca hidrográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203038',
			],
			[
				'vc_parametro_detalle'=>'Documento de la fase de diagnóstico del plan de ordenación y manejo de cuenca hidrográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203039',
			],
			[
				'vc_parametro_detalle'=>'Documento de la fase de prospectiva y zonificación ambiental del plan de ordenación y manejo de cuenca hidrográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203040',
			],
			[
				'vc_parametro_detalle'=>'Documento de la fase de formulación del plan de ordenación y manejo de cuenca hidrográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203041',
			],
			[
				'vc_parametro_detalle'=>'Documento del plan de ordenación y manejo de cuenca hidrográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de datos climáticos y monitoreo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de herramientas nacionales de comunicación, divulgación y cualificación de actores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de estrategias sobre la efectiva gobernanza del agua',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203037',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política para mejorar la calidad ambiental de las áreas urbanas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para mejorar la calidad ambiental de las áreas urbanas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201013',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos para promover la gestión sostenible del suelo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos parapromover la gestión sostenible del suelo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación para la gestión del cambio climático en la toma de decisiones sectoriales y territoriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal en gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3206008',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento hidrometeorológico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204051',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos para la planificación sectorial y la gestión ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administracion de los sistemas de información para los procesos de toma de decisiones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación deconocimiento generado para la Planificación sectorial y la gestión ambiental.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelación hidrodinámica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3204050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación institucional para el manejo marino, costero e insular colombiano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3207017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de plántulas en viveros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación y seguimiento para el licenciamiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de evaluación y seguimiento de permisos y trámites ambientales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de modelación regional de medios biótico, abiótico y social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información ambiental georreferenciada del proceso de evaluación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información ambiental georreferenciada del proceso de seguimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201020',
			],
			[
				'vc_parametro_detalle'=>'Documentos de instrumentos técnicos de evaluación y seguimiento ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201021',
			],
			[
				'vc_parametro_detalle'=>'Servicio sancionatorio ambiental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3201022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación sistemas de gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299063',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la gestión administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299058',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299056',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la operación de las Mesas Técnicas en el marco de los Consejos Ambientales Regionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de lineamientos priorizados de los Planes Estratégicos de las Macrocuencas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203028',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura ecoturística construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202033',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura construida para la administración, la vigilancia y el control de las áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a los procesos de ordenación y manejo de cuencas hidrográficas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la coordinación de las autoridades ambientales en la gestión de las aguas subterráneas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de lineamientos priorizados de las Aguas Subterráneas del País',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la promoción del uso eficiente y ahorro del agua',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de lineamientos sobre el mejoramiento de la calidad del recurso hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203034',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos con acuerdos de uso, ocupación y tenencia en las áreas protegidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3202031',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299016',
			],
			[
				'vc_parametro_detalle'=>'Obras para el control de erosión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos hidrológicos e hidrogeológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de estudios técnicos geológicos y geotécnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205016',
			],
			[
				'vc_parametro_detalle'=>'Documentos con diseños de obra para la reducción y mitigación del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205017',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3299065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de mecanismos y herramientas de conocimiento y manejo de la información para la Gestión Integral del Recurso Hídrico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3203035',
			],
			[
				'vc_parametro_detalle'=>'Obras para estabilización de taludes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205010',
			],
			[
				'vc_parametro_detalle'=>'Obras para la prevención y control de inundaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de dragado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3205008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos de gestión documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302046',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399052',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399010',
			],
			[
				'vc_parametro_detalle'=>'Serviciode divulgación y publicación del Patrimonio cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302070',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al sector museos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302069',
			],
			[
				'vc_parametro_detalle'=>'Centro musicales dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301101',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación formal de posgrado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302067',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de contenidos en radio emisora virtual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302068',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399065',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301102',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301103',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301104',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica modificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301105',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica restaurado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301106',
			],
			[
				'vc_parametro_detalle'=>'Centro de producción y posproducción cinematográfica con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301107',
			],
			[
				'vc_parametro_detalle'=>'Salas de cine construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301108',
			],
			[
				'vc_parametro_detalle'=>'Salas de cine ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301109',
			],
			[
				'vc_parametro_detalle'=>'Salas de cine adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301110',
			],
			[
				'vc_parametro_detalle'=>'Salas de cine modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301111',
			],
			[
				'vc_parametro_detalle'=>'Salas de cine con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301112',
			],
			[
				'vc_parametro_detalle'=>'Centros de preservación y conservación audiovisual construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301113',
			],
			[
				'vc_parametro_detalle'=>'Centros de preservación y conservación audiovsual adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301114',
			],
			[
				'vc_parametro_detalle'=>'Centros de preservación y conservación audiovsual modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301115',
			],
			[
				'vc_parametro_detalle'=>'Centros de preservación y conservación audiovsual restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301116',
			],
			[
				'vc_parametro_detalle'=>'Centros de preservación y conservación audiovsual con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301117',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero a la producción y coproducción cinematográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301118',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica a la producción y la coproducción cinematográfica en Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301119',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la circulación cinematográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301120',
			],
			[
				'vc_parametro_detalle'=>'Servicios de circulación artística y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301121',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para el acceso de la oferta cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301122',
			],
			[
				'vc_parametro_detalle'=>'Servicio de clasificación de producciones cinematográficas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301123',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de Colombia como escenario de rodaje de películas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301124',
			],
			[
				'vc_parametro_detalle'=>'Servicios de promoción del cine colombiano en el extranjero',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301125',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo al proceso de formación artística y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301126',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión elaborados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302072',
			],
			[
				'vc_parametro_detalle'=>'Servicios de restauración del patrimonio cultural material inmueble',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de documentos del Estado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302071',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301001',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301002',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301003',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301004',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301005',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301006',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301007',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301008',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301009',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de preservación de los parques y áreas arqueológicaspatrimoniales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de museología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302031',
			],
			[
				'vc_parametro_detalle'=>'Museos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302034',
			],
			[
				'vc_parametro_detalle'=>'Museosadecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302035',
			],
			[
				'vc_parametro_detalle'=>'Museos modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302036',
			],
			[
				'vc_parametro_detalle'=>'Museos con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en conservación documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo a miembros de apoyo y comunidad académica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal sobre parques arqueológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal sobre museos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en Escuelas Taller',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a Vigías del Patrimonio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a la ciudadanía en asuntos patrimoniales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos de gestión del patrimonio bibliográfico y documental.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos de patrimonio cultural sumergido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al usuario para el acceso a documentos históricos y protocolos notariales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de archivos audiovisualesy sonoros',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301067',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301069',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301070',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de circulación artística y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la organización y la participación del sector artístico, cultural y la ciudadanía',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301074',
			],
			[
				'vc_parametro_detalle'=>'Documentos Investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302002',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de exposiciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación del patrimonio bibliográfico y documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302005',
			],
			[
				'vc_parametro_detalle'=>'Servicios de preservación del patrimonio bibliográfico y documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de preservación de colecciones de material cinematográfico y audiovisual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302007',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301016',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301017',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301018',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301019',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301020',
			],
			[
				'vc_parametro_detalle'=>'Malocas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301021',
			],
			[
				'vc_parametro_detalle'=>'Malocas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301022',
			],
			[
				'vc_parametro_detalle'=>'Malocas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301023',
			],
			[
				'vc_parametro_detalle'=>'Malocas modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301024',
			],
			[
				'vc_parametro_detalle'=>'Malocas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301025',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301026',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301027',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301028',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301029',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301030',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301031',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301032',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301033',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301034',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301035',
			],
			[
				'vc_parametro_detalle'=>'Teatros construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301036',
			],
			[
				'vc_parametro_detalle'=>'Teatros ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301037',
			],
			[
				'vc_parametro_detalle'=>'Teatros adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301038',
			],
			[
				'vc_parametro_detalle'=>'Teatros modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301039',
			],
			[
				'vc_parametro_detalle'=>'Teatros con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301040',
			],
			[
				'vc_parametro_detalle'=>'Museos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301041',
			],
			[
				'vc_parametro_detalle'=>'Museos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301042',
			],
			[
				'vc_parametro_detalle'=>'Museos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301043',
			],
			[
				'vc_parametro_detalle'=>'Museos modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301044',
			],
			[
				'vc_parametro_detalle'=>'Museos con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301045',
			],
			[
				'vc_parametro_detalle'=>'Salón de música construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301046',
			],
			[
				'vc_parametro_detalle'=>'Salón de música ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301047',
			],
			[
				'vc_parametro_detalle'=>'Salón de música adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301048',
			],
			[
				'vc_parametro_detalle'=>'Salón de música modificado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301049',
			],
			[
				'vc_parametro_detalle'=>'Salón de música con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación formal al sector artístico y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de actividades culturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero al sector artístico y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el desarrollo de prácticas artísticas y culturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica al sector cinematográfico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica al sector musical',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistenciatécnica en procesos de comunicación cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el fortalecimiento de los consejeros de cultura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en planeación de reparación colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la viabilización de proyectos de infraestructura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en educación artística y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos de gestión de bibliotecas públicas y lectura.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mantenimiento de infraestructura cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de actividades culturales.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para los museos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302045',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399044',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301093',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de archivo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302063',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301088',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301089',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301090',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301091',
			],
			[
				'vc_parametro_detalle'=>'Centros culturales con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301092',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia y control archivístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302047',
			],
			[
				'vc_parametro_detalle'=>'Servicios de preservación de colecciones de material cinematográfico y audiovisual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de salvaguardia al patrimonio inmaterial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302049',
			],
			[
				'vc_parametro_detalle'=>'Servicios de preservación al patrimonio material mueble',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302050',
			],
			[
				'vc_parametro_detalle'=>'Servicios de intervención al patrimonio material mueble',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos patrimoniales nacionales e internacionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de museología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a la investigación en Antropología, Arqueología, Historia y Patrimonio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302059',
			],
			[
				'vc_parametro_detalle'=>'Museos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de certificaciones para la importación de bienes culturales muebles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en asuntos de gestión del patrimonio bibliográfico y documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302065',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal al sector bibliotecario, del libro y la lectura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para los museos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al usuario para el acceso a documentos históricos y protocolos notariales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso y difusión del patrimonio bibliográfico y documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso a investigaciones sobre antropología, arqueología, historia y patrimonio cultural inmaterial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el sector artístico y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301099',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399053',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399055',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la gestión administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación del Sistema de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399061',
			],
			[
				'vc_parametro_detalle'=>'Estudios y diseños de infraestructura cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301094',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en gestión artística y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301095',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música adecuadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301096',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza adecuadasy dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301097',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso a materiales de lectura',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301098',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y publicaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301100',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal para la promoción y divulgación de la diversidad lingüística y sus medios de expresión y difusión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección del patrimonio arqueologico, antropologico e historico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302041',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el manejo y gestión del patrimonio arqueológico, antropológico e histórico.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302042',
			],
			[
				'vc_parametro_detalle'=>'Monumento histórico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en áreas artísticas y culturales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301087',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399016',
			],
			[
				'vc_parametro_detalle'=>'Bibliotecas construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301075',
			],
			[
				'vc_parametro_detalle'=>'Centros musicales construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301076',
			],
			[
				'vc_parametro_detalle'=>'Casas de la cultura construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301078',
			],
			[
				'vc_parametro_detalle'=>'Malocas construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301079',
			],
			[
				'vc_parametro_detalle'=>'Salas de danza construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301080',
			],
			[
				'vc_parametro_detalle'=>'Escuelas de música construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301081',
			],
			[
				'vc_parametro_detalle'=>'Teatros construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301082',
			],
			[
				'vc_parametro_detalle'=>'Museos construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301083',
			],
			[
				'vc_parametro_detalle'=>'Servicios bibliotecarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal al sector artístico y cultural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301051',
			],
			[
				'vc_parametro_detalle'=>'Salón de música construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301084',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3399064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de recursos en el marco de la Ley de Espectáculos Públicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3301066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del patrimonio bibliográfico y documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3302064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en metrología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502103',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación sobre el sector industrial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503027',
			],
			[
				'vc_parametro_detalle'=>'Documentos investigación sobre el sector artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502109',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro y control de sustancias químicas industriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para facilitar el comercio exterior a través de la Ventanilla Única de Comercio Exterior - VUCE',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3501004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información sobre el sector artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502107',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Registro Único de Facturas Electrónicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502108',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599924',
			],
			[
				'vc_parametro_detalle'=>'Servicio de racionalización de trámites y normatividad para la competitividad empresarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502111',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599926',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502110',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistema de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599925',
			],
			[
				'vc_parametro_detalle'=>'Servicio de comparación y evaluación inter laboratorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de nuevos riesgos societarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la adopción de buenas prácticas de responsabilidad social.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la competitividad turística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la promoción turística nacional e internacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la construcción de infraestructura turística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a los entes territoriales para el desarrollo turístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502039',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la consolidación de la red nacional de protección al consumidor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503008',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos y reglamentarios de información financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en información financiera y herramientas de inclusión financiera',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría jurídica para la solución de controversias derivadas de acuerdos comerciales y de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3501002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la suscripción e implementación de acuerdos comerciales y de inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3501003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento del Subsistema Nacional de Calidad - SICAL',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de capacidades gerenciales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el mejoramiento de productos o procesos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de emparejamiento para el fortalecimiento del mercado nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo y consolidación de las Comisiones Regionales de Competitividad - CRC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de iniciativas clústeres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para mejorar la competitividad de los sectores productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la transferencia y/o implementación de metodologías de aumento de la productividad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para agregar valor a los productos y mejorar los canales de comercialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la formación de capital humano pertinente para el desarrollo empresarial de los territorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la modernización y fomento de la innovación empresarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la mitigación y adaptación al cambio climático de las empresas.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502013',
			],
			[
				'vc_parametro_detalle'=>'Servicio para la simplificación y facilitación de trámites para la creación de empresa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502014',
			],
			[
				'vc_parametro_detalle'=>'Servicio para la formalización empresarial y de productos y/o Servicio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de las Redes Regionales de Emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para emprendedores y/o empresas en edad temprana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a las Micro franquicias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica y acompañamiento productivo y empresarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica y fortalecimiento a las unidades productivas pertenecientes a la red empresarial Red-i y sector detallista',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento y desarrollo de unidades productivas para la comercialización de productos agroindustriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a las Mipymes para el acceso a nuevos mercados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención y asesoría a empresas y emprendedores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la actividad artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a la actividad artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de diseño y/o mejoramiento de productos artesanales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la actividad artesanal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502027',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la gestión del uso eficiente de los recursos y aumento de la productividad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502096',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para el fomento de capacidades en economía circulary sostenibilidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502095',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación aplicada en metrología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502097',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de temas misionales de la SIC',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503014',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599044',
			],
			[
				'vc_parametro_detalle'=>'Sendero turístico mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502098',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en metrología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502099',
			],
			[
				'vc_parametro_detalle'=>'Servicio de producción de materiales de referencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502100',
			],
			[
				'vc_parametro_detalle'=>'Servicio de calibración de equipos e instrumentos metrológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502101',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de herramientas metrológicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502102',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599066',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599067',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599068',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599069',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599070',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599072',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599921',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599922',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control en temas asociados al Subsistema Nacional de Calidad (SICAL), al régimen de control de precios y al sector valuatorio del país',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de protección al consumidor dentro de las competencias de la Superintendencia de Industria y Comercio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503017',
			],
			[
				'vc_parametro_detalle'=>'Servicio para la protección de la competencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503018',
			],
			[
				'vc_parametro_detalle'=>'Servicio para promover la propiedad industrial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de propiedad industrial e información tecnológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503020',
			],
			[
				'vc_parametro_detalle'=>'Servicios de inspección, vigilancia y control a las cámaras de comercio y comerciantes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de inspección, vigilancia y control para la protección de los datos personales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503022',
			],
			[
				'vc_parametro_detalle'=>'Servicio jurisdiccionales para la protección del consumidor, la competencia y la propiedad industrial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en temas de la Superintendencia de Industria y Comercio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a unidades artesanales para acceder a mercados electrónicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502105',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación del Subsistema Nacional de Calidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502106',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información turística a nivel nacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502093',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación sobre turismo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502094',
			],
			[
				'vc_parametro_detalle'=>'Servicios de inspección y vigilancia a contadores públicos y sociedades prestadoras de servicios contables',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3503013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al ciudadano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599007',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599016',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502063',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502064',
			],
			[
				'vc_parametro_detalle'=>'Sistema lineal teleférico turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502065',
			],
			[
				'vc_parametro_detalle'=>'Marina construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502072',
			],
			[
				'vc_parametro_detalle'=>'Marina ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502073',
			],
			[
				'vc_parametro_detalle'=>'Marina mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502074',
			],
			[
				'vc_parametro_detalle'=>'Plazas de mercado construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502081',
			],
			[
				'vc_parametro_detalle'=>'Plazas de mercado ampliada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502082',
			],
			[
				'vc_parametro_detalle'=>'Plazas de mercado mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502083',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502047',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de circuito turístico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502049',
			],
			[
				'vc_parametro_detalle'=>'Centro de convención construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502050',
			],
			[
				'vc_parametro_detalle'=>'Centro de convención ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502051',
			],
			[
				'vc_parametro_detalle'=>'Centro de convención mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502052',
			],
			[
				'vc_parametro_detalle'=>'Centro turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502053',
			],
			[
				'vc_parametro_detalle'=>'Centro turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502054',
			],
			[
				'vc_parametro_detalle'=>'Centro turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502055',
			],
			[
				'vc_parametro_detalle'=>'Sendero turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502056',
			],
			[
				'vc_parametro_detalle'=>'Sendero turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502057',
			],
			[
				'vc_parametro_detalle'=>'Sendero turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502058',
			],
			[
				'vc_parametro_detalle'=>'Señalización turística construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502059',
			],
			[
				'vc_parametro_detalle'=>'Embarcadero construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502060',
			],
			[
				'vc_parametro_detalle'=>'Embarcadero ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502061',
			],
			[
				'vc_parametro_detalle'=>'Embarcadero mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502062',
			],
			[
				'vc_parametro_detalle'=>'Muelle turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502066',
			],
			[
				'vc_parametro_detalle'=>'Muelle turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502067',
			],
			[
				'vc_parametro_detalle'=>'Muelle turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502068',
			],
			[
				'vc_parametro_detalle'=>'Centro interpretativo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502069',
			],
			[
				'vc_parametro_detalle'=>'Centro interpretativo ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502070',
			],
			[
				'vc_parametro_detalle'=>'Centro interpretativo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502071',
			],
			[
				'vc_parametro_detalle'=>'Terminal turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502075',
			],
			[
				'vc_parametro_detalle'=>'Terminal turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502076',
			],
			[
				'vc_parametro_detalle'=>'Terminal turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502077',
			],
			[
				'vc_parametro_detalle'=>'Malecón construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502078',
			],
			[
				'vc_parametro_detalle'=>'Malecón ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502079',
			],
			[
				'vc_parametro_detalle'=>'Malecón mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502080',
			],
			[
				'vc_parametro_detalle'=>'Mirador turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502084',
			],
			[
				'vc_parametro_detalle'=>'Mirador turístico ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502085',
			],
			[
				'vc_parametro_detalle'=>'Mirador turístico mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502086',
			],
			[
				'vc_parametro_detalle'=>'Centro recreativo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502087',
			],
			[
				'vc_parametro_detalle'=>'Centro recreativo ampliado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502088',
			],
			[
				'vc_parametro_detalle'=>'Centro recreativo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502089',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502090',
			],
			[
				'vc_parametro_detalle'=>'Ecoparque turístico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502043',
			],
			[
				'vc_parametro_detalle'=>'Gaviones construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en asuntos turísticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción turística',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3502046',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3599923',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699064',
			],
			[
				'vc_parametro_detalle'=>'Ambientes de formación modernizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro de inserción laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento a planes de negocio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación profesional integral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asesoría técnica para el emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602032',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la creación de empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción para el emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación para el trabajo en emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602035',
			],
			[
				'vc_parametro_detalle'=>'Servicios de orientación ocupacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602036',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación con el sector productivo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento para la oferta de formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación de competencias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de aseguramiento de calidad de la formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación laboral y ocupacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de la red de prestadores del Servicio Público de Empleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605017',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo administrativo a la formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699065',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo administrativo a la formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603026',
			],
			[
				'vc_parametro_detalle'=>'Sistema de Afiliación Única Electrónica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de la información de Historias Laborales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de normatividad del Sistema General de Pensiones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de cooperación en materia de seguridad social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para el emprendimiento solidario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de colocación laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de registro laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el fortalecimiento de la Red de formalización laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la implementación de políticas públicas en el marco del trabajo decente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo en emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602011',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para el emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en educación solidaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación para el trabajo en competencias para la inserción laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación profesional integral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación de desempeño laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el análisis de las ocupaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de información de competencias y ocupaciones',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de seguimiento a los programas de formación para el trabajo orientados a población vulnerable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica para la formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de aseguramiento de calidad de la formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación del diálogo social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604001',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la protección del joven trabajador',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección laboral al joven trabajador',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para la prevención integral del trabajo infantil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación del teletrabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Inspección, Vigilancia y Control a las empresas para el cumplimiento de los derechos fundamentales y el trabajo decente.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conciliación y solución de conflictos laborales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Inspección, Vigilancia y Control en normas laborales y de seguridad social y de salud en el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de la información sobre el mercado laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de difusión sobre el mercado laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de derechos de propiedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación, desarrollo e innovación tecnológica orientados a la competitividad del mercado del trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605007',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de subsidios para el adulto mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601010',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión para generación y formalización del empleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de identificación y formulación de planes de Emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de orientación ocupacional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la generación y formalización de empresa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la creación de empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602018',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo al diseño e implementación depolíticas de protección al cesante',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción, fomentoy divulgación de la asociatividad solidaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la generación de Alianzas Estratégicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en economía solidaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a entidades territorialesy direcciones territoriales en el marco del trabajo decente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602024',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para población trabajadora con ingreso inferior a un salario mínimo mensual legal vigente.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el adulto mayor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la población migrante laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento de la política de formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia Técnica en Gestión del Conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la generación y formalización del empleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información y monitoreo del mercado de trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación para el trabajo en competencias para la inserción laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la política del talento humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en inspección, vigilancia y control en el marco del Trabajo Decente.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información sobre el registro de Organizaciones Sindicales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la aplicación del enfoque de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604026',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la Cooperación y Relaciones Internacionales en materia de trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604027',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699061',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación sistemas de gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo al fortalecimiento de políticas públicas para la generación y formalización del empleo en el marco del trabajo decente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento de los programas de formación para el trabajo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación de los derechos fundamentales del trabajo y fortalecimiento del dialogo social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el trabajo decente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevencióndel trabajo infantil y protección del adolescente trabajador',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y divulgación para generación y formalización del empleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción y difusión de los resultados de la gestión del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Inspección, Vigilancia y Control en el Marco del Trabajo Decente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la equidad de Género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formación informal para el emprendimiento rural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603016',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699010',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699016',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación sobre el Sistema General de Pensiones y Cajas de Compensación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de los procesos de formalización laboral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3602016',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603013',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de promoción y divulgación de los servicios del SENA',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3603015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604016',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para el talento humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3605008',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699011',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3699063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del sistema de Afiliación Única Electrónica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3601003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información del registro sindical',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3604024',
			],
			[
				'vc_parametro_detalle'=>'Obras para el control y reducción de la erosión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707086',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para Comunidades Negras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para Comunidades Indígenas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704010',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de certificación a Cuerpos de Bomberos de Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708012',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704012',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la implementación de proyectos en materia de derechos humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la implementación de proyectos en materia de etnias',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701025',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a Cuerpos de Bomberos de Colombia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica y administrativa de los cuerpos de bomberos del país',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708014',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de bomberos adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en participación ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción a la participación ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de derechos de las comunidades étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701028',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de derechos humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de consulta bibliográfica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707087',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707088',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706009',
			],
			[
				'vc_parametro_detalle'=>'Vía terciaria construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707068',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707069',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707070',
			],
			[
				'vc_parametro_detalle'=>'Acueductos optimizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707071',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados optimizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707072',
			],
			[
				'vc_parametro_detalle'=>'Acueductos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707074',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707075',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura educativa mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos productivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en incorporación de la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707078',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Incorporación de la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707079',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en gestión del riesgo de desastres',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707080',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico para vivienda rural construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707081',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de interés social rural construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707082',
			],
			[
				'vc_parametro_detalle'=>'Soluciones de disposición final de residuos sólidos construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707083',
			],
			[
				'vc_parametro_detalle'=>'Redes del sistema de distribución local construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707084',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica agropecuaria dirigida a pequeños productores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707085',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en derechos de autor a autores y no autores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en Derechos de Autor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a funcionarios de la rama judicial en demandas de derecho de autor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en derechos de autor y conexos de otros países',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de conciliación y arbitraje en temas relacionados con el Derecho de Autor y los Derechos Conexos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de justicia especializada relativa a controversias sobre derechos de autor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706006',
			],
			[
				'vc_parametro_detalle'=>'Salas de audiencias mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información en Derechos de Autor',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal teórico-practico en atención de emergencias bomberilres.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701002',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Derechos Humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a comunidades Indígenas en promoción cultural y ancestral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Derechos Humanos, Derecho Internacional Humanitario y organizaciones étnicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en gestión de seguridad de la información en Derechos Humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701008',
			],
			[
				'vc_parametro_detalle'=>'Sedes administrativas para el fortalecimiento étnico adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701010',
			],
			[
				'vc_parametro_detalle'=>'Sedes administrativas para el fortalecimiento étnico mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701011',
			],
			[
				'vc_parametro_detalle'=>'Mapas de cementerios para la identificación de víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de temas LGBTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702002',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en atención de conflictos sociales de manera pacífica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en seguridad y convivencia ciudadana y enfoque de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el manejo de orden público y post conflicto',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en atención de conflictos sociales de manera pacífica.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en seguridad y convivencia ciudadana y de género',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en el manejo de orden público y post conflicto',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en descentralización y ordenamiento territorial.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702010',
			],
			[
				'vc_parametro_detalle'=>'Escuelas territoriales de convivencia ciudadana construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en seguridad, paz y convivencia ciudadana.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en atención y reparación integral a las víctimas del conflicto',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703001',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en el manejo de herramientas tecnológicas de participación ciudadana.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección individual en riesgo extraordinario y extremo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal enprotección individual en riesgo extraordinario y extremo.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en temas de protección colectiva en riesgo extraordinario y extremo.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en derechos y normatividad de discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica territorial para la implementación de medidas afirmativas y ajustes razonables orientadas a personas con discapacidad.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en la implementación de proyectos de discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación y promoción del Sistema Nacional de Discapacidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3701018',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799044',
			],
			[
				'vc_parametro_detalle'=>'Estaciones de bomberos construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3708009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799058',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de seguimiento territorial a la política pública de victimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de formulación de proyectos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos de fortalecimiento institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3703008',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura hospitalaria de nivel 1 construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3707026',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia a través de cámaras de seguridad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos de seguridad ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la seguridad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención inmediata a las emergencias de seguridad ciudadana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de seguridad y emergencias 123',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702017',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención de seguridad y emergencias de losCentros de Información Estratégica Policia Seccional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702018',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia comunitaria por cuadrantes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de vigilancia e inteligencia móvil',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3702020',
			],
			[
				'vc_parametro_detalle'=>'Oficinas para la atención y orientación ciudadana construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704005',
			],
			[
				'vc_parametro_detalle'=>'Oficinas para la atención y orientación ciudadana adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704006',
			],
			[
				'vc_parametro_detalle'=>'Oficinas de atención ciudadana dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3704007',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3799062',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3706010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Protección Colectiva en riesgo extraordinario y extremo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3705007',
			],
			[
				'vc_parametro_detalle'=>'Centros de ciencia construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904011',
			],
			[
				'vc_parametro_detalle'=>'Centros de Ciencia fortalecidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904012',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la realización de expediciones científicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la curaduría de colecciones biológicas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903011',
			],
			[
				'vc_parametro_detalle'=>'Servicios de comunicación con enfoque en Ciencia Tecnología y Sociedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903012',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión elaborados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902015',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura  para la investigación construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902016',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la investigación adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902017',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la investigación dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902018',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para la CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de fomento a la vigilancia y prospectiva tecnológica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el desarrollo tecnológico y la innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para entrenamiento especializado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de estandarización de pruebas y calibraciones de laboratorios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la transferencia de conocimiento y tecnología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de clasificación y reconocimiento de actores del SNCTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903007',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para desarrollo tecnológico y la innovación fortalecida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la generación de nuevo conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902001',
			],
			[
				'vc_parametro_detalle'=>'Artículos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902003',
			],
			[
				'vc_parametro_detalle'=>'Productos de investigación en artes, arquitectura y diseño',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la formación de nivel doctoral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la formación de nivel maestría',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acceso a bibliografía especializada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la vinculación de doctores a entidades del SNCTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para entrenamiento especializado para científicos investigadores',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de articulación de oferta y demanda de doctores y entidades del SNCTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de clasificación y reconocimiento de actores del SNCTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a estancias posdoctorales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902012',
			],
			[
				'vc_parametro_detalle'=>'Infraestructura para la investigación fortalecida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902013',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de política',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de la información de CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de cooperación internacional para la CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3901006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fomento de vocaciones científicas en CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904005',
			],
			[
				'vc_parametro_detalle'=>'Servicio para el fortalecimiento de capacidades institucionales para el fomento de vocación científica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fortalecimiento de capacidades institucionalespara el fomento de vocación científica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a Diseños de ambientes de aprendizaje para Centros de Ciencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la elaboración de Documentos de planeación para Centros de Ciencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904010',
			],
			[
				'vc_parametro_detalle'=>'Servicios de Educación en Centros de ciencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de clasificación y reconocimiento de actores del SNCTI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904014',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para el fortalecimiento de la participación ciudadana en Ciencia, Tecnología e Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904015',
			],
			[
				'vc_parametro_detalle'=>'Servicios para fortalecer la participación ciudadana en Ciencia, Tecnología e Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la comunicación con enfoque en Ciencia Tecnología y Sociedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de comunicación con enfoque en Ciencia Tecnología y Sociedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904018',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para el fortalecimiento de procesos de intercambio y transferencia del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904019',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para el fortalecimiento de procesos de intercambio y transferencia del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904020',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la Gestión del Conocimiento en Cultura y Apropiación Social de la Ciencia, la Tecnología y la Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la Gestión del Conocimiento en Cultura y Apropiación Social de la Ciencia, la Tecnología y la Innovación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para el fomento de la apropiación social de la CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904023',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la innovación empresarial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903009',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3902014',
			],
			[
				'vc_parametro_detalle'=>'Estudios y diseños para Centros de Ciencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fomento de las vocaciones científicas en CTeI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3904024',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999061',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3999062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la deducción tributaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'3903006',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados optimizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003020',
			],
			[
				'vc_parametro_detalle'=>'Acueductos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003015',
			],
			[
				'vc_parametro_detalle'=>'Acueductos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003016',
			],
			[
				'vc_parametro_detalle'=>'Acueductos optimizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003017',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003018',
			],
			[
				'vc_parametro_detalle'=>'Alcantarillados ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003019',
			],
			[
				'vc_parametro_detalle'=>'Parques construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002021',
			],
			[
				'vc_parametro_detalle'=>'Parques mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002022',
			],
			[
				'vc_parametro_detalle'=>'Parques mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002023',
			],
			[
				'vc_parametro_detalle'=>'Parques ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002024',
			],
			[
				'vc_parametro_detalle'=>'Zonas verdes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002025',
			],
			[
				'vc_parametro_detalle'=>'Zonas verdes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002026',
			],
			[
				'vc_parametro_detalle'=>'Plazas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002030',
			],
			[
				'vc_parametro_detalle'=>'Plazas mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002031',
			],
			[
				'vc_parametro_detalle'=>'Plazas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002032',
			],
			[
				'vc_parametro_detalle'=>'Plazas ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002033',
			],
			[
				'vc_parametro_detalle'=>'Espacio publico construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002019',
			],
			[
				'vc_parametro_detalle'=>'Espacio publico adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002020',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en procesos de producción de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para subsidios al consumo en los servicios públicos domiciliarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para adquisición de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para mejoramiento de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para arrendamiento de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para construcción de vivienda en sitio propio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de  Información implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la asignación de subsidios por sentencias judiciales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la ejecución de la política de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Formulación, evaluación y monitoreo de planes, programas y proyectos de Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en regulación de Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación en regulación de Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a los planes, programas y proyectos de Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Aseo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo del uso de los recursos del Sistema General de Participaciones (SGP) - Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003011',
			],
			[
				'vc_parametro_detalle'=>'Soluciones de disposición final de residuos solidos construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica y jurídica en saneamiento y titulación de predios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en proyectos de Vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en la implementación de la política de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de saneamiento y titulación de bienes fiscales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001007',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Social urbanas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001014',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Social urbanas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001015',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Social urbanas construidas en sitio propio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001016',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Prioritario urbanas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001017',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Prioritario urbanas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001018',
			],
			[
				'vc_parametro_detalle'=>'Viviendas de Interés Prioritario urbanas construidas en sitio propio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001019',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en planificación urbana y ordenamiento territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Mejoramiento integral de barrios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Incorporación de la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Espacio publico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en Instrumentos de gestión y financiación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en planes de desarrollo urbano y ordenamiento territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en mejoramiento integral de barrios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Incorporación de la gestión del riesgo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Operaciones urbanas especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Espacio publico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en Instrumentos de gestión y financiación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en planes de desarrollo urbano y ordenamiento territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el Mejoramiento integral de barrios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en Operaciones urbanas especiales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002014',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en regulación de Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Alcantarillado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Acueducto',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Asistencia técnica para la formulación, implementación y seguimiento de planes, programas y proyectos de agua potable y saneamiento básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003043',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión e inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001030',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión e inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002034',
			],
			[
				'vc_parametro_detalle'=>'Estudios de pre inversión e inversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003042',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero en tratamiento de aguas residuales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003040',
			],
			[
				'vc_parametro_detalle'=>'Servicio de regulación en Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003041',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099058',
			],
			[
				'vc_parametro_detalle'=>'Unidades sanitarias con saneamiento básico mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003045',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para capitalización de empresas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003046',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la estructuración, formulación yejecución de planes y proyectos de agua potable y saneamiento básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico para el tratamiento de aguas residuales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo técnico a la gestión integral de residuos sólidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003034',
			],
			[
				'vc_parametro_detalle'=>'Servicios de saneamiento y legalización de los bienes inmuebles de los extintos ICT-INURBE',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001027',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información para la gestión predial de los bienes inmuebles de los extintos ICT-INURBE',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001028',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica y jurídica para el saneamiento, legalización y comercialización de bienes inmuebles de los extintos ICT-INURBE',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001029',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la ejecución de proyectos de gestión integral de residuos sólidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003033',
			],
			[
				'vc_parametro_detalle'=>'Servicio asistencia técnica en el monitoreo a los recursos Sistema General de Participaciones SGP - Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la estrategia de monitoreo, seguimiento y control a los recursos del Sistema General de Participaciones SGP - Agua Potable y Saneamiento Básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003037',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para proyectos de conexiones intradomiciliarias y/o agua y saneamiento en casa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003027',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión para la instrumentación técnica y normativa en agua potable y saneamiento básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003029',
			],
			[
				'vc_parametro_detalle'=>'Servicios de gestión para la elaboración de instrumentos para el desarrollo urbano y territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002018',
			],
			[
				'vc_parametro_detalle'=>'Estación de clasificación y aprovechamiento de residuos sólidos construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003031',
			],
			[
				'vc_parametro_detalle'=>'Servicios de análisis económico para el seguimiento sectorial y la toma de decisiones en la política pública de vivienda urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001020',
			],
			[
				'vc_parametro_detalle'=>'Servicios de formulación einstrumentaciónde las políticas públicas de vivienda urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica y administrativa para la formulación e implementación de proyectos de vivienda urbana',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la consecución de información catastral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001025',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para la implementación y seguimiento de la política pública de vivienda urbana para la población víctima de desplazamiento forzado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001026',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la ejecución de proyectos de acueductos y alcantarillado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003025',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la ejecución de proyectos de acueductos y de manejo de aguas residuales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003026',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de orientación para el otorgamiento de subsidio familiar de vivienda',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001023',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica y jurídica en cesión a título gratuito de bienes fiscales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4001024',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero a la ejecución de programas y proyectos de desarrollo urbano y territorial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4002017',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en agua potable y saneamiento básico',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003028',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación para el manejo de residuos solidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003024',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en manejo de residuos solidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003021',
			],
			[
				'vc_parametro_detalle'=>'Servicios de implementación del Plan de Gestión Integral de Residuos Solidos PGIRS',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de seguimiento al Plan de Gestión Integral de Residuos Solidos PGIRS',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003023',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4099062',
			],
			[
				'vc_parametro_detalle'=>'Servicios de valorización de residuos sólidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4003030',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a las entidades territoriales en la formulación de sus marcos de lucha contra la pobreza',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103049',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento familiar y comunitario para la superación de la pobreza',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103050',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el autoconsumo de los hogares en situación de vulnerabilidad social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103051',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a comunidades en temas de fortalecimiento del tejido social y construcción de escenarios comunitarios protectores de derechos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de temas de dinámica relacional y desarrollo autónomo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión de oferta social para la población vulnerable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103052',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el ciclo de políticas públicas de familia y otras relacionadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102041',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199063',
			],
			[
				'vc_parametro_detalle'=>'Servicio de publicaciones virtuales del Museo Nacional de la Memoria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a unidades productivas individuales para la generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el fortalecimiento de unidades productivas colectivas para la generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para fortalecimiento de unidades productivas colectivas para la generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de sistemas de gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199064',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a comunidades en temas de fortalecimiento del tejido social y construcción de escenarios comunitarios protectores de derechos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101079',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101073',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento comunitario a los hogares en riesgo de desplazamiento, retornados o reubicados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101074',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento a las intervenciones implementadas en los hogares en riesgo de desplazamiento o victimas del desplazamiento forzado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el mejoramiento de hábitos alimentarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103053',
			],
			[
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento a las intervenciones implementadas para la inclusión social y productiva de la población en situación de vulnerabilidad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103054',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para el mejoramiento de condiciones de habitabilidad para población víctima de desplazamiento forzado ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101076',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para las unidades productivas para el autoconsumo de los hogares en situación de vulnerabilidad social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103055',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para las unidades productivas para el autoconsumo de hogares desplazados o en riesgo de desplazamiento, retornados o reubicados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el autoconsumo de los hogares desplazados o en riesgo de desplazamiento, retornados o reubicados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101078',
			],
			 [
				 'vc_parametro_detalle'=>'Servicio de asistencia técnica en seguridad alimentaria y nutricional a entidades territoriales',
				 'i_fk_id_parametro'=>46,
				 'i_estado'=>1,
				 
				 'vc_codigo_interno'=>'4103056',
			 ],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la entrega de transferencias monetarias no condicionadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103061',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101082',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101083',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101084',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101085',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101086',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para alojamiento temporal de víctimas desplazadas por el conflicto con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101087',
			],
			[
				'vc_parametro_detalle'=>'Documento de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103060',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la generación de ingresos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101080',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo al fortalecimiento comunitario a los hogares en riesgo de desplazamiento, retornados o reubicados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101081',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para cofinanciación de proyectos territoriales de asistencia, atención y reparación integral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101033',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a víctimas que se encuentran en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de coordinación y fortalecimiento a las entidades del Sistema Nacional de Atención y Reparación Integral a Víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la formulación de planes integrales de reparación colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101036',
			],
			[
				'vc_parametro_detalle'=>'Servicio de implementación de medidas del Plan de Reparación Colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el uso adecuado de recursos de la indemnización administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101028',
			],
			[
				'vc_parametro_detalle'=>'Servicios para la Indemnización Administrativa y Judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención integral a la primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención tradicional a la primera infancia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal a los agentes educativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102003',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones para la atención integral a la primera infancia construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102004',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102005',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102006',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia remodeladas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102007',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102008',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102009',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102010',
			],
			[
				'vc_parametro_detalle'=>'Edificaciones de atención a la primera infancia con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la entrega de transferencias monetarias condicionadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de entrega de raciones de alimentos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103017',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103018',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103019',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103020',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103021',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103022',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103023',
			],
			[
				'vc_parametro_detalle'=>'Comedores comunitarios dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103024',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103025',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103026',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103027',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103028',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103029',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103030',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo a la población vulnerable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103004',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el emprendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en alianzas para la comercialización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia en temas de desarrollo de habilidades no cognitivas para la inclusión productiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de gestión para la colocación de empleo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la atención de población vulnerable',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información con modelos de gestión tecnológica para el Sistema Nacional de Bienestar Familiar',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102036',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101001',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101002',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101003',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101004',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101005',
			],
			[
				'vc_parametro_detalle'=>'Museos de Memoria Histórica con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la oferta institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de investigación y reconstrucción de hechos relacionados con el conflicto',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101009',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la realización de iniciativas de memoria histórica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de certificaciones a desmovilizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de archivo sobre violaciones de derechos humanos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de caracterización de la población víctima para su posterior atención, asistencia y reparación integral',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de expedición de certificaciones de justicia y paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101015',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101016',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales de atención a víctimas construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101017',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales o puntos de atención a víctimas dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101018',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales de atención a víctimas ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101019',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales de atención a víctimas modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101020',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales de atención a víctimas restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101021',
			],
			[
				'vc_parametro_detalle'=>'Centros regionales de atención a víctimas con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de orientación y comunicación a las víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101023',
			],
			[
				'vc_parametro_detalle'=>'Servicio de prevención a violaciones de Derechos Humanos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de ayuda y atención humanitaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101025',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención y prevención a la desnutrición desde el sector inclusión social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102016',
			],
			[
				'vc_parametro_detalle'=>'Servicio para proceso de adopción de niños, niñas y adolescentes en situación de adoptabilidad en firme, por consentimiento o por autorización',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102019',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal de niños, niñas y adolescentes para el reconocimiento de sus derechos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102020',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de estrategias de prevención del embarazo en la adolescencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102021',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la promoción y prevención de los derechos de los niños, niñas y adolescentes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102022',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el ciclo de políticas públicas de infancia y adolescencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102024',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102025',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102026',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102027',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102028',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos remodelados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102029',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102030',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102031',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102032',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102033',
			],
			[
				'vc_parametro_detalle'=>'Centros de Atención Especializada - CAE para el restablecimiento de derechos construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102034',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102035',
			],
			[
				'vc_parametro_detalle'=>'Servicio de alojamiento temporal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101026',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia funeraria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101027',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para financiación de obras de infraestructura social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de distribución de alimentos sólidos de alto valor nutricional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de distribución de alimentos líquidos de alto valor nutricional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102015',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación emocional a víctimas del conflicto armado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101030',
			],
			[
				'vc_parametro_detalle'=>'Servicios de implementaciónde medidas de satisfacción y acompañamiento a las víctimas del conflicto armado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101031',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la formulación de proyectos a entidades territoriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la participación de las víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento para la población retornada o reubicada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101039',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo para la seguridad alimentaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101042',
			],
			[
				'vc_parametro_detalle'=>'Servicio de transporte y traslado de enseres y bienes muebles',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101043',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para el registro, atención, asistencia y reparación integral a víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la formulación de planes y proyectos de reparación colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101045',
			],
			[
				'vc_parametro_detalle'=>'Documentos de diagnóstico y/o caracterización del daño colectivo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101046',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación y socialización para la implementación del proceso de reparación colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para financiación obras de infraestructura social en los procesos de retorno y reubicación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101048',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101056',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios ampliados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101057',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101058',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios modificados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101059',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios restaurados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101060',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101061',
			],
			[
				'vc_parametro_detalle'=>'Centros comunitarios dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101062',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199044',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101067',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la articulación interinstitucional en la implementación de la polìtica pública para las víctimas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101063',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo para el desarrollo de obras de infraestructura para la prevención y atención de emergencias humanitarias implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101064',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo financiero para la restitución de créditos y pasivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101065',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asistencia técnica para la implementación de la ruta de reparación colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101066',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para el Fortalecimiento del Talento Humano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199057',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en el componente de Bienestar Comunitario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103047',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo de acciones pedagógicas en memoria histórica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101069',
			],
			[
				'vc_parametro_detalle'=>'Servicios de museología',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101070',
			],
			[
				'vc_parametro_detalle'=>'Servicios de programación artística, cultural y académica del Museo Nacional de la Memoria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101071',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en proyectos de infraestructura social a entidades territoriales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4103048',
			],
			[
				'vc_parametro_detalle'=>'Servicio de protección para el restablecimiento de derechos de niños, niñas, adolescentes y jóvenes',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102037',
			],
			[
				'vc_parametro_detalle'=>'Servicio dirigidos a la atención de niños, niñas, adolescentes y jóvenes, con enfoque pedagógico y restaurativo encaminados a la inclusión social',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para cofinanciación de proyectos territoriales de infraestructura del Sistema de Responsabilidad Penal para Adolescente',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102039',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102040',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199061',
			],
			[
				'vc_parametro_detalle'=>'Servicios de divulgación de tematicas de memoria histórica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4101068',
			],
			[
				'vc_parametro_detalle'=>'Documentos de Planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199008',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199022',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199023',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199016',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4199062',
			],
			[
				'vc_parametro_detalle'=>'Alimentos sólidos de alto valor nutricional producidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102012',
			],
			[
				'vc_parametro_detalle'=>'Alimentos líquidos de alto valor nutricional producidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4102013',
			],
			[
				'vc_parametro_detalle'=>'Centro operacional construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201006',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299063',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación para el trabajo y el desarrollo humano en inteligencia y contrainteligencia ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal para el desarrollo de inteligencia y contrainteligencia ',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201010',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201011',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299058',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299061',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de tecnologías de la información y las comunicaciones de inteligencia estratégica',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201002',
			],
			[
				'vc_parametro_detalle'=>'Servicios de seguridad y protección de activos institucionales',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201003',
			],
			[
				'vc_parametro_detalle'=>'Servicios de formación especializada, innovación y gestión del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201004',
			],
			[
				'vc_parametro_detalle'=>'Servicios técnicos especializados para el desarrollo del ciclo de inteligencia',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201005',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4299062',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4201012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de análisis de muestras',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302077',
			],
			[
				'vc_parametro_detalle'=>'Servicio de control de dopaje',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302078',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399063',
			],
			[
				'vc_parametro_detalle'=>'Centro de alto rendimiento construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302087',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de la actividad física, la recreación y el deporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301037',
			],
			[
				'vc_parametro_detalle'=>'Servicio de organización de eventos recreativos comunitarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301038',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo a la actividad física, la recreación y el deporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la profesionalización de deportistas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de administración de la infraestructura deportiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mantenimiento a la infraestructura deportiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Escuelas Deportivas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301007',
			],
			[
				'vc_parametro_detalle'=>'Parques recreativos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301009',
			],
			[
				'vc_parametro_detalle'=>'Parques recreativos construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301010',
			],
			[
				'vc_parametro_detalle'=>'Parques recreativos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301011',
			],
			[
				'vc_parametro_detalle'=>'Parques recreativos mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301012',
			],
			[
				'vc_parametro_detalle'=>'Parques recreativos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301013',
			],
			[
				'vc_parametro_detalle'=>'Canchas multifuncionales construidas.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301014',
			],
			[
				'vc_parametro_detalle'=>'Canchas multifuncionales construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301015',
			],
			[
				'vc_parametro_detalle'=>'Canchas multifuncionales adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301016',
			],
			[
				'vc_parametro_detalle'=>'Canchas multifuncionales mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301017',
			],
			[
				'vc_parametro_detalle'=>'Canchas multifuncionales mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301018',
			],
			[
				'vc_parametro_detalle'=>'Placa deportiva construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301019',
			],
			[
				'vc_parametro_detalle'=>'Placa deportiva construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301020',
			],
			[
				'vc_parametro_detalle'=>'Placa deportiva adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301021',
			],
			[
				'vc_parametro_detalle'=>'Placa deportiva mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301022',
			],
			[
				'vc_parametro_detalle'=>'Placa deportiva mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301023',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios al aire libre estáticos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301024',
			],
			[
				'vc_parametro_detalle'=>'Servicio de preparación deportiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302001',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a atletas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención médica especializada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de organización de eventos deportivos de alto rendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302006',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de posicionamiento institucional',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302008',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302009',
			],
			[
				'vc_parametro_detalle'=>'Estadios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302010',
			],
			[
				'vc_parametro_detalle'=>'Estadios construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302011',
			],
			[
				'vc_parametro_detalle'=>'Estadios mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302012',
			],
			[
				'vc_parametro_detalle'=>'Estadios mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302013',
			],
			[
				'vc_parametro_detalle'=>'Pistas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302014',
			],
			[
				'vc_parametro_detalle'=>'Pistas construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302015',
			],
			[
				'vc_parametro_detalle'=>'Pistas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302016',
			],
			[
				'vc_parametro_detalle'=>'Pistas mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302017',
			],
			[
				'vc_parametro_detalle'=>'Pistas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302018',
			],
			[
				'vc_parametro_detalle'=>'Piscinas construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302019',
			],
			[
				'vc_parametro_detalle'=>'Piscinas construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302020',
			],
			[
				'vc_parametro_detalle'=>'Piscinas adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302021',
			],
			[
				'vc_parametro_detalle'=>'Piscinas mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302022',
			],
			[
				'vc_parametro_detalle'=>'Piscinas mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302023',
			],
			[
				'vc_parametro_detalle'=>'Coliseos cubiertos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302024',
			],
			[
				'vc_parametro_detalle'=>'Coliseos cubiertos construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302025',
			],
			[
				'vc_parametro_detalle'=>'Coliseos cubiertos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302026',
			],
			[
				'vc_parametro_detalle'=>'Coliseos cubiertos mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302027',
			],
			[
				'vc_parametro_detalle'=>'Coliseos cubiertos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302028',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos cubiertos de alto rendimiento construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302029',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos cubiertos de alto rendimiento construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302030',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos cubiertos de alto rendimiento adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302031',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos cubiertos de alto rendimiento mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302032',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos cubiertos de alto rendimiento mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302033',
			],
			[
				'vc_parametro_detalle'=>'Canchas de alto rendimiento construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302034',
			],
			[
				'vc_parametro_detalle'=>'Canchas de alto rendimiento construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302035',
			],
			[
				'vc_parametro_detalle'=>'Canchas de alto rendimiento adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302036',
			],
			[
				'vc_parametro_detalle'=>'Canchas de alto rendimiento mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302037',
			],
			[
				'vc_parametro_detalle'=>'Canchas de alto rendimiento mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302038',
			],
			[
				'vc_parametro_detalle'=>'Centros de recreación construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302039',
			],
			[
				'vc_parametro_detalle'=>'Centros de recreación construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302040',
			],
			[
				'vc_parametro_detalle'=>'Centros de recreación adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302041',
			],
			[
				'vc_parametro_detalle'=>'Centros de recreación mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302042',
			],
			[
				'vc_parametro_detalle'=>'Centros de recreación mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302043',
			],
			[
				'vc_parametro_detalle'=>'Unideportivo construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302044',
			],
			[
				'vc_parametro_detalle'=>'Unideportivo construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302045',
			],
			[
				'vc_parametro_detalle'=>'Unideportivo adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302046',
			],
			[
				'vc_parametro_detalle'=>'Unideportivo mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302047',
			],
			[
				'vc_parametro_detalle'=>'Unideportivo mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302048',
			],
			[
				'vc_parametro_detalle'=>'Salas de juego construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302049',
			],
			[
				'vc_parametro_detalle'=>'Salas de juego construidas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302050',
			],
			[
				'vc_parametro_detalle'=>'Salas de juego adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302051',
			],
			[
				'vc_parametro_detalle'=>'Salas de juego mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302052',
			],
			[
				'vc_parametro_detalle'=>'Salas de juego mejoradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302054',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302055',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302056',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302057',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302058',
			],
			[
				'vc_parametro_detalle'=>'Gimnasios mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302059',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302062',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención al ciudadano',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302063',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos construidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302064',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos construidos y dotados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302066',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos adecuados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302067',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos mantenidos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302068',
			],
			[
				'vc_parametro_detalle'=>'Polideportivos mejorados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302069',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399044',
			],
			[
				'vc_parametro_detalle'=>'Servicio de identificación de talentos deportivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302073',
			],
			[
				'vc_parametro_detalle'=>'Estudios y diseños de infraestructura recreo-deportiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301031',
			],
			[
				'vc_parametro_detalle'=>'Estudios y diseños de infraestructura deportiva de alto rendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302072',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399052',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399053',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399054',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399055',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399056',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399058',
			],
			[
				'vc_parametro_detalle'=>'Servicio de organización de eventos deportivos comunitarios',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301032',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a organismos deportivos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301034',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la promoción del deporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302075',
			],
			[
				'vc_parametro_detalle'=>'Servicio de educación informal en recreación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301035',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399060',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399061',
			],
			[
				'vc_parametro_detalle'=>'Servicio de inspección, vigilancia y control al Sistema Nacional del Deporte',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302076',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399009',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399010',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399011',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399012',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399013',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399014',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399015',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fomento de la infraestructura deportiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302071',
			],
			[
				'vc_parametro_detalle'=>'Parque recreo-deportivo construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301030',
			],
			[
				'vc_parametro_detalle'=>'Centro de alto rendimiento construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302074',
			],
			[
				'vc_parametro_detalle'=>'Centro de alto rendimiento mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302079',
			],
			[
				'vc_parametro_detalle'=>'Centro de alto rendimiento mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302080',
			],
			[
				'vc_parametro_detalle'=>'Centro de alto rendimiento adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302081',
			],
			[
				'vc_parametro_detalle'=>'Complejo deportivo de alto rendimiento construido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302082',
			],
			[
				'vc_parametro_detalle'=>'Complejo deportivo de alto rendimiento construido y dotado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302083',
			],
			[
				'vc_parametro_detalle'=>'Complejo deportivo de alto rendimiento mantenido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302084',
			],
			[
				'vc_parametro_detalle'=>'Complejo deportivo de alto rendimiento mejorado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302085',
			],
			[
				'vc_parametro_detalle'=>'Complejo deportivo de alto rendimiento adecuado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302086',
			],
			[
				'vc_parametro_detalle'=>'Cancha construida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301025',
			],
			[
				'vc_parametro_detalle'=>'Cancha construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301026',
			],
			[
				'vc_parametro_detalle'=>'Cancha adecuada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301027',
			],
			[
				'vc_parametro_detalle'=>'Cancha mantenida',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301028',
			],
			[
				'vc_parametro_detalle'=>'Cancha mejorada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4301029',
			],
			[
				'vc_parametro_detalle'=>'Servicio de mantenimiento a la infraestructura deportiva de alto rendimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4302070',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4399062',
			],
			[
				'vc_parametro_detalle'=>'Sede construida y dotada',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499012',
			],
			[
				'vc_parametro_detalle'=>'Sedes construidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499017',
			],
			[
				'vc_parametro_detalle'=>'Sedes ampliadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499015',
			],
			[
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499016',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asesoría y representación judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401001',
			],
			[
				'vc_parametro_detalle'=>'Servicios de asesoría y defensa judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401003',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401004',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401005',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de educación informal en temáticas de la Jurisdicción Especial para la Paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de acompañamiento psicosocial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401008',
			],
			[
				'vc_parametro_detalle'=>'Documento de la Comisión para el Esclarecimiento de la Verdad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402002',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402003',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402004',
			],
			[
				'vc_parametro_detalle'=>'Documento de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403001',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403002',
			],
			[
				'vc_parametro_detalle'=>'Servicio de recuperación de cuerpos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de contacto de personas vivas dadas por desaparecidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403004',
			],
			[
				'vc_parametro_detalle'=>'Casas de la verdad adecuadas y dotadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la gestión del conocimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de reencuentro de personas vivas dadas por desaparecidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de validación de los informes de identificación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403006',
			],
			[
				'vc_parametro_detalle'=>'Servicio de entrega digna de cuerpos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación para la búsqueda de personas desaparecidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información para la búsqueda de personas dadas por desaparecidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4403009',
			],
			[
				'vc_parametro_detalle'=>'Sedes mantenidas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499018',
			],
			[
				'vc_parametro_detalle'=>'Sedes modificadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499019',
			],
			[
				'vc_parametro_detalle'=>'Sedes restauradas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499020',
			],
			[
				'vc_parametro_detalle'=>'Estudios de preinversión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499021',
			],
			[
				'vc_parametro_detalle'=>'Sedes adecuadas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499013',
			],
			[
				'vc_parametro_detalle'=>'Sedes adquiridas',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Educación informal para la gestión Administrativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499011',
			],
			[
				'vc_parametro_detalle'=>'Documentos metodológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499004',
			],
			[
				'vc_parametro_detalle'=>'Documentos normativos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499005',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499006',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información actualizados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499007',
			],
			[
				'vc_parametro_detalle'=>'Servicios de información implementados',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499008',
			],
			[
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de Gestión Documental',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499001',
			],
			[
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499002',
			],
			[
				'vc_parametro_detalle'=>'Documentos de planeación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499003',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a las actuaciones y  decisiones judiciales de la justicia transicional y restaurativa',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401017',
			],
			[
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499022',
			],
			[
				'vc_parametro_detalle'=>'Servicios de apoyo a la investigación y acusación judicial',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401016',
			],
			[
				'vc_parametro_detalle'=>'Servicio de información de la Jurisdicción Especial para la Paz implementado',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401009',
			],
			[
				'vc_parametro_detalle'=>'Servicios de promoción en temáticas de la Jurisdicción Especial de la Paz',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401010',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a la verificación de las intervenciones con contenido reparador',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401011',
			],
			[
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la atención a víctimas y comparecientes en territorio',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401012',
			],
			[
				'vc_parametro_detalle'=>'Servicio de atención a víctimas en el exterior',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401013',
			],
			[
				'vc_parametro_detalle'=>'Servicio de reconocimiento del impacto del conflicto armado interno en la sociedad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402007',
			],
			[
				'vc_parametro_detalle'=>'Servicio de promoción de convivencia y no repetición',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402008',
			],
			[
				'vc_parametro_detalle'=>'Servicio de divulgación de la Comisión para el Esclarecimiento de la Verdad',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4402009',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en protección individual',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401014',
			],
			[
				'vc_parametro_detalle'=>'Servicio de apoyo en protección colectiva',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4401015',
			],
			[
				'vc_parametro_detalle'=>'Servicios tecnológicos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				
				'vc_codigo_interno'=>'4499010',
			],
			[
				'i_pk_id'=>6534,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica a los pocesos y estrategias de Cambio Cultura.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6535,
				'vc_parametro_detalle'=>'Servicios de información para el cambio cultural y cultura ciudadana.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6536,
				'vc_parametro_detalle'=>'Servicios bibliotecarios (Según Catálogo).',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6537,
				'vc_parametro_detalle'=>'Redes ciudadanas de lectura, ecritura y oralidad.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6538,
				'vc_parametro_detalle'=>'Servicio de producción y fortalecimeinto de contenidos para promover y garantizar el acceso a la información y a la comunicación.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6539,
				'vc_parametro_detalle'=>'Servicios de asistencia técnica en procesos de comunicación y medios alternativos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6540,
				'vc_parametro_detalle'=>'Servicio de actividades de creación artística y cultural.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6541,
				'vc_parametro_detalle'=>'Iniciativas de emprendimiento del sector artístico.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6542,
				'vc_parametro_detalle'=>'Servicios de atención en experiencias artísticas dirigidas a la primera infancia.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6543,
				'vc_parametro_detalle'=>'Servicio de generación y difusión de conocimiento del campo de las artes.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6544,
				'vc_parametro_detalle'=>'Servicio de actividades de apropiación de las prácticas artísticas.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6545,
				'vc_parametro_detalle'=>'Servicio de dotación y actualización y mantenimiento especializado de los equipamientos culturales.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6546,
				'vc_parametro_detalle'=>'Actividades de apropiación y divulgación de la cultura científica.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6547,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para el desarrollo y consolidación de la economía asociada al sector de Cultura, Recreación y Deporte.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1968,
				'vc_codigo_interno'=>'3301XX',
			],
			[
				'i_pk_id'=>6548,
				'vc_parametro_detalle'=>'Servicio de asesoría para la protección del patrimonio cultural construido conformado por los Bienes de Interés Cultural. (Según Catálogo)',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1966,
				'vc_codigo_interno'=>'330201',
			],
			[
				'i_pk_id'=>6549,
				'vc_parametro_detalle'=>'Centro de diseño de políticas públicas de cambio cultural.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1967,
				'vc_codigo_interno'=>'3399XX',
			],
			[
				'i_pk_id'=>6550,
				'vc_parametro_detalle'=>'Servicios de fortalecimiento a entidades sin ánimo de lucro.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1967,
				'vc_codigo_interno'=>'3399XX',
			],
			[
				'i_pk_id'=>6551,
				'vc_parametro_detalle'=>'Sedes dotadas para la operación.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1967,
				'vc_codigo_interno'=>'3399XX',
			],
			[
				'i_pk_id'=>6552,
				'vc_parametro_detalle'=>'Servicio de fortalecimiento al sistema de medios públicos.',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1967,
				'vc_codigo_interno'=>'3399XX',
			],*/
			[
				'i_pk_id'=>6559,
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1845,
				'vc_codigo_interno'=>'0199070'
			],
			[
				'i_pk_id'=>6560,
				'vc_parametro_detalle'=>'Servicio de apoyo a proyectos para la seguridad y justicia en las Zonas futuro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1847,
				'vc_codigo_interno'=>'0210026'
			],
			[
				'i_pk_id'=>6561,
				'vc_parametro_detalle'=>'Servicio de apoyo a proyectos para el desarrollo social en las Zonas Futuro',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1847,
				'vc_codigo_interno'=>'0210027'
			],
			[
				'i_pk_id'=>6562,
				'vc_parametro_detalle'=>'Servicio de apoyo a las unidades productivas para el autosostenimiento y seguridad alimentaria',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1858,
				'vc_codigo_interno'=>'0212012'
			],
			[
				'i_pk_id'=>6563,
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a activos productivos para proyectos de ciclo corto e ingreso rápido',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1858,
				'vc_codigo_interno'=>'0212013'
			],
			[
				'i_pk_id'=>6564,
				'vc_parametro_detalle'=>'Servicio de apoyo para el acceso a activos productivos para proyectos productivos con visión de largo plazo',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1858,
				'vc_codigo_interno'=>'0212014'
			],
			[
				'i_pk_id'=>6565,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de proyectos productivos y de autosostenimiento',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1858,
				'vc_codigo_interno'=>'0212015'
			],
			[
				'i_pk_id'=>6566,
				'vc_parametro_detalle'=>'Servicio de apoyo financiero a iniciativas de generación de ingresos para recolectores de cultivos ilícitos',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1858,
				'vc_codigo_interno'=>'0212016'
			],
			[
				'i_pk_id'=>6567,
				'vc_parametro_detalle'=>'Derecho de beneficio fiduciario',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1848,
				'vc_codigo_interno'=>'0299069'
			],
			[
				'i_pk_id'=>6568,
				'vc_parametro_detalle'=>'Documentos de investigación',
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1848,
				'vc_codigo_interno'=>'0299070'
			],
			[
				'i_pk_id'=>6569,
				'vc_parametro_detalle'=>'Estudios de preinversión',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1864,
				'vc_codigo_interno'=>'0301031'
			],
			[
				'i_pk_id'=>6570,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1862,
				'vc_codigo_interno'=>'0399068'
			],
			[
				'i_pk_id'=>6571,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1868,
				'vc_codigo_interno'=>'0499067'
			],
			[
				'i_pk_id'=>6572,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1872,
				'vc_codigo_interno'=>'0599071'
			],
			[
				'i_pk_id'=>6573,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1876,
				'vc_codigo_interno'=>'1199067'
			],
			[
				'i_pk_id'=>6574,
				'vc_parametro_detalle'=>'Documentos metodológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1888,
				'vc_codigo_interno'=>'1201004'
			],
			[
				'i_pk_id'=>6575,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en depuración normativa',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1888,
				'vc_codigo_interno'=>'1201005'
			],
			[
				'i_pk_id'=>6576,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en producción normativa',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1888,
				'vc_codigo_interno'=>'1201006'
			],
			[
				'i_pk_id'=>6577,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en la promoción y articulación de los servicios de justicia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202023'
			],
			[
				'i_pk_id'=>6578,
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para fortalecimiento de la justicia propia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202024'
			],
			[
				'i_pk_id'=>6579,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en fortalecimiento de justicia propia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202025'
			],
			[
				'i_pk_id'=>6580,
				'vc_parametro_detalle'=>'Servicio de atención de justicia itinerante',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202026'
			],
			[
				'i_pk_id'=>6581,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en transformación cultural para la adopción de modelos de gestión inclusivos en la justicia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202027'
			],
			 [
				'i_pk_id'=>6582,
				'vc_parametro_detalle'=>'Servicio de acompañamiento técnico para el desarrollo y promoción en la formación jurídica',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1885,
				'vc_codigo_interno'=>'1202028'
			],
			[
				'i_pk_id'=>6583,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la implementación de los métodos de solución de conflictos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1889,
				'vc_codigo_interno'=>'1203011'
			],
			[
				'i_pk_id'=>6584,
				'vc_parametro_detalle'=>'Servicio de educación informal en métodos alternativos de solución de conflictos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1889,
				'vc_codigo_interno'=>'1203012'
			],
			[
				'i_pk_id'=>6585,
				'vc_parametro_detalle'=>'Servicio de información actualizado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1889,
				'vc_codigo_interno'=>'1203013'
			],
			[
				'i_pk_id'=>6586,
				'vc_parametro_detalle'=>'Servicio de promoción del acceso a la justicia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1889,
				'vc_codigo_interno'=>'1203014'
			],
			[
				'i_pk_id'=>6587,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1883,
				'vc_codigo_interno'=>'1204014'
			],
			[
				'i_pk_id'=>6588,
				'vc_parametro_detalle'=>'Documentos de planeación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1883,
				'vc_codigo_interno'=>'1204015'
			],
			[
				'i_pk_id'=>6589,
				'vc_parametro_detalle'=>'Servicio itinerante de oferta interinstitucional en materia de justicia transicional',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1883,
				'vc_codigo_interno'=>'1204016'
			],
			[
				'i_pk_id'=>6590,
				'vc_parametro_detalle'=>'Servicio itinerante de oferta interinstitucional en materia de justicia transicional',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1883,
				'vc_codigo_interno'=>'1204017'
			],
			[
				'i_pk_id'=>6591,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la articulación de los mecanismos de justicia transicional',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1883,
				'vc_codigo_interno'=>'1204018'
			],
			[
				'i_pk_id'=>6592,
				'vc_parametro_detalle'=>'Servicio de educación informal en resocialización e inclusión social',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207013'
			],
			[
				'i_pk_id'=>6593,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la resocialización e inclusión social',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207014'
			],
			[
				'i_pk_id'=>6594,
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para el fortalecimiento de los sistemas de justicia propia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207015'
			],
			[
				'i_pk_id'=>6595,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica de enfoques diferenciales en los sistemas penales',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207016'
			],
			[
				'i_pk_id'=>6596,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en prevención del delito',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207017'
			],
			[
				'i_pk_id'=>6597,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en justicia restaurativa',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207018'
			],
			[
				'i_pk_id'=>6598,
				'vc_parametro_detalle'=>'Servicio de educación informal en justicia restaurativa ',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207019'
			],
			[
				'i_pk_id'=>6599,
				'vc_parametro_detalle'=>'Servicio de educación informal en alternatividad penal',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207023'
			],
			[
				'i_pk_id'=>6600,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en alternatividad penal',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207024'
			],
			[
				'i_pk_id'=>6601,
				'vc_parametro_detalle'=>'Servicio de educación informal en prevención del delito',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207025'
			],
			[
				'i_pk_id'=>6602,
				'vc_parametro_detalle'=>'Servicio de información de la gestión de operadores de justicia implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207027'
			],
			[
				'i_pk_id'=>6603,
				'vc_parametro_detalle'=>'Servicio de educación informal para la gestión administrativa de justicia',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1884,
				'vc_codigo_interno'=>'1207028'
			],
			[
				'i_pk_id'=>6604,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1882,
				'vc_codigo_interno'=>'1299067'
			],
			[
				'i_pk_id'=>6605,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1893,
				'vc_codigo_interno'=>'1399067'
			],
			[
				'i_pk_id'=>6606,
				'vc_parametro_detalle'=>'Servicio de información implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1899,
				'vc_codigo_interno'=>'1502143'
			],
			[
				'i_pk_id'=>6607,
				'vc_parametro_detalle'=>'Servicio de educación informal',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1899,
				'vc_codigo_interno'=>'1502144'
			],
			[
				'i_pk_id'=>6608,
				'vc_parametro_detalle'=>'Servicio satelital en operación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1899,
				'vc_codigo_interno'=>'1502145'
			],
			[
				'i_pk_id'=>6609,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1900,
				'vc_codigo_interno'=>'1599078'
			],
			[
				'i_pk_id'=>6610,
				'vc_parametro_detalle'=>'Servicio de fomento a la asociatividad',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1908,
				'vc_codigo_interno'=>'1702040'
			],
			[
				'i_pk_id'=>6611,
				'vc_parametro_detalle'=>'Documentos de evaluación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1908,
				'vc_codigo_interno'=>'1702041'
			],
			[
				'i_pk_id'=>6612,
				'vc_parametro_detalle'=>'Documentos de política',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1909,
				'vc_codigo_interno'=>'1799067'
			],
			[
				'i_pk_id'=>6613,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1909,
				'vc_codigo_interno'=>'1799068'
			],
			[
				'i_pk_id'=>6614,
				'vc_parametro_detalle'=>'Servicios de gestión territorial para atención en salud –pandemias-a población afectada por emergencias o desastres',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1915,
				'vc_codigo_interno'=>'1901179'
			],
			[
				'i_pk_id'=>6615,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1916,
				'vc_codigo_interno'=>'1999069'
			],
			[
				'i_pk_id'=>6616,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1923,
				'vc_codigo_interno'=>'2199069'
			],
			[
				'i_pk_id'=>6617,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1928,
				'vc_codigo_interno'=>'2299068'
			],
			[
				'i_pk_id'=>6618,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1932,
				'vc_codigo_interno'=>'2399067'
			],
			[
				'i_pk_id'=>6619,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1942,
				'vc_codigo_interno'=>'2499068'
			],
			[
				'i_pk_id'=>6620,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1946,
				'vc_codigo_interno'=>'2599067'
			],
			[
				'i_pk_id'=>6621,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1950,
				'vc_codigo_interno'=>'2799067'
			],
			[
				'i_pk_id'=>6622,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1952,
				'vc_codigo_interno'=>'2899068'
			],
			[
				'i_pk_id'=>6623,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1955,
				'vc_codigo_interno'=>'2999069'
			],
			[
				'i_pk_id'=>6624,
				'vc_parametro_detalle'=>'Servicio de educación formal en el marco de la información y el conocimiento ambiental',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1959,
				'vc_codigo_interno'=>'3204057'
			],
			[
				'i_pk_id'=>6625,
				'vc_parametro_detalle'=>'Servicio de información sobre deforestación implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1959,
				'vc_codigo_interno'=>'3204058'
			],
			[
				'i_pk_id'=>6626,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos para el desarrollo de la política ambiental',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1965,
				'vc_codigo_interno'=>'3208009'
			],
			[
				'i_pk_id'=>6627,
				'vc_parametro_detalle'=>'Servicio de educación informal ambiental',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1965,
				'vc_codigo_interno'=>'3208010'
			],
			[
				'i_pk_id'=>6628,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1963,
				'vc_codigo_interno'=>'3299066'
			],
			[
				'i_pk_id'=>6629,
				'vc_parametro_detalle'=>'Servicio de evaluación de instrumentos archivísticos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1966,
				'vc_codigo_interno'=>'3302074'
			],
			[
				'i_pk_id'=>6630,
				'vc_parametro_detalle'=>'Servicio de gestión documental a entidades públicas y privadas del orden nacional y/o territorial',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1966,
				'vc_codigo_interno'=>'3302075'
			],
			[
				'i_pk_id'=>6631,
				'vc_parametro_detalle'=>'Servicio de desarrollo tecnológico e innovación de archivos electrónicos ',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1966,
				'vc_codigo_interno'=>'3302076'
			],
			[
				'i_pk_id'=>6632,
				'vc_parametro_detalle'=>'Servicio de información del patrimonio documental archivístico',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1966,
				'vc_codigo_interno'=>'3302077'
			],
			[
				'i_pk_id'=>6633,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1967,
				'vc_codigo_interno'=>'3399066'
			],
			[
				'i_pk_id'=>6634,
				'vc_parametro_detalle'=>'Servicios jurisdiccionales para la atención de procesos de insolvencia empresarial',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1970,
				'vc_codigo_interno'=>'3503028'
			],
			[
				'i_pk_id'=>6635,
				'vc_parametro_detalle'=>'Documentos normativos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1970,
				'vc_codigo_interno'=>'3503029'
			],
			[
				'i_pk_id'=>6636,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1970,
				'vc_codigo_interno'=>'3503030'
			],
			[
				'i_pk_id'=>6637,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1972,
				'vc_codigo_interno'=>'3599927'
			],
			[
				'i_pk_id'=>6638,
				'vc_parametro_detalle'=>'Servicio de Apoyo Financiero para la Compensación al Impuesto del Valor Agregado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1977,
				'vc_codigo_interno'=>'3601013'
			],
			[
				'i_pk_id'=>6639,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica para la equidad laboral con enfoque de género',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1978,
				'vc_codigo_interno'=>'3604028'
			],
			[
				'i_pk_id'=>6640,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1973,
				'vc_codigo_interno'=>'3699066'
			],
			[
				'i_pk_id'=>6641,
				'vc_parametro_detalle'=>'Servicio de información implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1981,
				'vc_codigo_interno'=>'3702025'
			],
			[
				'i_pk_id'=>6642,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1984,
				'vc_codigo_interno'=>'3799064'
			],
			[
				'i_pk_id'=>6643,
				'vc_parametro_detalle'=>'Servicios de estandarización de pruebas y calibraciones de laboratorios',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1991,
				'vc_codigo_interno'=>'3902019'
			],
			[
				'i_pk_id'=>6644,
				'vc_parametro_detalle'=>'Servicios de apoyo para la transferencia de conocimiento y tecnología',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1991,
				'vc_codigo_interno'=>'3902020'
			],
			[
				'i_pk_id'=>6645,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1989,
				'vc_codigo_interno'=>'3999064'
			],
			[
				'i_pk_id'=>6646,
				'vc_parametro_detalle'=>'Vivienda de Interés Prioritario construidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001039'
			],
			[
				'i_pk_id'=>6647,
				'vc_parametro_detalle'=>'Vivienda de Interés Prioritario construidas en sitio propio',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001040'
			],
			[
				'i_pk_id'=>6648,
				'vc_parametro_detalle'=>'Vivienda de Interés Prioritario mejoradas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001041'
			],
			[
				'i_pk_id'=>6649,
				'vc_parametro_detalle'=>'Vivienda de Interés Social construidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001042'
			],
			[
				'i_pk_id'=>6650,
				'vc_parametro_detalle'=>'Vivienda de Interés Social construidas en sitio propio',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001043'
			],
			[
				'i_pk_id'=>6651,
				'vc_parametro_detalle'=>'Vivienda de Interés Social mejoradas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1996,
				'vc_codigo_interno'=>'4001044'
			],
			[
				'i_pk_id'=>6652,
				'vc_parametro_detalle'=>'Servicio de suministro de agua',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1993,
				'vc_codigo_interno'=>'4003048'
			],
			[
				'i_pk_id'=>6653,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1995,
				'vc_codigo_interno'=>'4099064'
			],
			[
				'i_pk_id'=>6654,
				'vc_parametro_detalle'=>'Servicio de apoyo para el mejoramiento de condiciones físicas o dotación de vivienda de hogares  vulnerables rurales',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1997,
				'vc_codigo_interno'=>'4103062'
			],
			[
				'i_pk_id'=>6655,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1997,
				'vc_codigo_interno'=>'4103063'
			],
			[
				'i_pk_id'=>6656,
				'vc_parametro_detalle'=>'Documentos de evaluación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1997,
				'vc_codigo_interno'=>'4103064'
			],
			[
				'i_pk_id'=>6657,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>1999,
				'vc_codigo_interno'=>'4199065'
			],
			[
				'i_pk_id'=>6658,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>2004,
				'vc_codigo_interno'=>'4399064'
			],
			[
				'i_pk_id'=>6659,
				'vc_parametro_detalle'=>'Servicios de prospección de lugares y recuperación de cuerpos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>2009,
				'vc_codigo_interno'=>'4403010'
			],
			[
				'i_pk_id'=>6660,
				'vc_parametro_detalle'=>'Servicio de seguimiento al proceso de identificación humana ',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>2009,
				'vc_codigo_interno'=>'4403011'
			],
			[
				'i_pk_id'=>6661,
				'vc_parametro_detalle'=>'Servicio de asesoría y orientación  en la participación del proceso de búsqueda',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>2009,
				'vc_codigo_interno'=>'4403012'
			],
			[
				'i_pk_id'=>6662,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>2006,
				'vc_codigo_interno'=>'4499023'
			],
			[
				'i_pk_id'=>6663,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501001'
			],
			[
				'i_pk_id'=>6664,
				'vc_parametro_detalle'=>'Escuelas territoriales de convivencia ciudadana construidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501003'
			],
			[
				'i_pk_id'=>6665,
				'vc_parametro_detalle'=>'Servicio de promoción de convivencia y no repetición',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501004'
			],
			[
				'i_pk_id'=>6666,
				'vc_parametro_detalle'=>'Coso municipal ampliado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501005'
			],
			[
				'i_pk_id'=>6667,
				'vc_parametro_detalle'=>'Servicio de protección individual en riesgo extraordinario y extremo',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501006'
			],
			[
				'i_pk_id'=>6668,
				'vc_parametro_detalle'=>'Servicio información implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501007'
			],
			[
				'i_pk_id'=>6669,
				'vc_parametro_detalle'=>'Servicio de información actualizado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501008'
			],
			[
				'i_pk_id'=>6670,
				'vc_parametro_detalle'=>'Servicio de sanidad animal en el coso municipal',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501009'
			],
			[
				'i_pk_id'=>6671,
				'vc_parametro_detalle'=>'Coso municipal construido y dotado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501010'
			],
			[
				'i_pk_id'=>6672,
				'vc_parametro_detalle'=>'Documentos Planeacion',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501026'
			],
			[
				'i_pk_id'=>6673,
				'vc_parametro_detalle'=>'Servicio de educación informal en seguridad y convivencia ciudadana ',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501027'
			],
			[
				'i_pk_id'=>6674,
				'vc_parametro_detalle'=>'Servicio de vigilancia a través de cámaras de seguridad',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501028'
			],
			[
				'i_pk_id'=>6675,
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para proyectos de convivencia y seguridad ciudadana',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501029'
			],
			[
				'i_pk_id'=>6676,
				'vc_parametro_detalle'=>'Servicio de vigilancia a través de aeronaves remotamente tripuladas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501030'
			],
			[
				'i_pk_id'=>6677,
				'vc_parametro_detalle'=>'Documentos normativos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501031'
			],
			[
				'i_pk_id'=>6678,
				'vc_parametro_detalle'=>'Servicio de atención de seguridad y emergencias de los Centros de Información Estratégica Policía Seccional',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501032'
			],
			[
				'i_pk_id'=>6679,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia ampliada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501037'
			],
			[
				'i_pk_id'=>6680,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia con reforzamiento estructural',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501038'
			],
			[
				'i_pk_id'=>6681,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia modificada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501039'
			],
			[
				'i_pk_id'=>6682,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia construida',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501040'
			],
			[
				'i_pk_id'=>6683,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501041'
			],
			[
				'i_pk_id'=>6684,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia construida y dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501042'
			],
			[
				'i_pk_id'=>6685,
				'vc_parametro_detalle'=>'Infraestructura para la promoción a la cultura de la legalidad y a la convivencia adecuada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501043'
			],
			[
				'i_pk_id'=>6686,
				'vc_parametro_detalle'=>'Documentos metodológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501044'
			],
			[
				'i_pk_id'=>6687,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501045'
			],
			[
				'i_pk_id'=>6688,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6555,	
				'vc_codigo_interno'=>'4501046'
			],
			[
				'i_pk_id'=>6689,
				'vc_parametro_detalle'=>'Servicio de promoción a la participación ciudadana',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502001'
			],
			[
				'i_pk_id'=>6690,
				'vc_parametro_detalle'=>'Salón comunal construido y dotado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502002'
			],
			[
				'i_pk_id'=>6691,
				'vc_parametro_detalle'=>'Salón comunal adecuado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502003'
			],
			[
				'i_pk_id'=>6692,
				'vc_parametro_detalle'=>'Salón comunal ampliado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502004'
			],
			[
				'i_pk_id'=>6693,
				'vc_parametro_detalle'=>'Salón comunal con reforzamiento estructural',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502005'
			],
			[
				'i_pk_id'=>6694,
				'vc_parametro_detalle'=>'Salón comunal modificado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502006'
			],
			[
				'i_pk_id'=>6695,
				'vc_parametro_detalle'=>'Salón comunal construido',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502007'
			],
			[
				'i_pk_id'=>6696,
				'vc_parametro_detalle'=>'Salón comunal dotado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502008'
			],
			[
				'i_pk_id'=>6697,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana construida y dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502009'
			],
			[
				'i_pk_id'=>6698,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana adecuada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502010'
			],
			[
				'i_pk_id'=>6699,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana ampliada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502011'
			],
			[
				'i_pk_id'=>6700,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana con reforzamiento estructural',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502012'
			],
			[
				'i_pk_id'=>6701,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana modificada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502013'
			],
			[
				'i_pk_id'=>6702,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana construida',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502014'
			],
			[
				'i_pk_id'=>6703,
				'vc_parametro_detalle'=>'Oficina para la atención y orientación ciudadana dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502015'
			],
			[
				'i_pk_id'=>6704,
				'vc_parametro_detalle'=>'Servicio de información implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502016'
			],
			[
				'i_pk_id'=>6705,
				'vc_parametro_detalle'=>'Servicio de información actualizado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502017'
			],
			[
				'i_pk_id'=>6706,
				'vc_parametro_detalle'=>'Servicio de archivo sobre violaciones de derechos humanos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502018'
			],
			[
				'i_pk_id'=>6707,
				'vc_parametro_detalle'=>'Servicio de prevención a violaciones de derechos humanos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502019'
			],
			[
				'i_pk_id'=>6708,
				'vc_parametro_detalle'=>'Servicio de información estadística en temas de Derechos Humanos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502020'
			],
			[
				'i_pk_id'=>6709,
				'vc_parametro_detalle'=>'Servicio de apoyo financiero para la implementación de proyectos en materia de derechos humanos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502021'
			],
			[
				'i_pk_id'=>6710,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502022'
			],
			[
				'i_pk_id'=>6711,
				'vc_parametro_detalle'=>'Servicio de apoyo para la implementación de medidas en derechos humanos y derecho internacional humanitario',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502024'
			],
			[
				'i_pk_id'=>6712,
				'vc_parametro_detalle'=>'Servicio de organización de procesos electorales',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502025'
			],
			[
				'i_pk_id'=>6713,
				'vc_parametro_detalle'=>'Documentos normativos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502026'
			],
			[
				'i_pk_id'=>6714,
				'vc_parametro_detalle'=>'Servicio de información de seguimiento territorial a la política pública de victimas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502027'
			],
			[
				'i_pk_id'=>6715,
				'vc_parametro_detalle'=>'Servicio de educación informal en Derechos Humanos, Derecho Internacional Humanitario y organizaciones étnicas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502028'
			],
			[
				'i_pk_id'=>6716,
				'vc_parametro_detalle'=>'Documentos metodológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502029'
			],
			[
				'i_pk_id'=>6717,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502030'
			],
			[
				'i_pk_id'=>6718,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6556,	
				'vc_codigo_interno'=>'4502032'
			],
			[
				'i_pk_id'=>6719,
				'vc_parametro_detalle'=>'Servicio de educación informal',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503002'
			],
			[
				'i_pk_id'=>6720,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503003'
			],
			[
				'i_pk_id'=>6721,
				'vc_parametro_detalle'=>'Servicio de atención a emergencias y desastres',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503004'
			],
			[
				'i_pk_id'=>6722,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal construida y dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503005'
			],
			[
				'i_pk_id'=>6723,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal adecuada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503006'
			],
			[
				'i_pk_id'=>6724,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal ampliada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503007'
			],
			[
				'i_pk_id'=>6725,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal con reforzamiento estructural',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503008'
			],
			[
				'i_pk_id'=>6726,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal modificada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503009'
			],
			[
				'i_pk_id'=>6727,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal construida',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503010'
			],
			[
				'i_pk_id'=>6728,
				'vc_parametro_detalle'=>'Infraestructura para alojamiento temporal dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503011'
			],
			[
				'i_pk_id'=>6729,
				'vc_parametro_detalle'=>'Servicio de orientación y comunicación a las víctimas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503012'
			],
			[
				'i_pk_id'=>6730,
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a Cuerpos de Bomberos ',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503013'
			],
			[
				'i_pk_id'=>6731,
				'vc_parametro_detalle'=>'Estaciones de bomberos adecuadas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503014'
			],
			[
				'i_pk_id'=>6732,
				'vc_parametro_detalle'=>'Estaciones de bomberos construidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503015'
			],
			[
				'i_pk_id'=>6733,
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a las salas de crisis territorial',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503016'
			],
			[
				'i_pk_id'=>6734,
				'vc_parametro_detalle'=>'Estudios de riesgo de desastres',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503017'
			],
			[
				'i_pk_id'=>6735,
				'vc_parametro_detalle'=>'Servicio de monitoreo y seguimiento para la gestión del riesgo',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503018'
			],
			[
				'i_pk_id'=>6736,
				'vc_parametro_detalle'=>'Servicios de información implementados',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503019'
			],
			[
				'i_pk_id'=>6737,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en formulación de instrumentos de planificación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503020'
			],
			[
				'i_pk_id'=>6738,
				'vc_parametro_detalle'=>'Servicio de fortalecimiento a Seccionales de Defensa Civil',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503021'
			],
			[
				'i_pk_id'=>6739,
				'vc_parametro_detalle'=>'Obras de infraestructura para la reducción del riesgo de desastres',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503022'
			],
			[
				'i_pk_id'=>6740,
				'vc_parametro_detalle'=>'Documentos de planeación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503023'
			],
			[
				'i_pk_id'=>6741,
				'vc_parametro_detalle'=>'Documentos normativos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503024'
			],
			[
				'i_pk_id'=>6742,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica en protección financiera',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503025'
			],
			[
				'i_pk_id'=>6743,
				'vc_parametro_detalle'=>'Centros logísticos construidos y dotados',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503026'
			],
			[
				'i_pk_id'=>6744,
				'vc_parametro_detalle'=>'Servicios de apoyo para atención de  población afectada por situaciones de emergencia, desastre o declaratorias de calamidad pública',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503028'
			],
			[
				'i_pk_id'=>6745,
				'vc_parametro_detalle'=>'Documentos metodológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503029'
			],
			[
				'i_pk_id'=>6746,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503030'
			],
			[
				'i_pk_id'=>6747,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503031'
			],
			[
				'i_pk_id'=>6748,
				'vc_parametro_detalle'=>'Servicio de información actualizado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503032'
			],
			[
				'i_pk_id'=>6749,
				'vc_parametro_detalle'=>'Servicio de información implementado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6557,	
				'vc_codigo_interno'=>'4503033'
			],
			[
				'i_pk_id'=>6750,
				'vc_parametro_detalle'=>'Documentos de evaluación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599001'
			],
			[
				'i_pk_id'=>6751,
				'vc_parametro_detalle'=>'Servicio de saneamiento fiscal y financiero',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599002'
			],
			[
				'i_pk_id'=>6752,
				'vc_parametro_detalle'=>'Servicio de reeestructuracion de pasivos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599003'
			],
			[
				'i_pk_id'=>6753,
				'vc_parametro_detalle'=>'Servicio de asistencia técnica',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599004'
			],
			[
				'i_pk_id'=>6754,
				'vc_parametro_detalle'=>'Documento para la planeación estratégica en TI',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599005'
			],
			[
				'i_pk_id'=>6755,
				'vc_parametro_detalle'=>'Estudios de preinversión',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599006'
			],
			[
				'i_pk_id'=>6756,
				'vc_parametro_detalle'=>'Servicios tecnológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599007'
			],
			[
				'i_pk_id'=>6757,
				'vc_parametro_detalle'=>'Sede construida y dotada',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599008'
			],
			[
				'i_pk_id'=>6758,
				'vc_parametro_detalle'=>'Sedes construidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599009'
			],
			[
				'i_pk_id'=>6759,
				'vc_parametro_detalle'=>'Sedes ampliadas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599010'
			],
			[
				'i_pk_id'=>6760,
				'vc_parametro_detalle'=>'Sedes adecuadas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599011'
			],
			[
				'i_pk_id'=>6761,
				'vc_parametro_detalle'=>'Sedes modificadas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599012'
			],
			[
				'i_pk_id'=>6762,
				'vc_parametro_detalle'=>'Sedes restauradas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599013'
			],
			[
				'i_pk_id'=>6763,
				'vc_parametro_detalle'=>'Sedes con reforzamiento estructural',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599014'
			],
			[
				'i_pk_id'=>6764,
				'vc_parametro_detalle'=>'Sedes adquiridas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599015'
			],
			[
				'i_pk_id'=>6765,
				'vc_parametro_detalle'=>'Sedes mantenidas',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599016'
			],
			[
				'i_pk_id'=>6766,
				'vc_parametro_detalle'=>'Servicio de gestión documental',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599017'
			],
			[
				'i_pk_id'=>6767,
				'vc_parametro_detalle'=>'Documentos de lineamientos técnicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599018'
			],
			[
				'i_pk_id'=>6768,
				'vc_parametro_detalle'=>'Documentos de planeación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599019'
			],
			[
				'i_pk_id'=>6769,
				'vc_parametro_detalle'=>'Documentos metodológicos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599020'
			],
			[
				'i_pk_id'=>6770,
				'vc_parametro_detalle'=>'Documentos normativos',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599021'
			],
			[
				'i_pk_id'=>6771,
				'vc_parametro_detalle'=>'Servicio de Educación Informal para la Gestión Administrativa',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599022'
			],
			[
				'i_pk_id'=>6772,
				'vc_parametro_detalle'=>'Servicio de Implementación Sistemas de Gestión',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599023'
			],
			[
				'i_pk_id'=>6773,
				'vc_parametro_detalle'=>'Servicios de información implementados',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599025'
			],
			[
				'i_pk_id'=>6774,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599026'
			],
			[
				'i_pk_id'=>6775,
				'vc_parametro_detalle'=>'Documentos de investigación',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599027'
			],
			[
				'i_pk_id'=>6776,
				'vc_parametro_detalle'=>'Servicio de información actualizado',	
				'i_fk_id_parametro'=>46,
				'i_estado'=>1,
				'i_fk_id_padre'=>6558,	
				'vc_codigo_interno'=>'4599028'
			],
        ]);
    }
}