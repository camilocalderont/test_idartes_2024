<div class="form-body">
    <div class="row">
        <div class="col-md-6 form-group form-md-line-input @if ($errors->has('vc_parametro')) has-error @else has-info @endif">                        
            <div class="input-icon">
                <label for="vc_parametro">Nombre del Parámetro</label>
                {!!Form::text('vc_parametro', null,[
                    'class'=>'form-control',
                    'placeholder'=>'Añadir'])!!} 
                <i class="fa fa-bell-o"></i>
                @if ($errors->has('vc_parametro'))
                    <div class="help-block help-block-error">
                            {{ $errors->first('vc_parametro')}}  
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6 form-group form-md-line-input has-info">
            <div class="input-icon">
                <label for="i_estado">¿Activo? (*)</label>  
                {!!Form::checkbox('i_estado',null, null,
                ['class'=>'btn-switch',
                'data-on-color'=>'success',
                'data-on-text'=>'SI',
                'data-off-color'=>'danger',
                'data-off-text'=>'NO'])!!}
                <span class="help-block"></span>  
            </div>
        </div>                         
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 form-group form-md-line-input has-info">                        
            <div class="input-icon"> 
                {{ Form::submit('Guardar', [
                    'class' => 'btn btn-block blue', 
                    'id' => 'crear_parametro']) }}
            </div>
        </div> 
    </div> 
</div>