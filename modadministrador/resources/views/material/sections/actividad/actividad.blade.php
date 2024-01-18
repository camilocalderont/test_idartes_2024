@extends('material.layouts.dashboard')


@push('styles')
<!-- Datatables Styles -->
    <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- Modal Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />

<!-- Toaster Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Select picker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />

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

@section('page-title', 'Gestión de Actividades')

@section('content')

<div class="portlet light " id="main" data-url="{{URL::to('/')}}">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <span class="caption-subject bold uppercase"> Gestión de Actividades</span>
        </div>
    </div>
    <div class="portlet-body form"> 

        @if(isset($actividad)) 
        {!!Form::model($actividad,['route'=>['actividad.update',$actividad->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-actividad'])!!} 
        @else 
        {{ Form::open(['role' => 'form','id' => 'form-crear-actividad', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('actividad.store')]) }}
        @endif              
            @include('material.sections.actividad.form.campos')
        {{ Form::close() }}


        
        <div class="tab-pane" id="portlet_tab2">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-settings font-green"></i>
                        <span class="caption-subject bold uppercase"> Consulta de Actividades</span>
                    </div>
                </div>
                <div class="portlet-body form">  
                    <table id="tbl_actividades" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Modulo</th>
                                <th>Actividad</th>
                                <th>Padre</th>
                                <th>Descripción</th>
                                <th>Redirección</th>
                                <th>Imagen</th>                                
                                <th>Estado</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                               // echo '<pre>'.print_r($actividades,true).'</pre>';
                            @endphp
                            @if($actividades->count())
                            @foreach($actividades as $actividad)


                            <tr>
                                <td>{{$actividad->i_pk_id}}</td>
                                <td>{{isset($actividad->modulo) ? $actividad->modulo->vc_modulo : ''}}</td>
                                <td>{{$actividad->vc_actividad}}</td>
                                <td>{{isset($actividad->padre) ? $actividad->padre->vc_actividad : '' }}</td>
                                <td>{{$actividad->vc_descripcion}}</td>
                                <td>{{$actividad->vc_redireccion}}</td>
                                <td>{{$actividad->vc_imagen}}</td>
                                @if($actividad->i_estado==1)
                                <td><button class="btn green fa fa-thumbs-up"></button></td>
                                @else
                                <td><button class="btn green fa fa-thumbs-down"></button></td>
                                @endif
                                <td>
                                    <a class="edit-modal btn btn-info fa fa-pencil" href="{{ url('/actividad/'.$actividad->i_pk_id.'/edit') }}"></a>
                                </td>

                                {{--<td>
                                    @include('material.sections.perfiles.form.borrar')
                                 </td>--}}
                        
                            </tr>

                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">No existen registros.</td>
                            </tr>
                            @endif

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Modulo</th>
                                <th>Actividad</th>
                                <th>Descripción</th>
                                <th>Redirección</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Editar</th>
                            </tr>
                        </tfoot>
                    </table>  
                </div>
            </div>
        </div>
     </div>
 </div>
        
</div>

@component('themes.bootstrap.components.boton_manual',['ruta'=>'#'])
@endcomponent
@endsection


@push('functions')
<!-- Toastr Scripts -->
    <script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/ui-toastr.js') }}" type="text/javascript"></script>
<!-- Datatables Scripts -->
    <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/table-datatable.js') }}" type="text/javascript"></script>
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
<!-- Select2 Script -->
    <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>

<!-- Select picker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/actividad/actividad.js?v=2019-08-17') }}" type="text/javascript"></script> 
@endpush

@push('functions')
<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>

<script> 
var vURL = null;
$(document).ready(function() {
    vURL = $('#main').data('url');  
    $('#tbl_actividades').DataTable();
    @if (session('message')) 
        swal({
            title: "{{ session('title') }}",
            text: "{{ session('message') }}",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success",
            type: "{{ session('type') }}",
        });
    @endif
    //Create a record
    $('#btn_create').unbind('click').click(function (e) {
        e.preventDefault();

        var validateForm = $('#form-create-modulo');
        FormValidationMd.init(validateForm, validateRules, false, false);

        if(validateForm.valid()) {
            $('.progress').show();
            $('#btn_cancel_create').attr('disabled', 'disabled');
            $('#btn_create').attr('disabled', 'disabled');
            var route, type;
            route = '{{ route('create_modulo') }}';
            type = 'POST';
            var data = new FormData();
            data.append("vc_nombre", $('#create_nombre').val());
            data.append("vc_redireccion", $('#create_direccion').val());
            data.append("vc_estado", $('#create_estado_select').val());

            var form = $('#form-create-modulo');
            var table = $('#modulo-table');
            var tableRoute = "{{ route('table_school') }}";
            ajaxRequest.init(route, type, data, modal, form, table, tableRoute, true);
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
<script src="{{ asset('tours/guia-gestion-actividades.js')}}"></script>
@endpush

