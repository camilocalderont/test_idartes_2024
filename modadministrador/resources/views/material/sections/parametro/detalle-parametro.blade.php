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

    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

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

@section('page-title', 'Gestión de Parámetros')

@section('content')

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <span class="caption-subject bold uppercase"> Gestión de Parámetros</span>
        </div>
    </div>
    <div class="portlet-body form"> 
        @if(isset($parametroDetalle)) 
        {!!Form::model($parametroDetalle,['route'=>['detalle-parametro.update',$parametroDetalle->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-detalle'])!!} 
        @else 
        {{ Form::open(['role' => 'form','id' => 'form-crear-detalle', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('detalle-parametro.store')]) }}
        @endif              
            @include('material.sections.parametro.form.campos-detalle')
        {{ Form::close() }}

        

        <div class="tab-pane" id="portlet_tab2">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Detalles </span>
                    </div>

                </div>
                <div class="portlet-body form">  
                    <table id="tbl_parametros" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Parámetro</th>
                                <th>Detalle</th>
                                <th>Estado</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($detalleTabla->count())
                            @foreach($detalleTabla as $detalle)


                            <tr>
                                <td>{{$detalle->vc_parametro}}</td>
                                <td>{{$detalle->vc_parametro_detalle}}</td>

                                @if($detalle->i_estado==1)
                                <td>Activo</td>
                                @else
                                <td>Inactivo</td>
                                @endif

                                <td>
                                    <a class="btn btn-info fa fa-pencil" href="{{ url('/detalle-parametro/'.$detalle->i_pk_id.'/edit') }}"></a>
                                </td>
                        
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
                                <th>Parámetro</th>
                                <th>Detalle</th>
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

