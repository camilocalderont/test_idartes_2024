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

@section('page-title', 'Gestión de Perfiles')

@section('content')
      @php   
        if($clase==268)  {
          $titulo = ' perfiles de usuario';
          $tituloTabla = 'Perfil (Rol)';
          echo '<input type="hidden" value="Perfil" name="hd_tipo">';
        }else{
          $titulo = ' cargos';
          $tituloTabla = 'Cargo';
          echo  '<input type="hidden" value="Cargo" name="hd_tipo">';
        }
      @endphp
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <span class="caption-subject bold uppercase"> Gestión de  {{ $titulo }}</span>
        </div>
    </div>
    <div class="portlet-body form"> 

        @if(isset($perfil)) 
        {!!Form::model($perfil,['route'=>['perfiles.update',$perfil->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-perfil'])!!} 
        @else 
        {{ Form::open(['role' => 'form','id' => 'form-crear-perfil', 'class'=> 'm-portlet', 'method' => 'POST' , 'url' => route('perfiles.store')]) }}
        @endif              
            @include('material.sections.perfiles.form.campos')
        {{ Form::close() }}

        <div class="tab-pane" id="portlet_tab2">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-haze"></i>
                        <span class="caption-subject bold uppercase"> Consulta de {{ $titulo }}</span>
                    </div>

                </div>
                <div class="portlet-body form">  
                    <table id="tbl_tipo" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ $tituloTabla }}</th>
                                <th>Módulo</th>
                                <th>Requisitos</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                {{--<th>Eliminar</th>--}}
                            </tr>
                        </thead> 
                        <tbody>

                            @if($perfiles->where('i_fk_id_clase',$clase)->count())
                            @foreach($perfiles->where('i_fk_id_clase',$clase) as $perfil)


                            <tr>
                                <td>{{$perfil->vc_tipo}}</td>
                                <td>{{$perfil->modulos['vc_modulo']}}</td>
                                <td> <button class="btn @if($perfil->i_requisitos) green fa fa-thumbs-up @else red fa fa-thumbs-down @endif"></button></td>
                                <td> <button class="btn @if($perfil->i_estado) green fa fa-thumbs-up @else red fa fa-thumbs-down @endif"></button></td>

                                <td>
                                    @if($clase==268)
                                        <a class="btn btn-info fa fa-pencil" href="{{ url('/perfiles/'.$perfil->i_pk_id.'/edit') }}"></a>
                                    @else
                                        <a class="btn btn-info fa fa-pencil" href="{{ url('/cargos/'.$perfil->i_pk_id.'/edit') }}"></a>
                                    @endif
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
                                <th>Perfil</th>
                                <th>Módulo</th>
                                <th>Requisitos</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                {{--<th>Eliminar</th>--}}
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
@endpush


@push('functions')

<script> 

$(document).ready(function() {
    $('#tbl_tipo').DataTable();

    /*$('.borrar-perfil').click(function(){
      //var id_boton = $(this).attr('id');
      var id_boton = $(this).data('id');
      var nombre = $(this).data('nombre');
      console.log(id_boton);
        swal({
            title: "Mensaje de confirmación",
            html: "Esta seguro de querer copiar este incidente a  usuarios?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            showCancelButton: true,
            cancelButtonText: 'No, cancelar!',
            //reverseButtons: true,                 
        }).then((result) => {
           //console.log(result);
            //console.log(dismiss);
            if (result.dismiss=="cancel") {
                console.log("No se va a borrar");
            }else{
                console.log(" se va a borrar");
            }          
        }).catch(swal.noop);         
    });*/ 
       
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
<script src="{{ asset('tours/guia-gestion-perfiles.js')}}"></script>

@endpush

