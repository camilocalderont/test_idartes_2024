<div class="form-body">
    <div class="row">
        <div
            class="col-md-6 form-group form-md-line-input @if ($errors->has('vc_tipo')) has-error @else has-info @endif">
            <div class="input-icon">
                <label for="form_control_1">Perfil de Usuario</label>

                {!! Form::text('vc_tipo', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Perfil de Usuario',
                ]) !!}

                <span class="help-block">Añade un perfil de Usuario </span>
                <i class="fa fa-bell-o"></i>
                @if ($errors->has('vc_tipo'))
                    <div class="help-block help-block-error">
                        {{ $errors->first('vc_tipo') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-2 form-group form-md-line-input has-info">
            <div class="input-icon">
                <label for="i_requisitos">¿Requerir? (*)</label>
                {!! Form::checkbox('i_requisitos', null, null, [
                    'class' => 'make-switch',
                    'data-on-color' => 'info',
                    'data-on-text' => 'SI',
                    'data-off-color' => 'danger',
                    'data-off-text' => 'NO',
                ]) !!}
                <span class="help-block"></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group form-md-line-input has-info">
                <label for="form_control_1">¿A qué módulo pertenece?</label>

                {!! Form::select('i_fk_id_modulo', $modulo, null, [
                    'class' => 'selectpicker form-control',
                    'data-live-search' => 'true',
                    'id' => 'vc_modulo',
                    'data-live-search' => 'true',
                ]) !!}
            </div>
        </div>
        <div class="col-md-1 form-group form-md-line-input has-info">
            <div class="input-icon">
                <label for="i_estado">¿Activo? (*)</label>
                {!! Form::checkbox('i_estado', null, null, [
                    'class' => 'make-switch',
                    'data-on-color' => 'info',
                    'data-on-text' => 'SI',
                    'data-off-color' => 'danger',
                    'data-off-text' => 'NO',
                ]) !!}
                <span class="help-block"></span>
            </div>
        </div>
    </div>
    <div>
        @if (isset($perfil))
            {!! Form::hidden('_method', 'PUT') !!}
        @endif
        <div class="col-md-12 form-group form-md-line-input has-info">
            <div class="form-actions noborder">
                {{ Form::hidden('i_fk_id_clase', $clase, ['id' => 'i_fk_id_clase']) }}
                {{ Form::submit('Guardar', [
                    'class' => 'btn btn-block blue',
                    'id' => 'crear-perfil-usuario',
                ]) }}
            </div>
        </div>
    </div>
</div>
