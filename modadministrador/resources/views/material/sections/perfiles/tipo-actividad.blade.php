@extends('material.layouts.dashboard')


@push('styles')
<!-- Toaster Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datatables Styles -->
<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- Tree View -->
<link href="{{ asset('assets/global/plugins/jstree/dist/themes/default/style.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Modal Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />
<!-- SweetAlert Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<!-- Toaster Styles -->
<link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Select2 Style -->
<link href="{{ asset('assets/global/plugins/select2material/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/select2material/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/select2material/css/pmd-select2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/shepherd.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title', 'Asignar Actividades a Tipo Personas')


@section('page-description', 'asignar actividades a tipo persona.')

@section('content')
    <div class="col-md-12">
        

        @component('themes.bootstrap.components.portlet', ['icon' => 'fa fa-building-o', 'title' => 'Asignar Actividad - Tipo Persona'])

            <div class="row">
                <div class="content" id="main" class="row" data-url="{{ url('/') }}" ></div>
                <div class="col-md-6 col-md-offset-3">
              
                        {{ Form::open(['class' => 'horizontal-form', 'novalidate' => 'novalidate', 'id' => 'tipo_actividad', 'method' => 'POST' , 'url' => route('tipo.actividad.show') ]) }}

                            <div class="form-body">

                                <div class="row">
                                    <div class="col-md-12 form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <label for="form_control_1">Tipo de usuario:</label>
                                            
                                            {!!Form::select('tipoPersona',$tipoPersona, ['label' => '1. Tipo de usuarios asignados'],['class'=>'form-control','data-live-search'=>'true','title'=>'Indique el tipo persona','data-size'=>'8', 'id'=>'tipoPersona'])!!}  

                                        </div>
                                    </div>  

                                    <div class="col-md-12 form-group form-md-line-input has-success">
                                        <div class="input-icon">
                                            <label for="form_control_1">Módulo:</label>
                                            
                                            {!!Form::select('modulo',$modulo, ['label' => '1. Tipo de usuarios asignados'],['class'=>'form-control','data-live-search'=>'true','title'=>'Indique el módulo','data-size'=>'8', 'id'=>'modulo'])!!}  
                                        </div>
                                    </div>

                                </div>                                
                            </div>                                

                            <div class="form-actions text-right">
                                {{ Form::submit('Generar búsqueda', ['class' => 'btn green', 'id' => 'btn_edit']) }}
                            </div>

                        {{ Form::close() }}
                    </form>
                </div>
            </div>
           
        @endcomponent



        @if($actividades!=null)
            @component('themes.bootstrap.components.portlet', ['icon' => 'fa fa-forumbee', 'title' => 'Resultados búsqueda'])
               <div class="row">
                   
                   <div class="col-xs-6 col-md-6">
                        <h3><small> <span class="glyphicon glyphicon-user"></span> <b>TIPO DE USUARIO:</b>  {{  $tipo_actividades['vc_tipo'] }}</small></h3>
                   </div>
                   <div class="col-xs-6 col-md-6">
                        <h3><small> <span class="glyphicon glyphicon-th"></span> <b>MÓDULO:</b>  {{  $actividades['vc_modulo'] }}</small></h3>
                   </div>
                   
                   
                   <div class="col-xs-12 col-md-12">
                       <br><br><br>
                   </div>

                   <div class="col-xs-12 col-md-12">
                    <input type="hidden" name="id_tipo_hiden"  id="id_tipo_hiden" value="{{ $i_tipo }}">
                    
                    
                   </div>
                   <div class="col-xs-12 col-md-12">
                       <table class="display responsive no-wrap table table-min" cellspacing="0" id='TablaTipoActividad'>
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Actividad</th>
                              <th>Ruta</th>
                              <th>Activo</th>
                              
                            </tr>
                          </thead>
                          <tfoot>
                            <tr class="estado" >
                              <th>ID</th>
                              <th>Actividad</th>
                              <th>Ruta</th>
                              <th>Activo</th>                              
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach($actividades->actividades as $actividad)
                                
                                <?php $estado=""; ?>
                                @foreach($tipo_actividades->actividades as $actividadActiva)
                                    @if($actividad['i_pk_id'] == $actividadActiva['i_pk_id'])
                                        <?php $estado="checked"; ?>
                                    @endif
                                @endforeach

                                <tr data-row="{{ $actividad['i_pk_id'] }}">
                               
                                    <td>
                                        {{ $actividad['i_pk_id'] }}                                  
                                    </td>
                                    <td>
                                        {{ $actividad['vc_actividad'] }}                                  
                                    </td>
                                    <td>
                                        {{ $actividad['vc_redireccion'] }}                                  
                                    </td>                                    
                                    <td>
                                        <div class="mt-checkbox-list">
                                            <label class="mt-checkbox"> Activo
                                                <input type="checkbox" value="{{ $actividad['i_pk_id'] }}" name="test" {{ $estado }}  data-target="#check" data-rel="{{$actividad['i_pk_id']}}">
                                                <span></span>
                                            </label>    
                                            <span class="label label-success" id="{{$actividad['i_pk_id']}}_id_label_ok"></span>
                                            <span class="label label-danger" id="{{$actividad['i_pk_id']}}_id_label_dele"></span>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                   </div>
               </div> 
            @endcomponent
        @else
            @component('themes.bootstrap.components.portlet', ['icon' => 'fa fa-forumbee', 'title' => 'Resultados búsqueda'])
            <div id="guia" class="row hide">
                   <div class="col-xs-6 col-md-6">
                        <h3><small> <span class="glyphicon glyphicon-user"></span> <b>TIPO DE USUARIO:</b>  Supervisor</small></h3>
                   </div>
                   <div class="col-xs-6 col-md-6">
                        <h3><small> <span class="glyphicon glyphicon-th"></span> <b>MÓDULO:</b>  Módulo administrador</small></h3>
                   </div>
                   
                   
                   <div class="col-xs-12 col-md-12">
                       <br><br><br>
                   </div>

                   <div class="col-xs-12 col-md-12">                  
                    
                   </div>
                   <div class="col-xs-12 col-md-12">
                       <table class="display responsive no-wrap table table-min" cellspacing="0" id='TablaTipoActividad'>
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Actividad</th>
                              <th>Ruta</th>
                              <th>Activo</th>
                              
                            </tr>
                          </thead>
                          <tfoot>
                            <tr class="estado" >
                              <th>ID</th>
                              <th>Actividad</th>
                              <th>Ruta</th>
                              <th>Activo</th>                              
                            </tr>
                          </tfoot>
                          <tbody>
                            <tr>
                                <td>
                                    1                                  
                                </td>
                                <td>
                                    Gestión de usuario
                                </td>
                                <td>
                                    /gestionar-usuarios
                                </td>                                    
                                <td>
                                    <div class="mt-checkbox-list">
                                        <label class="mt-checkbox"> Activo
                                            <input type="checkbox">
                                            <span></span>
                                        </label>    
                                        <span class="label label-success" id="1_id_label_ok"></span>
                                        <span class="label label-danger" id="1_id_label_dele"></span>
                                    </div>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                   </div>
               </div> 
            @endcomponent
        @endif
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
<!-- My Script -->
<script src="{{ asset('js/tipo-actividad/tipo-actividad.js?v=0.0') }}" type="text/javascript"></script>

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
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/shepherd.js@8.3.1/dist/js/shepherd.min.js"></script>
<script src="{{ asset('tours/guia-vincular-tipo-persona-actividad.js')}}"></script>
@endpush