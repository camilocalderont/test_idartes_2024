<div id="formularioRoles" class="modal container fade" tabindex="-1" aria-hidden="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="modalUsuariosLabel">
            <i class="icon-settings font-green-haze"></i>
            {{ isset($tipoPersonas) ? 'Actualizar Rol' : 'Agregar Nuevo Rol' }}
        </h4>
    </div>
    <div class="modal-body" id="modal-body">
        {{ Form::open(['role' => 'form', 'id' => 'formulario', 'class' => 'm-portlet', 'method' => 'POST', 'url' => route('guardar-tipo-persona-rols')]) }}
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-9">
                    {!! Form::hidden('i_pk_id', isset($tipoPersonas) ? $tipoPersonas->i_pk_id : null, ['id' => 'i_pk_id']) !!}
                    {!! Form::hidden('user_id', isset($userid) ? $userid : null, ['id' => 'user_id']) !!}
                    <div class="form-group form-md-line-input has-info ">
                        {!! Form::select('tipo_id', ['' => 'SELECCIONE EL ROL'] + $roles, isset($tipoPersonas) ? $tipoPersonas->tipo_id : null, [
                            'class' => 'selectpicker form-control',
                            'id' => 'tipo_id',
                            'data-actions-box' => 'true',
                            'data-live-search' => 'true',
                            'data-size' => '6',
                        ]) !!}
                        <label for="tipo_id">Seleccione el Rol (*)</label>
                        <span class="help-block"></span>
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
                            'id' => 'i_fk_id_area',
                            'data-size' => '3',
                        ]) !!}
                        <label for="i_fk_area">Seleccione la dependencia (Area)</label>
                        <span class="help-block ">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            <input type="datetime-local" id="dt_fecha_posesion" name="dt_fecha_posesion" class="form-control flatpickr" value="{{ isset($tipoPersonas) ? $tipoPersonas->dt_fecha_posesion : null }}">
                            {{--{!! Form::date('dt_fecha_posesion', isset($tipoPersonas) ? $tipoPersonas->dt_fecha_posesion : null, [
                                'class' => 'form-control ',
                               //'readonly' => 'readonly',
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
                        <span class="help-block"></span>
                      </div>
                    </div>
                  </div>
                  
            </div>
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
