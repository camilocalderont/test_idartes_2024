<div id="modalTipoPersona" class="modal container fade" tabindex="-1" aria-hidden="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="modalUsuariosLabel">
            <i class="icon-settings font-green-haze"></i>
            {{ isset($tipoPersonas) ? 'Actualizar Usuario' : 'Registrar Usuario' }}
        </h4>
    </div>
    <div class="modal-body" id="modal-body">
        {{ Form::open(['role' => 'form', 'id' => 'formulario', 'class' => 'm-portlet', 'method' => 'POST', 'url' => route('guardar-tipo-persona')]) }}
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-9">
                    {!! Form::hidden('i_pk_id', isset($tipoPersonas) ? $tipoPersonas->i_pk_id : null, ['id' => 'i_pk_id']) !!}
                    {!! Form::hidden('tipo_id', isset($cargoid) ? $cargoid : null, ['id' => 'tipo_id']) !!}
                    <div class="form-group form-md-line-input has-info ">
                        {!! Form::select('user_id', $usuarios, isset($tipoPersonas) ? $tipoPersonas->user_id : null, [
                            'class' => 'form-control selectpicker ',
                            'data-live-search' => 'true',
                            'title' => 'Seleccione el usuario',
                            'data-size' => '8',
                            'id' => 'user_id',
                            'data-live-search' => 'true',
                        ]) !!}
                        <label for="user_id">Seleccione el usuario (*)</label>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info input-check">
                        <div class="input-icon">
                            <label for="i_encargo">Usuario Encargado</label>
                            {!! Form::checkbox('i_encargo', null, isset($tipoPersonas) ? $tipoPersonas->i_encargo : 0, [
                                'class' => 'btn-switch',
                                'id' => 'i_encargo',
                                'data-on-color' => 'success',
                                'data-on-text' => 'Activo',
                                'data-off-color' => 'danger',
                                'data-off-text' => 'Inactivo',
                            ]) !!}
                            <span class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-md-line-input has-info">
                        {!! Form::select('i_fk_id_area', $areas, isset($tipoPersonas) ? $tipoPersonas->i_fk_id_area : null, [
                            'class' => 'form-control selectpicker select-area ',
                            'data-live-search' => 'true',
                            'title' => 'Seleccione la dependencia',
                            'placeholder' => 'Seleccione la dependencia',
                            'data-size' => '7',
                        ]) !!}
                        <label for="i_fk_area_pys">Seleccione la dependencia (Area)</label>
                        <span class="help-block ">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            <input type="datetime-local" id="dt_fecha_posesion" name="dt_fecha_posesion" class="form-control flatpickr" value="{{ isset($tipoPersonas) ? $tipoPersonas->dt_fecha_posesion : null }}">
                            {{--{!! Form::text('dt_fecha_posesion', isset($tipoPersonas) ? $tipoPersonas->dt_fecha_posesion : null, [
                                'class' => 'form-control datepicker',
                                'readonly' => 'readonly',
                                'id' => 'dt_fecha_posesion',
                            ]) !!}--}}
                            <label for="dt_fecha_posesion">Fecha de Posesion </label>
                            <i class="fa fa-calendar"></i>
                            <span class="help-block">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            <input type="datetime-local" id="dt_fecha_retiro" name="dt_fecha_retiro" class="form-control flatpickr" value="{{ isset($tipoPersonas) ? $tipoPersonas->dt_fecha_retiro : null }}">
                            {{--{!! Form::text('dt_fecha_retiro', isset($tipoPersonas) ? $tipoPersonas->dt_fecha_retiro : null, [
                                'class' => 'form-control datepicker',
                                'readonly' => 'readonly',
                                'id' => 'dt_fecha_retiro',
                            ]) !!}--}}
                            <label for="dt_fecha_retiro">Fecha de Retiro </label>
                            <i class="fa fa-calendar"></i>
                            <span class="help-block">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <table class='table table-hover' style='width: 100%'>
                <thead>
                    <tr>
                        <th>Cargar Anexo</th>
                        <th>Nombre archivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 0; text-align: left; vertical-align: middle;">
                            <div class="col-md-6" style="margin: 0 auto;">
                                <div class="form-group form-md-line-input has-info" style="margin-bottom: 0;">
                                    <div class="input-group" style="position: relative; margin-bottom: 10px;">
                                        <div class="custom-file">
                                            {!! Form::file('vc_anexo_soporte_oficio', [
                                                'id' => 'vc_anexo_soporte_oficio',
                                                'accept' => '.pdf',
                                                'class' => 'custom-file-input has-info',
                                                'required' => !is_object($tipoPersonas),
                                                'style' => 'border: none; background-color: transparent; box-shadow: none;',
                                            ]) !!}
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 10px; text-align: left; vertical-align: middle;">
                            @if (isset($tipoPersonas) && $tipoPersonas->vc_anexo_soporte_oficio)
                                @php
                                    $nombreArchivo = basename($tipoPersonas->vc_anexo_ruta);
                                @endphp
                                <span
                                    style="text-decoration: none; color: #333; display: inline-block; margin-bottom: 10px;">
                                    <i class="fa fa-file-pdf-o" style="margin-right: 5px;"></i> {{ $nombreArchivo }}
                                </span>
                            @endif
                        </td>
                        <td>
                            @if (isset($tipoPersonas) && $tipoPersonas->vc_anexo_soporte_oficio)
                                <a class="btn green fa fa-download" href="{{ $tipoPersonas->vc_anexo_ruta }}"
                                    title="Descargar Anexo" target="_blank"></a>
                               <!-- <button type="button" class="btn btn-danger eliminar-anexo" title="Eliminar Anexo">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>-->
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mb-3"></div>
        <div class="form-actions noborder">
            <div class="form-group form-md-line-input has-info">
                <div class="input-icon">
                    {!! Form::text('input_error', null, [
                        'class' => 'form-control',
                        'readonly' => 'readonly',
                    ]) !!}
                    <span class="help-block"></span>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="form-control btn green" type="button" id="save-users">Guardar</button>
        </div>
        <div class="row mb-3"></div>
    </div>
</div>
{!! Form::close() !!}
