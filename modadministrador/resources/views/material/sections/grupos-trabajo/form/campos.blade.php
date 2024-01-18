        <div class="form-body">
                <div class="row">
                    <div class="col-md-3 form-group form-md-line-input has-info">                  
                        <label for="form_control_1">Usuario (*)</label>
                            {!! Form::hidden('i_fk_id_grupo')!!}
                            {!!Form::select('i_fk_id_usuario',$usuarios_activos,null,[
                                'class'=>'selectpicker form-control',
                                'id'=>'i_fk_id_padre',                                
                                'data-live-search'=>'true',
                                'required'=>'required',
                                'placeholder'=>'Parámetro Detalle'])!!}
                        
                    </div>
                    <div class="col-md-3 form-group form-md-line-input has-info">
                        <div class="input-icon">    
                            <label for="d_fecha_retiro">Fecha Retiro (*)</label>
                            {!!Form::text('d_fecha_retiro',null,['class'=>'form-control datepicker','required'=>'required'])!!}                                                        
                            <i class="fa fa-calendar"></i>
                            <span class="help-block"></span>
                        </div>
                    </div>                
                    <div class="col-md-3 form-group form-md-line-input has-info">
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
                    <div class="col-md-3 form-group form-md-line-input has-info">                        
                        <div class="input-icon">
                            <label for="i_estado"></label>  
                            {{ Form::submit('Guardar', [
                                'class' => 'btn btn-block green', 
                                'id' => 'guardar_usuario']) }}
                        </div>
                    </div>                        
                </div>
            </div>