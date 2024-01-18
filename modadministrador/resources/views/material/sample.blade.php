{{--
|--------------------------------------------------------------------------
| Extends
|--------------------------------------------------------------------------
|
| Hereda los estilos y srcipts de la de la plantilla original.
| Es la base para todas las páginas que se deseen crear.
|
--}}
@extends('material.layouts.dashboard2')

{{--
|--------------------------------------------------------------------------
| Styles
|--------------------------------------------------------------------------
|
| Inyecta CSS requerido ya sea por un JS o para un elemento específico
|
| @push('styles')
|
| @endpush
--}}
@push('styles')
    <link href="{{-- asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') --}}" rel="stylesheet" type="text/css" />
@endpush

<?php use Illuminate\Support\Facades\Crypt;
?>


{{--
|--------------------------------------------------------------------------
| Page Title
|--------------------------------------------------------------------------
|
| Inyecta el título a la sección del contenido de página.
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-title', $miVariable)
| @section('page-title', 'Título')
|
|
--}}
@section('page-title', 'PANDORA')
{{--
|--------------------------------------------------------------------------
| Page Description
|--------------------------------------------------------------------------
|
| Inyecta una breve descripción a la sección del contenido de página.
| Recibe texto o variables de los controladores o se puede dejar sin datos
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-description', $miVariable)
| @section('page-description', 'Título')
--}}

@section('page-description', 'módulos con permisos para gestiónar procesos.')

{{--
|--------------------------------------------------------------------------
| Content
|--------------------------------------------------------------------------
|
| Inyecta el contenido HTML que se usará en la página
|
| @section('content')
|
| @endsection
--}}
@section('content')
    <div class="col-md-12" id="main" data-url="{{URL::to('/')}}">
        {{-- BEGIN HTML SAMPLE --}}

      <div class="page-bar">
        <div class="col-md-12">
         
          <h5 class="caption bold uppercase">
            <i class="fa fa-check-circle" aria-hidden="true"></i> 
            Módulos con permisos
          </h5>
        </div>
      </div>

      <div class="row">
        @if($modulos_activos)
          @foreach($modulos_activos as $modulo_activo)
          <div class="col-12 col-md-6">
                @component('themes.bootstrap.components.panelModulo', ['icon' => 'icon-layers', 'title' => $modulo_activo->vc_modulo,'contenido'=>$modulo_activo->tx_descripcion, 'ruta'=>$modulo_activo->vc_redireccion ,'id'=>$id, 'imagen'=>$modulo_activo->vc_imagen, 'actividades'=>$actividades, 'id_modulo'=>Crypt::encryptString($modulo_activo->i_pk_id), 'disabled'=>'', 'class'=>'panel-dark modulo-pandora'])
                @endcomponent
          </div>
          @endForeach
        @endif
      </div> 

      <div class="page-bar">
        <div class="col-md-12">
          
          <h5 class="caption bold uppercase">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
            Módulos sin permisos
          </h5>
        </div>
      </div> 

      <div class="row">
        @if($modulos_sin_permisos)
          @foreach($modulos_sin_permisos as $modulo_sin_permiso)
            <div class="col-12 col-md-4">
                  @component('themes.bootstrap.components.panelModulo', ['icon' => 'icon-layers', 'title' => $modulo_sin_permiso->vc_modulo,'contenido'=>$modulo_sin_permiso->tx_descripcion, 'ruta'=>$modulo_sin_permiso->vc_redireccion, 'id'=>$id, 'imagen'=>$modulo_sin_permiso->vc_imagen,  'actividades'=>$actividades, 'id_modulo'=>Crypt::encryptString($modulo_sin_permiso->i_pk_id), 'disabled'=>'disabled', 'class'=>'panel-dark modulo-pandora'])
                  @endcomponent
            </div>
          @endForeach
        @endif
      </div>              

        {{-- END HTML SAMPLE --}}
    </div>
@endsection

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts necesarios para usar plugins
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}

@push('functions')
   <script src="{{ asset('js/auditoria/loglogin.js?v=2019-04-17') }}" type="text/javascript"></script>
@endpush

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts para inicializar componentes Javascript como
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}
@push('functions')
    {{--
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    --}}
@endpush