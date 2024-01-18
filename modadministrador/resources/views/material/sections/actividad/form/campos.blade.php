    

    <div class="form-body">
        {{--<div class="col-xs-12">--}}

            {{--<div class="tab-content">--}}
                <div class="row">
                    <div class="col-md-4 form-group form-md-line-input @if ($errors->has('vc_actividad')) has-error @else has-success @endif">    
                        <div class="input-icon">
                            <label for="form_control_1">Actividad</label>

                            {!!Form::text('vc_actividad', null,[
                                'class'=>'form-control',
                                'placeholder'=>'Nombre de la actividad'])!!} 
                                <i class="fa fa-paperclip"></i>
                                @if ($errors->has('vc_actividad'))
                                <div class="help-block help-block-error">
                                 {{ $errors->first('vc_actividad')}}  
                             </div>
                             @endif
                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input has-success"> 
                            <label for="form_control_1">¿A qué módulo pertenece?</label>

                            {!!Form::select('i_fk_id_modulo',$modulo,null,[
                                'class'=>'selectpicker form-control',
                                'data-live-search'=>'true',
                                'id'=>'i_fk_id_modulo',                                
                                'data-live-search'=>'true',
                                'placeholder'=>'Seleccione el módulo'])!!}
                        </div>
                    </div>
                    <div class="col-md-4 form-group form-md-line-input @if ($errors->has('vc_descripcion')) has-error @else has-success @endif">    
                        <div class="input-icon">
                            <label for="form_control_1">Descripción</label>
                            {!!Form::text('vc_descripcion', null,[
                                'class'=>'form-control',
                                'placeholder'=>'Descripción de la actividad'])!!}
                                <span class="help-block"></span> 
                                <i class="fa fa-file-text-o"></i>
                                @if ($errors->has('vc_descripcion'))
                                <div class="help-block help-block-error">
                                 {{ $errors->first('vc_descripcion')}}  
                             </div>
                             @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group form-md-line-input @if ($errors->has('vc_redireccion')) has-error @else has-success @endif">    
                        <div class="input-icon">
                            <label for="form_control_1">Redirección</label>

                            {!!Form::text('vc_redireccion', null,[
                                'class'=>'form-control',
                                'placeholder'=>'/localhost/'])!!} 

                                <i class="fa fa-hand-pointer-o"></i>
                                @if ($errors->has('vc_redireccion'))
                                <div class="help-block help-block-error">
                                 {{ $errors->first('vc_redireccion')}}  
                             </div>
                             @endif
                        </div>
                    </div>
                    <div class="col-md-4 form-group form-md-line-input @if ($errors->has('vc_imagen')) has-error @else has-success @endif">    
                        <div class="input-icon">
                            <label for="form_control_1">Imagen</label>
                            
                            {!!Form::text('vc_imagen', null,[
                                'class'=>'form-control',
                                'placeholder'=>'/localhost/'])!!} 

                                <i class="fa fa-hand-pointer-o"></i>
                                @if ($errors->has('vc_imagen'))
                                <div class="help-block help-block-error">
                                 {{ $errors->first('vc_imagen')}}  
                             </div>
                             @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-md-line-input has-success"> 
                            <label for="form_control_1">Anidar actividad en </label>

                            {!!Form::select('i_fk_id_padre',[], null ,[
                                'class'=>'selectpicker form-control',
                                'data-live-search'=>'true',                                
                                'data-live-search'=>'true',
                                'id'=>'i_fk_id_padre',
                                'placeholder'=>'Seleccione una actividad padre',
                                'title'=>'Seleccione una actividad padre'])!!}
                        </div>
                    </div>                    
                    <div class="col-md-1 form-group form-md-line-input has-success">
                        <div class="input-icon">
                            <label for="i_estado">¿Activo? (*)</label>  
                            {!!Form::checkbox('i_estado',null, null,
                                ['class'=>'make-switch',
                                'data-on-color'=>'success',
                                'data-on-text'=>'SI',
                                'data-off-color'=>'danger',
                                'data-off-text'=>'NO'])!!}
                                <span class="help-block"></span>  
                        </div>
                    </div> 
                    @if(isset($actividad))
                        {!! Form::hidden('_method', 'PUT' ) !!}
                        {!! Form::hidden('i_fk_id_padre_', $actividad->i_fk_id_padre,['id'=>'i_fk_id_padre_']) !!}
                    @endif                     
                </div>
                <div class="row">
                    
                    <div class="col-md-12 form-group form-md-line-input has-success">
                        <div class="form-actions noborder">
                            {{ Form::submit('Guardar', [
                                'class' => 'btn btn-block green', 
                                'id' => 'crear-actividad']) }}
                        </div>
                    </div>
                </div>   
            {{--</div>--}}
        {{--</div>--}}
    </div>



