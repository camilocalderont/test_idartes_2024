@extends('material.layouts.dashboard')


@push('styles')
<!-- Datatables Styles -->
    <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- Modal Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />
<!-- SweetAlert Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<!-- Toaster Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('page-title', 'Módulos')


@section('page-description', 'ver, crear, modificar y eliminar módulos')

@section('content')
    <div class="col-md-12">
        @component('themes.bootstrap.components.portlet', ['icon' => 'fa fa-building-o', 'title' => 'Módulos'])
            {{-- Datatable --}}
            @component('themes.bootstrap.components.datatable', ['id' => 'modulo-table'])
                @slot('columns', ['#', 'Módulo', 'Redirección', 'Imagen', 'Estado', 'Acciones'])
            @endcomponent
            {{-- Modal Editar --}}
            @component('themes.bootstrap.components.modal', ['id' => 'edit-school', 'title' => 'Editar Institución'])
                    @slot('body')
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                             {!! Form::open(['role' => 'form', 'id' => 'form-edit-modulo', 'method' => 'POST', 'url' => route('save_modulo')]) !!}
                                <div class="form-body">
                                    {{ method_field('PUT') }}
                                    {!! Field::hidden('id', null, ['id' => 'edit_id']) !!}
                                    
                                    {!! Field::text('vc_nombre', ['id' => 'edit_nombre', 'required', 'label' => 'Nombre del mòdulo', 'autocomplete'=>'off'], ['help' => 'Digita el nombre del módulo.', 'icon' => 'icon-home']) !!}
                                    
                                    {!! Field::text('vc_redireccion', ['id' => 'edit_url', 'required', 'label' => 'URL Redirección', 'autocomplete'=>'off'], ['help' => 'Digita la url de redirección del módulo.', 'icon' => 'icon-tag']) !!}

                                    {!! Field::text('vc_imagen', ['id' => 'edit_img', 'required', 'label' => 'URL Imagen', 'autocomplete'=>'off'], ['help' => 'Digita la url de la imagen.', 'icon' => 'icon-tag']) !!}

                                    {!! Field::select('vc_estado', [0 => 'Inactivo', 1 => 'Activo'],['label' => 'Estado', 'id' => 'edit_estado_select']) !!}
                                </div>
                                <div class="form-actions">
                                    {{ Form::button('Cancelar', ['class' => 'btn red', 'data-dismiss' =>"modal", 'id' => 'btn_cancel_edit']) }}
                                    {{ Form::submit('Actualizar', ['class' => 'btn green', 'id' => 'btn_edit']) }}
                              </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endslot
                    @slot('footer')
                        <div class="progress progress-striped active" style="display: none;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only"> </span>
                            </div>
                        </div>
                    @endslot
            @endcomponent
            {{-- Modal Crear --}}
            @component('themes.bootstrap.components.modal', ['id' => 'create-school', 'title' => 'Crear módulo'])
                    @slot('body')
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                           {!! Form::open(['role' => 'form', 'id' => 'form-create-modulo', 'novalidate' => 'novalidate', 'method' => 'POST', 'url' => route('create_modulo')]) !!} 
                            <div class="form-body">
                                {!! Field::text('vc_nombre', ['id' => 'create_nombre', 'required', 'label' => 'Nombre del módulo'], ['help' => 'Digita el nombre del módulo', 'icon' => 'icon-home']) !!}

                                {!! Field::text('vc_redireccion', ['id' => 'create_direccion', 'required', 'label' => 'Dirección url'], ['help' => 'Digita la url de re-dirección', 'icon' => 'icon-tag']) !!}

                                {!! Field::text('vc_imagen', ['id' => 'create_imagen', 'required', 'label' => 'Imagen url'], ['help' => 'Digita la url de la imagen', 'icon' => 'icon-tag']) !!}

                                {!! Field::select('vc_estado', [0 => 'Inactivo', 1 => 'Activo'],['label' => 'Estado', 'id' => 'create_estado_select']) !!}
                            </div>
                            <div class="form-actions">
                                {{ Form::button('Cancelar', ['class' => 'btn red', 'data-dismiss' =>"modal", 'id' => 'btn_cancel_create']) }}
                                {{ Form::button('Crear', ['class' => 'btn green', 'id' => 'btn_create']) }}
                            </div>
                           {!! Form::close() !!} 
                        </div>
                    </div>
                @endslot
                @slot('footer')
                    <div class="progress progress-striped active" style="display: none;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span class="sr-only"> </span>
                        </div>
                    </div>
                @endslot
            @endcomponent
        @endcomponent
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
<!-- SweetAlert Scripts -->
    <script src="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
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

@component('themes.bootstrap.components.boton_manual',['ruta'=> asset('tours/Manual_Usuario_administrador_PANDORA.docx') ])
@endcomponent
@push('functions')
<script>
    jQuery(document).ready(function () {

        var validateRules = {
            'vc_nombre':  { minlength: 5, required: true },
            'vc_redireccion':    { minlength: 5, required: true },
            'vc_imagen':    { minlength: 5, required: true },
            'vc_estado':  { required: true }
        };
        var validateMessage = {};

        var table, url, columns, modal;

        table = $('#modulo-table');
        url = "{{ route('table_school') }}";
        columns = [
            {data: 'i_pk_id', name: 'i_pk_id'},
            {data: 'vc_nombre', name: 'vc_nombre'},
            {data: 'vc_redireccion', name: 'vc_redireccion'},
            {data: 'vc_imagen', name: 'vc_imagen'},
            {data: 'vc_estado', name: 'vc_estado'},
            {
                data: 'link',
                name: 'link',
                orderable: false,
                searchable: false,
                exportable: false,
                printable: false,
                className: 'text-right',
                render: null,
                responsivePriority:2
            },
        ];
        modal = 'create-school';
        dataTableServer.init(table, url, columns, modal);

        var table = table.DataTable();

        //Edit a record
        table.on('click', '.edit', function () {
            
            var validateForm = $('#form-edit-modulo');
            validateForm[0].reset();
            $('.progress').hide();
            $('#btn_cancel_edit').removeAttr('disabled');
            $('#btn_edit').removeAttr('disabled');
           

            $('#edit_id').val($(this).data('id'));
            $('#edit_nombre').val($(this).data('nombre'));
            $('#edit_url').val($(this).data('direccion'));
            $('#edit_img').val($(this).data('imagen'));
            $('#edit_estado_select').select2({width: null, placeholder: "Seleccionar", data: [{id: '', text: 'Seleccionar'},]}).val($(this).data('estado')).trigger('change');
            $('#edit-school').modal('show');
            

            var sendAjax = function () {
                var dataRequest = function () {
                    var route, type;
                    route = '{{ route('save_modulo') }}';
                    type = 'POST';

                    var data = new FormData();
                    data.append('_method', 'PUT')
                    data.append("i_pk_id", $('#edit_id').val());
                    data.append("vc_nombre", $('#edit_nombre').val());
                    data.append("vc_redireccion", $('#edit_url').val());
                    data.append("vc_imagen", $('#edit_img').val());
                    data.append("vc_estado", $('#edit_estado_select').val());
                    
                    
                    $('#btn_cancel_edit').attr('disabled', 'disabled');
                    $('#btn_edit').attr('disabled', 'disabled');
                    var table = $('#modulo-table');
                    var modal = 'edit-school';
                    var tableRoute = "{{ route('table_school') }}";
                    $('.progress').show();
                    ajaxRequest.init(route, type, data, modal, validateForm, table, tableRoute, true);
                }
                return {
                    init: function () {
                        dataRequest();
                    }
                }
            }();
            FormValidationMd.init(validateForm, validateRules, validateMessage, sendAjax);
        });

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
                data.append("vc_imagen", $('#create_imagen').val());
                data.append("vc_estado", $('#create_estado_select').val());

                var form = $('#form-create-modulo');
                var table = $('#modulo-table');
                var tableRoute = "{{ route('table_school') }}";
                ajaxRequest.init(route, type, data, modal, form, table, tableRoute, true);
            }
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
<script src="{{ asset('tours/guia-gestion-modulos.js')}}"></script>
@endpush