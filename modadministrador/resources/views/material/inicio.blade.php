{{--
|--------------------------------------------------------------------------
| Extends
|--------------------------------------------------------------------------
|
| Hereda los estilos y srcipts de la de la plantilla original.
| Es la base para todas las páginas que se deseen crear.
|
--}}
@extends('material.layouts.dashboard')

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
    <link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />
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
@section('page-title', 'SIMID')
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
    <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}


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
    <script src="{{-- {{ asset('ruta/del/archivo/js') }} --}}" type="text/javascript"></script>
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
@component('themes.bootstrap.components.boton_manual',['ruta'=>'#'])
@endcomponent
@push('functions')
<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
<script>
    @if (session('title'))
        swal({
            'title': `{{ session('title') }}`,
            'html': `{{ session('message') }}`, 
            'type': `{{ session('type') }}`
        })
    @endif
</script>
<script>
    $(function() {
        const tour = new Shepherd.Tour({
            defaultStepOptions: {
                cancelIcon: {
                    enabled: true
                },
                classes: 'shadow-md bg-purple-dark',
                scrollTo: { behavior: 'smooth', block: 'center' }
            },
            useModalOverlay: true
        });

        tour.addStep({
            title: 'Módulo administrador',
            text: '<p>En el módulo administrador encontrará el vínculo a las herramientas que le permitirán:'+
                    '<ul>'+
                        '<li>Gestionar los usuarios con sus respectivos niveles de acceso.</li>'+
                        '<li>Configuración y parametrización de los distintos módulos que hacen parte del sistema Pandora.</li>'+
                        '<li>Auditoría de las transacciones realizadas por los usuarios en las bases de datos del sistema.</li>'+
                    '</ul>'+
                  '</p>',
            attachTo: {
                element: '.dropdown-user',
                on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                text: 'Siguiente',
                action: tour.next
                }
            ],
            id: 'step_0',
        })

        tour.addStep({
            title: 'Gestión de usuarios',
            text: '<p>Crear y editar usuarios, con el fin de controlar y administrar los registros de usuarios incorporados a través del Módulo Administrador, por parte del o los responsables de administrar el módulo.</p>',
            attachTo: {
                element: '.page-sidebar-menu li:nth-child(1)',
                on: 'right'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                text: 'Siguiente',
                action: tour.next
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Configuración',
            text: '<p>Asociar los usuarios, (personas) a los diferentes módulos del sistema, articulando la gestión de actividades a la gestión de cargos a través de los parámetros establecidos.</p>',
            attachTo: {
                element: '.page-sidebar-menu li:nth-child(2)',
                on: 'right'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        //$('#menu_501-Configuracion a').click();
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_2',
        });
        
        tour.addStep({
            title: 'Auditoría',
            text: '<p>Identificar validar las modificaciones a las diferentes tablas que se requieren desde la ingeniería del software, así como, la verificación de ingresos de usuarios por medio de Login.</p>',
            attachTo: {
                element: '#menu_502-Auditoria',
                on: 'right'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.complete();
                    },
                    text: 'Terminar'
                }
            ],
            id: 'step_3',
        });

        $('#manual').on('click', function(e) {
            e.preventDefault();
            tour.start();
        });
    });
</script>

@endpush