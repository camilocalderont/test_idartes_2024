@extends('material.layouts.dashboard')


@push('styles')
    <!-- Toaster Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Datatables Styles -->
    <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- DatePicker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- Tree View -->
    <link href="{{ asset('assets/global/plugins/jstree/dist/themes/default/style.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Modal Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- SweetAlert Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Toaster Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Select picker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title', '')


@section('page-description', '')

@section('content')
    <div class="col-md-12" id="main" data-url="{{ URL::to('/') }}">
        <div class="col-md-12 ">
            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-pin font-blue-madison"></i>
                        <span class="caption-subject bold font-blue-madison uppercase"> Asignar Tipo Persona (Rol) a Usuario
                        </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"
                            data-original-title="" title=""></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <form class="horizontal-form" id="form-busqueda">
                                <br>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group form-md-line-input has-info">
                                                    {!! Form::select('user_id', $usuarios, isset($tipoPersonas) ? $tipoPersonas->user_id : null, [
                                                        'class' => 'form-control selectpicker ',
                                                        'data-live-search' => 'true',
                                                        'title' => 'Seleccione el usuario',
                                                        'data-size' => '8',
                                                        'id' => 'user_id',
                                                        'data-live-search' => 'true',
                                                        'required' => 'required',
                                                    ]) !!}
                                                    <span class="help-block"></span>
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn green" id="consultar-usuarios">
                                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                            Ver perfiles
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mb-3"></div>
                            <div class="portlet light bordered" id="boton_crear">
                                <div class="row">
                                    <div class="row mb-1">
                                        <div class="col-xs-12 text-center">
                                            <button type="button" class='btn btn-warning' id="abrir-form-nuevo-usuario">
                                                <i class="fa fa-plus" aria-hidden="true"></i>Agregar nuevo rol
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet light bordered" id="contenedorTabla">
                                <div id="tablaTipoRol"></div>
                            </div>
                        </div>
                    </div>
                    <div id="contenedorModals">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('functions')
    <!-- Toastr Scripts -->
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/form-validation-md.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/pages/scripts/general-request.js') }}" type="text/javascript"></script>
    <!-- Modal Scripts -->
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript">
    </script>
    <!-- Select picker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script> --}}
    <!-- Radio Script -->
    <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/form-icheck.min.js') }}" type="text/javascript"></script>
    <!-- Datatables Scripts -->
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs/js/responsive.bootstrap.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- DatePicker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"
        type="text/javascript"></script>
    <!-- My Script -->
    <script src="{{ asset('js/tipopersona-usuario/tipopersona-rols.js?v=0.0') }}" type="text/javascript"></script>
@endpush


@push('functions')
    <script>
        jQuery(document).ready(function() {
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
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
    <script src="{{ asset('tours/guia-vincular-tipo-persona.js') }}"></script>
@endpush
