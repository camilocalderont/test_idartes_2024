<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group form-md-line-input @if ($errors->has('vc_parametro_detalle')) has-error @else has-info @endif">
                <div class="input-icon">
                    {!!Form::text('vc_parametro_detalle', null,['class'=>'form-control ','placeholder'=>'Nombre','required'=>'required'])!!} 
                    <label for="vc_parametro_detalle">Nombre (*)</label>
                    <span class="help-block @if ($errors->has('vc_parametro_detalle')) help-block-error @endif">@if ($errors->has('vc_parametro_detalle')) {{ $errors->first('vc_parametro_detalle')}}  @endif</span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </div>                
            </div>                 
        </div>
        <div class="col-md-6">
            <div class="form-group form-md-line-input vw-100 pull-right @if ($errors->has('i_fk_id_padre')) has-error @else has-info @endif">
                {!!Form::select('i_fk_id_padre',$parametrosDetalle, null,['class'=>'form-control selectpicker pull-right ','data-live-search'=>'true','title'=>'Anidar en','data-size'=>'5'])!!}                                
                <label for="i_fk_id_padre">Anidar en</label>
                <span class="help-block @if ($errors->has('i_fk_id_padre')) help-block-error @endif">@if ($errors->has('i_fk_id_padre')) {{ $errors->first('i_fk_id_padre')}}  @endif</span>
            </div>                   
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group form-md-line-input @if ($errors->has('vc_codigo_interno')) has-error @else has-info @endif">                        
            <div class="input-icon">
                <label for="vc_codigo_interno">Código Interno</label>
                {!!Form::text('vc_codigo_interno', null,[
                    'class'=>'form-control',
                    'placeholder'=>'Codigo Interno'])!!} 
                <i class="fa fa-bell-o"></i>
                @if ($errors->has('vc_codigo_interno'))
                    <div class="help-block help-block-error">
                            {{ $errors->first('vc_codigo_interno')}}  
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
        {!! Form::hidden('i_fk_id_parametro')!!}
        <div class="col-md-12 form-group form-md-line-input has-success">
            <div class="form-actions noborder">
                {{ Form::button('Guardar', [
                    'class' => 'btn btn-block blue guardar-parametro-detalle'
                    ]) }} 
            </div>
        </div>
    </div>
</div>