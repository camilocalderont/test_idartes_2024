@extends('material.layouts.dashboard')


@push('styles')
    <!-- Select picker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Radio Styae -->
    <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datatables Styles -->
    <link href="{{ asset('bower_components/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bower_components/datatables.net-buttons-dt/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css"> 

    <!-- Modal Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" /> 

    <!-- DatePicker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"> 


    <style>
 
        .DTTT_button_copy div{
            z-index: 5000 !important;
        }

        .DTTT_button_csv div{
            z-index: 5001 !important;
        }

        .DTTT_button_xls div{
            z-index: 5002 !important;
        }

        .DTTT_button_pdf div{
            z-index: 5003 !important;
        }

        .DTTT_button_print div{
            z-index: 5004 !important;
        }
        .portlet.light .dataTables_wrapper .dt-buttons {
            margin-top: 0px !important;
            position: relative !important;
            float: left !important;
        }
        .w-320{
            min-width: 320px;
        }

    </style>

@endpush

@section('page-title', 'Usuarios - Grupos de Trabajo')

@section('content')

<div class="portlet light" id="main" data-url="{{URL::to('/')}}">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <span class="caption-subject bold uppercase"> Asociación Usuarios - Grupos de Trabajo</span>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="form-body">
            <div class="row mb-1">
                <div class="col-md-offset-1 col-md-10">
                    <div class="form-gruop form-md-line-input has-info">
                        {!!Form::select('unidades_gestion',$unidades,null,[
                            'class'=>'selectpicker form-control',
                            'data-live-search'=>'true',
                            'id'=>'unidades_gestion',                                
                            'data-live-search'=>'true',
                            'placeholder'=>'Unidades de Gestión'])!!}
                    </div>
                </div>          
            </div>
            <div class="row mb-1">
                <div class="col-md-offset-1 col-md-10">
                    <div class="form-gruop form-md-line-input has-info">
                        {!!Form::select('sub_unidades_gestion',[],null,
                            [
                                'class'=>'form-control selectpicker',
                                'title'=>'Sub Unidades de Gestión',
                                'id'=>'sub_unidades_gestion',
                                'data-live-search'=>'true',
                                'placeholder'=>'Sub Unidades de Gestión',
                            ])!!}                    
                    </div>    
                </div>
            </div>
            <div class="row mb-1">
               <div class="col-md-offset-1 col-md-10">
                    <div class="form-gruop form-md-line-input has-info">
                        {!!Form::select('grupos_trabajo',[], null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Grupos de Trabajo','id'=>'grupos_trabajo'])!!}                                                    
                    </div>                                   
                </div>            
            </div>
        </div>
    </div>
</div>
<div class="portlet light" id="contenedorTablaUsuarios">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-th-list" aria-hidden="true"></i> Listado de Usuarios Asociados </div>
        <div class="tools">
            <button class="btn green fa fa-plus" id="agregar-usuario" data-target="#formulario-crear-usuario" data-toggle="modal"></button>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tablaUsuarios"></div>
    </div>
</div>

    {{-- Modal Crear Usuario --}}

    @component('themes.bootstrap.components.modal-large', 
        [
            'id' => 'formulario-crear-usuario',
            'title' => 'Añadir Usuario al Grupo de Trabajo',
            'class'=>'modalAñadirUsuario',
            'icon'=>'icon-settings font-green-haze'
        ])
        @slot('body')  
            {{ Form::open(['role' => 'form','id' => 'form-agregar-usuario', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('grupos-trabajo.store')]) }}                         
                @include('material.sections.grupos-trabajo.form.campos')
            {{ Form::close() }}  
        @endslot 
        @slot('footer')

        @endslot 
    @endcomponent

    {{-- Modal Actualizar Usuario --}}

    @component('themes.bootstrap.components.modal-large', 
        [
            'id' => 'modal-modificar-usuario',
            'title' => 'Modificar Usuario',
            'class'=>'modalModificarUsuario',
            'icon'=>'icon-settings font-green-haze'
        ])
        @slot('body')   
            <div id="contenedorFormModificarUsuario"></div>
        @endslot 
        @slot('footer')

        @endslot 
    @endcomponent

@endsection





@push('functions')

<!-- Modal Scripts -->
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>

<!-- Validation Scripts -->
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/form-validation-md.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/general-request.js') }}" type="text/javascript"></script>

    <!-- Select picker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>

    <!-- DatePicker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>

    <!-- Datatables Scripts -->   
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs/js/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript" ></script>  

    <script src="{{ asset('js/grupo-trabajo/grupo-trabajo.js') }}" type="text/javascript"></script>
@endpush


@push('functions')

<script> 

$(document).ready(function() {
    $('#tbl_parametros').DataTable();
       
    @if (session('message')) 
        swal({
            title: "{{ session('title') }}",
            text: "{{ session('message') }}",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success",
            type: "{{ session('type') }}",
        });
    @endif    
});

</script>

@endpush

