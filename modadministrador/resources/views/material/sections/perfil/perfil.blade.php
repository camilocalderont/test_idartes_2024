@extends('material.layouts.dashboard2')

@push('styles')
<!-- Modal Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/jcrop/css/jquery.Jcrop.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/pages/css/image-crop.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Select2 Style -->
<link href="{{ asset('assets/global/plugins/select2material/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/select2material/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/select2material/css/pmd-select2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
<!-- SweetAlert Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/jcrop/css/jquery.Jcrop.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/pages/css/image-crop.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title', 'Perfil')

@section('page-description', 'ver, crear, modificar datos personales')

@section('content')
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="" class="img-responsive user-profile-pic" alt="{{ auth()->user()->full_name }}"> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{ auth()->user()->full_name }} </div>
                    <div class="profile-usertitle-job">  </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">

                    <ul class="nav">
                        <li>
                            <a href="javascript:;"><i class="fa fa-lock"></i> Mis Roles </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Perfil</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Información Personal</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Imagen de Perfil</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Cambiar Contraseña</a>
                                </li>
                            </ul>
                        </div>

                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    
                                    <div class="row">
                                    {{ Form::open(['id' => 'profile', 'method' => 'POST', 'route' => 'perfil.update.perfil']) }}
                                        <div class="form-body">
                                            <div class="col-md-6">
                                                {!! Field::text('date', auth()->user()->dt_fecha_nacimiento, ['class' => 'date-picker', 'label' => 'Fecha de Nacimiento', 'data-date-format'=>'yyyy-mm-dd' ], ['icon' => 'fa fa-calendar']) !!}
                                            </div>

                                            <div class="col-md-6">
                                                {!! Field::email('email', auth()->user()->email, [], ['icon' => 'fa fa-at']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Field::select('city', $ciudades, auth()->user()->ciudad->i_pk_id, ['label' => 'Ciudad']) !!}
                                            </div>
                                            <div class="col-md-12">
                                            </div>
                                            <div class="col-md-6">
                                                {!! Field::text('phone', auth()->user()->vc_telefono, [], ['icon' => 'fa fa-phone']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Field::text('mobile', auth()->user()->vc_celular, [], ['icon' => 'fa fa-mobile']) !!}
                                            </div>
                                            <div class="col-md-12">
                                            </div>
                                            <div class="col-md-6">
                                                {!! Field::text('address', auth()->user()->vc_direccion, [], ['icon' => 'fa fa-map-signs']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Field::radios('gender',
                                                    ['14' => 'Masculino', '15' => 'Femenino'],
                                                    auth()->user()->i_fk_genero,
                                                    ['inline', 'label' => 'Género']) !!}
                                            </div>
                                            <div class="col-md-12">
                                            </div>
                                        </div>
                                        <div class="form-action">
                                            <div class="col-md-12">
                                                {{ Form::submit('Actualizar', ['class' => 'btn green']) }}
                                            </div>
                                        </div>

                                    {{ Form::close() }}
                                    </div>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div id="dropzone" class="dropzone"></div>
                                            <span class="text">
                                            <strong>Arrastra la imagen</strong> aquí o da <strong>click</strong> para seleccionarlo de tu equipo.<br>
                                        </span>
                                            <hr>
                                            <div class="col-md-12 text-center margin-top-15">
                                                <button type="button" class="btn btn-warning mt-ladda-btn ladda-button" id="submit" data-style="zoom-in">
                                                <span class="ladda-label">
                                                    <i class="fa fa-cloud-upload"></i> Cargar Imágen de Perfil</span>
                                                    <span class="ladda-spinner"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    <form method="post" action="{{ route('perfil.update.password') }}" id="change-pass-form">
                                        {{ csrf_field() }}
                                        {!! Field::password('old_password', ['label' => 'Contraseña Actual'], ['icon' => 'fa fa-key']) !!}
                                        {!! Field::password('new_password', ['label' => 'Nueva Contraseña'], ['icon' => 'fa fa-key']) !!}
                                        {!! Field::password('retype_password', ['label' => 'Confirma Contraseña'], ['icon' => 'fa fa-key']) !!}

                                        <div class="margin-top-10">
                                            {{ Form::submit('Cambiar Contraseña', ['class' => 'btn green']) }}
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>

    @component('themes.bootstrap.components.modal', ['id' => 'image-crop-modal', 'title' => 'Ajustar Imagen'])
        @slot('body')
            <p>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 responsive-1024">
                        <img src="" id="demo8" alt="Crop Image" /> </div>
                </div>
            </p>
        @endslot
        @slot('footer')
            <form action="{{ route('perfil.update.crop') }}" method="post" id="demo8_form">
                {{ csrf_field() }}
                <input type="hidden" id="profile-url" name="url" />
                <input type="hidden" id="crop_x" name="x" />
                <input type="hidden" id="crop_y" name="y" />
                <input type="hidden" id="crop_w" name="w" />
                <input type="hidden" id="crop_h" name="h" />
                <input type="submit" value="Cortar Imagen" class="btn btn-large green" /> </form>
        @endslot
    @endcomponent
@endsection

@push('plugins')
<!-- Modal Scripts -->
<script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- Select2 Script -->
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}" type="text/javascript"></script>
<!-- Validation Scripts -->
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/form-validation-md.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/general-request.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/global/plugins/dropzone/dropzone.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/profile-picture.js') }}" type="text/javascript"></script>
<!-- SweetAlert Scripts -->
<script src="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/general-request.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/global/plugins/jcrop/js/jquery.color.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jcrop/js/jquery.Jcrop.min.js') }}" type="text/javascript"></script>
@endpush


@push('functions')
<script type="text/javascript">
    $(document).ready( function () {
        $.fn.select2.defaults.set('language', 'es');
        $(".pmd-select2").select2({
            width: null,
            placeholder: "Seleccionar",
            allowClear: true,
        });

        $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "bottom",
                autoclose: true,
                language: 'es',
                dateFormat: 'yyyy-mm-dd',
                firstDay: 1,
                showMonthAfterYear: false,
                yearSuffix: '',
                clearBtn: true,
            });

        @if (session('message'))
        swal({
            title: "{{ session('title') }}",
            text: "{{ session('message') }}",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success",
            type: "{{ session('type') }}",
        });
        @endif

        dropZone.init("{{ route('perfil.update.perfil-pic') }}");

        var validateForm = $('#profile');

        var validateRules = {
            'date':  { required: true },
            'email':    { required: true },
            'city':  { required: true },
            'phone':  { required: true },
            'mobile':  { required: true },
            'address':  { required: true },
            'gender':  { required: true },
        };
        var validateMessages = {};
        FormValidationMd.init(validateForm, validateRules, validateMessages, false);

        var f2 = $('#change-pass-form');

        var fr = {
            old_password: "required",
            new_password: "required",
            retype_password: {
                required: true,
                equalTo: "#new_password"
            }
        };
        FormValidationMd.init(f2, fr, validateMessages, false);

        $('#demo8_form').submit(function(){
            if (parseInt($('#crop_w').val())) return true;
            alert('Please select a crop region then press submit.');
            swal({
                title: "¡Ocurrió un Error!",
                text: 'Selecciona una region de la imágen para recortar y luego envía el formulario.',
                buttonsStyling: false,
                confirmButtonClass: "btn btn-danger",
                type: "error",
            });
            return false;
        });
    });
</script>
@endpush