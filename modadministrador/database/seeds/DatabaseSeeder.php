<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
      // $this->call(ModulosSeeder::class);
      // $this->call(TipoPersonaSeeder::class);
      // $this->call(ActividadesSeeder::class);

      // $this->call(ParametrosSeeder::class);
      // $this->call(ParametrosDetallesSeeder::class);
      // $this->call(AreaTableSeeder::class);

      // $this->call(UsuarioSeeder::class);
      // $this->call(TipoPersonaSeeder::class);
      // $this->call(PersonaTipoSeeder::class);

      // $this->call(TipoActividadesSeeder::class);
      
      //$this->call(ParametrosProyectosSeeder::class);
      //$this->call(ParametrosDetallesProyectosSeeder::class);
      
      //$this->call(EtapaProyectoSeeder::class);
      //$this->call(DetallesEtapaProyectoSeeder::class);

      //$this->call(TipoMetaProyectoSeeder::class);
      //$this->call(DetallesTipoMetaProyectoSeeder::class);

      /*DIMENSIONES*/
      //$this->call(DimensionesSeguimientoProyectoSeeder::class);
      //$this->call(DetallesDimensionesSeguimientoProyectoSeeder::class);

      /*TIPOLOGÍA*/
      //$this->call(TipologiasSeguimientoProyectoSeeder::class);
      //$this->call(DetallesTipologiasSeguimientoProyectoSeeder::class);

      /*ENFOQUE DIFERENCIAL*/
      //$this->call(EnfoqueDiferencialSeguimientoProyectoSeeder::class);
      //$this->call(DetallesEnfoqueSeguimientoProyectoSeeder::class);

      /*UPZ-UPR*/
      //$this->call(UpzUprSeguimientoProyectoSeeder::class);
      //$this->call(DetallesUpzUprSeguimientoProyectoSeeder::class);

      /*IMPACTO TERRITORIAL*/
      //$this->call(ImpactoTerritorialSeguimientoProyectoSeeder::class);
      //$this->call(DetallesImpactoSeguimientoProyectoSeeder::class);

      /*ORIGEN DE LA INICIATIVA*/
      //$this->call(IniciativaSeguimientoProyectoSeeder::class);
      //$this->call(DetallesIniciativaSeguimientoProyectoSeeder::class);

      /*MODALIDAD USO EQUIPAMIENTO*/
      //$this->call(ModalidadEquipamientoSeguimientoProyectoSeeder::class);
      //$this->call(DetallesEquipamientoSeguimientoProyectoSeeder::class);

      /*LOCALIDADES --- Ya existe en parámetro detalles.*/ 
      //$this->call(LocalidadesSeguimientoProyectoSeeder::class);
      //$this->call(DetallesLocalidadesSeguimientoProyectoSeeder::class);

      /*CATEGORÍAS*/ 
      //$this->call(ConcursoActividadEstimuloSeeder::class);
      //$this->call(DetallesConcursoActividadEstimuloSeeder::class);

      /*TIPO ESTÍMULOS*/ 
      //$this->call(TipoEstimuloActividadEstimuloSeeder::class);
      //$this->call(DetallesTipoEstimuloActividadEstimuloSeeder::class);

      /*SUBCAMPO DE LAS ARTES*/ 
      //$this->call(SubcampoArtesActividadEstimuloSeeder::class);
      //$this->call(DetallesSubcampoArtesActividadEstimuloSeeder::class);

      /*MODALIDAD DE PARTICIPACIÓN*/ 
      //$this->call(ModParticipacionActividadEstimuloSeeder::class);
      //$this->call(DetallesModParticipacionActividadEstimuloSeeder::class);

      /*NOVEDAD DEL ESTÍMULO*/ 
      //$this->call(NovedadEstimuloActividadEstimuloSeeder::class);
      //$this->call(DetallesNovedadEstimuloActividadEstimuloSeeder::class);

      /*SUBAREAS DE CONTRATOS*/
      // $this->call(ParametroSubAreaContratosSeeder::class);
      // $this->call(ParametroDetalleSubAreaContratosSeeder::class);      

      //$this->call(DiasNoHabilesSeeder::class);      

      /*GRUPOS DE TRABAJO*/
      //$this->call(GrupoTrabajoSeeder::class);
      
      /*TIPO FUENTE VERIFICACIÓN*/
      //$this->call(TipoFuenteVerificacionSeeder::class);
      //$this->call(DetallesFuenteTipoVerificacionSeeder::class);

      /*TIPO DE RIESGO*/
      //$this->call(TipoRiesgoSeeder::class);
      //$this->call(DetalleTipoRiesgoSeeder::class);

      /*SECTOR*/
      //$this->call(SectorSeeder::class);
      //$this->call(DetalleSectorSeeder::class);

      /*PROGRAMA*/
      //$this->call(ProgramaSeeder::class);
      //$this->call(DetalleProgramaSeeder::class);

      /*PRODUCTO*/
      //$this->call(ProductoSeeder::class);
      //$this->call(DetalleProductoSeeder::class);

      /*TIPO DE BIEN*/
      //$this->call(TipoBienSeeder::class);
      //$this->call(DetalleTipoBienSeeder::class);
      //$this->call(DetalleProductoSeeder::class);

      /*INSUMOS MGA*/
      //$this->call(InsumoMgaSeeder::class);
      //$this->call(DetalleInsumoMgaSeeder::class); 
      
      /*TIPOS DE PROCESOS SIG*/
      //$this->call(TipoProcesosSeeder::class);
      //$this->call(DetalleTipoProcesosSeeder::class);        
      
      /*TIPOS DE PROCESOS SIG*/
      //$this->call(SimbolosSeeder::class);
      //$this->call(DetalleSimbolosSeeder::class);  
      $this->call(PoliticaTransversalSeeder::class);   
      $this->call(DetallePoliticaTransversalSeeder::class);            
      

    }
}
