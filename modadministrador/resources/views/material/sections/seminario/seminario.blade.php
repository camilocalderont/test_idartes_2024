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

@section('page-title', 'Digrafos Dev.')

@section('content')

<div class="portlet light" id="main" data-url="{{URL::to('/')}}">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-mint" aria-hidden="true"></i>
            <span class="caption-subject bold uppercase"> Área de Desarrollo</span>
        </div>
    </div>
    <div class="portlet-body form"> 
        <div class="row">
            <div class="col-md-4 form-group form-md-line-input has-info">
                <div class="input-icon">
                    <label for="fecha">Desde (*)</label>

                        {!!Form::text('nodoDesde',null,['class'=>'form-control',
                        'id' => 'fechaDesde',
                        'placeholder' => 'Partida'])!!}

                    <i class="fa fa-hand-pointer-o"></i>    
                    <span class="help-block"></span>    
                </div>
            </div>
            <div class="col-md-4 form-group form-md-line-input has-info">
                <div class="input-icon">
                    <label for="fecha">Hasta (*)</label>

                        {!!Form::text('nodoHasta',null,['class'=>'form-control',
                        'id' => 'fechaHasta',
                        'placeholder' => 'Destino'])!!}

                    <i class="fa fa-hand-pointer-o"></i>
                    <span class="help-block"></span>    
                </div>
            </div>
            <div class="col-md-3 form-group form-md-line-input has-info">
                <div class="form-actions noborder">
                    {{ Form::button('Crear', [
                        'class' => 'btn red btn-outline consultar-elemento-ingresado',
                        'id' => 'crear-nodos']) }} 
                </div>
            </div>
       

               
                {{--<div class="input-group form-md-line-input has-info">
                    {!!Form::select('i_fk_id_parametro',$parametros, null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Seleccione el parametro','id'=>'i_fk_id_parametro'])!!}                                
                    <span class="help-block"></span>
                    <div class="input-group-btn">
                        <button class="btn red fa fa-search" id="obtener-parametros" ></button>
                      <button class="btn green fa fa-plus" id="crear-parametro" data-target="#formulario-parametro" data-toggle="modal"></button>
                      <button class="btn blue fa fa-pencil" id="modificar-parametro"></button>
                    </div>                    
                </div>--}}                                   
                        
        </div>
    </div>
</div>
<div class="portlet light" id="contenedorTablaParametros">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-th-list" aria-hidden="true"></i> Listado de Parametros </div>
        <div class="tools">
            <button class="btn green fa fa-plus" id="crear-parametro-detalle" data-target="#formulario-parametro-detalle" data-toggle="modal"></button>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tablaParametros"></div>
    </div>
</div>



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
    <!-- Datatables Scripts -->   
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs/js/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript" ></script>  

    <script src="{{ asset('js/parametros/parametros.js') }}" type="text/javascript"></script>
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

