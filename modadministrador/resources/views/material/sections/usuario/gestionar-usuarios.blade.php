@extends('material.layouts.dashboard')

 
@push('styles')

<!-- Modal Styles -->
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/pages/css/blog.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Select picker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Radio Styae -->
    <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datatables Styles -->
    <link href="{{ asset('bower_components/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bower_components/datatables.net-buttons-dt/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css"> 

    <!-- DatePicker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"> 

    <!-- Shepherd --->
    <link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="col-md-12" id="main" data-url="{{URL::to('/')}}">
        <div class="col-md-12 ">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption">
                        <i class="icon-pin font-blue-madison"></i>
                        <span class="caption-subject bold font-blue-madison uppercase"> Gestión de usuarios </span>                       
                    </div> 
                    <div class="actions">           
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#portlet_tab1" id="link-consultar" data-toggle="tab" aria-expanded="true"> Consultar </a>
                        </li>
                        @if(!isset($usuario))
                        <li class="">
                            <a href="#portlet_tab2" id="link-registrar" data-toggle="modal" data-target="#modalCrear"> Registrar </a>
                        </li>
                        @else
                        <li class="">
                            <a href="#portlet_tab3" id="link-modificar" {{-- data-toggle="tab" aria-expanded="false" id="enlaceEdicionUsuario" --}}
                                data-toggle="modal" data-target="#modalActualizar"
                             > Modificar </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <form class="horizontal-form  form-inline mb-2">
                                <h4>
                                    <div class="portlet-title">
                                        <div class="caption font-green-haze">
                                            <i class="icon-check font-green-haze"></i>
                                            <span class="caption-subject bold uppercase"> Consultar Usuario</span>
                                        </div>
                                    </div>  
                                </h4> 
                                <div class="row">
                                    <div class="col-xs-8 col-md-1">
                                        <label for="i_fk_id_area">Área:</label>

                                    </div>
                                    <div class="col-xs-12 col-md-9">
                                        {!!Form::select('i_fk_id_area',$areas,null,['class'=>'selectpicker form-control step_1','data-live-search'=>'true','id'=>'i_fk_id_area','multiple'=>'multiple','data-actions-box'=>'true','data-deselect-all-text'=>'Ninguno','data-select-all-text'=>'Todos','data-live-search'=>'true'])!!}  
                                    </div>                                      
                                    <div class="col-xs-12 col-md-2">
                                       <span class="input-group-btn btn-right">
                                            {{ Form::button('Consultar', ['class' => 'form-control btn blue btn-block', 'id' => 'consultar-usuarios-area']) }}
                                        </span>                                       
                                    </div>
                                </div>                                                       
              
                            </form>  
                            {{--@if (Session::get('form') == 'crear')
                                <div class="alert alert-success"> Error por Crear                             
                                </div>
                            @elseif (Session::get('form') == 'actualizar')
                                <div class="alert alert-info"> Error por Actualizar                        
                                </div>                             
                            @endif                              
                            @if ($errors->any()) 
                                <div class="alert alert-danger">
                                    <pre>{{ print_r($errors,true) }}</pre>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else  
                                 <div class="alert alert-danger">
                                    No tiene errores
                                </div>
                            @endif   --}}                           
                            <div class="portlet light bordered" id="contenedorTabla">
                                <div id="tablaUsuariosArea"></div>  

                            </div>                             

                        </div>
                        <div class="tab-pane" id="portlet_tab2">
                            {{-- <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Creación de Usuario</span>
                                    </div>
                                </div>
                                <div class="portlet-body form" id="contenedorCreacionUsuario">  
                                    {{ Form::open(['role' => 'form','id' => 'form-crear-usuario', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('usuarios.store') ]) }}
                                        @include('material.sections.usuario.form.campos')                                      
                                    {{ Form::close() }}  
                                </div>
                            </div>  --}}
                        </div>
                        <div class="tab-pane" id="portlet_tab3">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-pencil font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Modificar Usuario</span>
                                    </div>
                                </div>
                                <div class="portlet-body form" id="contenedorEdicionUsuario">  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>



<!-- Modal Crear -->
@if(!isset($usuario))
    <div id="modalCrear" class="modal container fade" tabindex="-1" aria-hidden="false" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase"> Creación de Usuario</span>
            </h4>
        </div> 
        <div class="modal-body">
            {{ Form::open(['role' => 'form','id' => 'form-crear-usuario', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('usuarios.store') ]) }}
                @include('material.sections.usuario.form.campos')                                      
            {{ Form::close() }}     
        </div>
        <div class="modal-footer">

        </div>
    </div>
@else
<!-- Modal Actualizar -->
    <div id="modalActualizar" class="modal container fade" tabindex="-1" aria-hidden="false" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">
                <i class="icon-settings font-green-haze"></i>
                <span class="caption-subject bold uppercase">Actualizar Usuario</span>
            </h4>
        </div> 
        <div class="modal-body">
        {!!Form::model($usuario,['route'=>['usuarios.update',$usuario->id],'method'=>'PUT','role'=>'form','id'=>'form-editar-usuario','enctype'=>'multipart/form-data'])!!} 
            @include('material.sections.usuario.form.campos')
        {!!Form::close()!!}     
        </div>
        <div class="modal-footer">

        </div>
    </div>
@endif 

@endsection

@push('plugins')
    <!-- Validation Scripts -->
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/form-validation-md.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/pages/scripts/general-request.js') }}" type="text/javascript"></script>
<!-- Modal Scripts -->
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<!-- Select picker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script> --}}
<!-- Radio Script -->
    <script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/form-icheck.min.js') }}" type="text/javascript"></script>
<!-- Datatables Scripts -->   
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-responsive-bs/js/responsive.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/jszip/dist/jszip.min.js') }}"  type="text/javascript" ></script>
    <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript" ></script>  

    <!-- DatePicker -->
    <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script> 

    <script src="{{ asset('js/Usuario/gestionUsuario.js?v=2019-03-15.1') }}" type="text/javascript"></script>
@endpush

@component('themes.bootstrap.components.boton_manual',['ruta'=> asset('tours/Manual_Usuario_administrador_PANDORA.docx') ])
@endcomponent
@push('functions')
<script>
    jQuery(document).ready(function () {
        @if (session('message'))
            swal({
                title: "{{ session('title') }}",
                text: "{{ session('message') }}",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "{{ session('type') }}",
            });
        @endif
        {{-- cuando no se envía por redirect --}}
        @if (isset($message))
            swal({
                title: "{{ $title }}",
                text: "{{ $message }}",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-success",
                type: "{{ $type }}",
            });
        @endif        
        @if(isset($usuario))   
            $('#modalActualizar').modal('show');
        @elseif($errors->any())
            $('#modalCrear').modal('show');
        @endif       
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
<script src="{{ asset('tours/guia-gestion-usuarios.js')}}"></script>
@endpush