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
    <!-- JSON Viewer-->
    <link href="{{ asset('bower_components/lazy-json-viewer/lazyjsonviewer.css') }}" rel="stylesheet" type="text/css" />
    <!-- DatePicker -->
    <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"> 

@endpush

@section('content')

    <div class="col-md-12 " id="main" data-url="{{URL::to('/')}}">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet light">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-pin font-blue-madison"></i>
                    <span class="caption-subject bold font-blue-madison uppercase"> Consulta de Auditoría </span>                       
                </div> 
                <div class="actions">           
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#portlet_tab1" data-toggle="tab" aria-expanded="true"> Tablas </a>
                    </li>
                    <li class="">
                        <a href="#portlet_tab2" data-toggle="tab" aria-expanded="false"> Login </a>
                    </li>
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
                                        <span class="caption-subject bold uppercase"> Consultar de Auditoría</span>
                                    </div>
                                </div>  
                            </h4> 
                            <div class="row">
                                <div class="col-xs-8 col-md-1">
                                    <label for="vc_tabla">Tabla:</label>

                                </div>
                                <div class="col-xs-12 col-md-9">
                                    {!!Form::select('vc_tabla',$tablas,null,['class'=>'selectpicker form-control','data-live-search'=>'true','id'=>'vc_tabla','data-actions-box'=>'true','data-deselect-all-text'=>'Ninguno','data-select-all-text'=>'Todos','data-live-search'=>'true'])!!}  
                                </div>                                      
                                <div class="col-xs-12 col-md-2">
                                   <span class="input-group-btn btn-right">
                                        {{ Form::button('Consultar', ['class' => 'form-control btn blue btn-block', 'id' => 'consultar-auditoria']) }}
                                    </span>                                       
                                </div>
                            </div>                                                       
          
                        </form> 
                        <div class="portlet light bordered" id="contenedorTabla">
                            <div id="tablaAuditoria"></div>  

                        </div>                             

                    </div>
                    <div class="tab-pane" id="portlet_tab2">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption font-green-haze">
                                    <i class="icon-settings font-green-haze"></i>
                                    <span class="caption-subject bold uppercase"> Login</span>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input has-info">
                                        {!!Form::select('i_fk_id_usuario',$usuarios,null,['class'=>'form-control selectpicker','id'=>'i_fk_id_usuario','data-live-search'=>'true','title'=>'Seleccione el Usuario','data-size'=>'8'])!!} 
                                        <label for="i_fk_id_usuario">Contratista                    
                                        </label>
                                        <span class="help-block"></span>
                                    </div>                           
                                </div>   
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-icon">    
                                            {!!Form::text('d_fecha_inicial',null,['class'=>'form-control datepicker','id'=>'d_fecha_inicial','readonly'=>'readonly'])!!}                                                             
                                            <label for="d_fecha_inicial">Fecha desde (*)</label>
                                            <i class="fa fa-calendar"></i>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-icon">    
                                            {!!Form::text('d_fecha_final',null,['class'=>'form-control datepicker','id'=>'d_fecha_final', 'readonly'=>'readonly'])!!}                                                             
                                            <label for="d_fecha_final">Fecha hasta (*)</label>
                                            <i class="fa fa-calendar"></i>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                
                                <div class="col-xs-12 col-md-2">
                                   <span class="input-group-btn btn-right">
                                        {{ Form::button('Consultar', ['class' => 'form-control btn blue btn-block', 'id' => 'consultar-login']) }}
                                    </span>                                       
                                </div>
                            </div> 
                            <div class="portlet light bordered" id="contenedorTablaLogin">
                                <div id="tablaLogin"></div>  

                            </div>                                      
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>            

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
    <!-- JSON Viewer-->
    <script src="{{ asset('bower_components/lazy-json-viewer/lazyjsonviewer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/auditoria/consultar-auditoria.js?v=2019-04-05') }}" type="text/javascript"></script>
@endpush


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
    });
</script>


@endpush