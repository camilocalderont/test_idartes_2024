<?php

return array( 
 
  'conexion' => 'db_principal', 
  'conexionadm' => 'baseadmin', 
  'modulo' => '1', 
  'seccion' => 'Personas', 
  'prefijo_ruta' => 'personas', 
  'prefijo_ruta_modulo' => 'actividad', 
 
  'modelo_user' => 'idartes\usuario\User',
  'modelo_tipo' => 'idartes\usuario\Tipo', 
  'modelo_darametrodetalles' => 'idartes\usuario\ParametroDetalles', 
  'modelo_actividad' => 'idartes\usuario\Actividad',  
  'modelo_modulo' => 'idartes\usuario\Modulo', 
  
   
  //vistas que carga las vistas 
  'vista_lista' => 'list', 
 

 
 
);