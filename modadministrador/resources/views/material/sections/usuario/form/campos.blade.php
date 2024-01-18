        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ($errors->has('i_fk_tipo_documento')) has-error @else has-info @endif">
                        {!!Form::select('i_fk_tipo_documento',$tipoDocumentos, null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Indique el tipo de documento'])!!}                                
                        <label for="i_fk_tipo_documento">Tipo de documento (*)</label>
                        <span class="help-block  @if ($errors->has('i_fk_tipo_documento')) help-block-error @endif">@if ($errors->has('i_fk_tipo_documento')) {{ $errors->first('i_fk_tipo_documento')}}  @endif</span>
                    </div>                                
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ($errors->has('i_cedula')) has-error @else has-info @endif">
                        <div class="input-icon">
                            {!!Form::text('i_cedula', null,['class'=>'form-control','placeholder'=>'# de documento'])!!} 
                            <label for="i_cedula">Número de documento (*)</label>
                            <span class="help-block @if ($errors->has('i_cedula')) help-block-error @endif">@if ($errors->has('i_cedula')) {{ $errors->first('i_cedula')}}  @endif</span>
                            <i class="fa fa-user-o"></i>
                        </div>                
                    </div>                 
                </div> 
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ($errors->has('dt_fecha_nacimiento')) has-error @else has-info @endif">
                        <div class="input-icon">    
                            {!!Form::text('dt_fecha_nacimiento',null,['class'=>'form-control datepicker', 'readonly'=>'readonly'])!!}                                                             
                            <label for="dt_fecha_nacimiento">Fecha de Nacimiento </label>
                            <i class="fa fa-calendar"></i>
                            <span class="help-block @if ($errors->has('dt_fecha_nacimiento')) help-block-error @endif">@if ($errors->has('dt_fecha_nacimiento')) {{ $errors->first('dt_fecha_nacimiento')}}  @endif</span>
                        </div>
                    </div>                
                </div> 
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        {!!Form::select('i_fk_area',$areas, null,['class'=>'form-control selectpicker pull-right','data-live-search'=>'true','title'=>'Seleccione la dependencia','data-size'=>'7'])!!}                                
                        <label for="i_fk_area">Dependencia (*)</label>
                        <span class="help-block"></span>
                    </div>                                   
                </div>                                                   
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ($errors->has('name')) has-error @else has-info @endif">
                        <div class="input-icon">
                            {!!Form::text('name',null,['class'=>'form-control mayuscula','placeholder'=>'Primer nombre'])!!} 
                            <label for="name">Primer nombre (*)</label>  
                            <i class="fa fa-address-book"></i>                                                
                            <span class="help-block @if ($errors->has('name')) help-block-error @endif">@if ($errors->has('name')) {{ $errors->first('name')}}  @endif</span>
                        </div>
                    </div>                                
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            {!!Form::text('vc_segundo_nombre',null,['class'=>'form-control mayuscula','placeholder'=>'Segundo nombre'])!!} 
                            <label for="vc_segundo_nombre">Segundo nombre</label>                                                
                            <i class="fa fa-address-book"></i>  
                            <span class="help-block"></span>
                        </div>
                    </div>                 
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ($errors->has('vc_primer_apellido')) has-error @else has-info @endif">
                        <div class="input-icon">
                            {!!Form::text('vc_primer_apellido',null,['class'=>'form-control mayuscula','placeholder'=>'Primer Apellido (*)'])!!} 
                            <label for="vc_primer_apellido">Primer Apellido (*)</label>                                                
                            <i class="fa fa-address-book"></i>  
                            <span class="help-block @if ($errors->has('vc_primer_apellido')) help-block-error @endif">@if ($errors->has('vc_primer_apellido')) {{ $errors->first('vc_primer_apellido')}}  @endif</span>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            {!!Form::text('vc_segundo_apellido',null,['class'=>'form-control mayuscula','placeholder'=>'Segundo Apellido'])!!} 
                            <label for="vc_segundo_apellido">Segundo Apellido</label>                                                
                            <i class="fa fa-address-book"></i>  
                            <span class="help-block"></span>
                        </div>
                    </div>                  
                </div>                                    
            </div>   
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ( $errors->has('email')) has-error @else has-info @endif">
                        <div class="input-icon">
                            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!} 
                            <label for="email">Email</label>                               
                            <i class="fa fa-envelope-o"></i>                                              
                            <span class="help-block @if ($errors->has('email')) help-block-error @endif">@if ($errors->has('email')) {{ $errors->first('email')}}  @endif</span>
                        </div>
                    </div>                                
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ( $errors->has('i_fk_ciudad')) has-error @else has-info @endif"> 
                        {!!Form::select('i_fk_ciudad',$ciudades,null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Ciudad','data-size'=>'8'])!!}                                
                        <label for="i_fk_ciudad">Ciudad Expedición (*)</label>
                        <span class="help-block @if ($errors->has('i_fk_ciudad')) help-block-error @endif">@if ($errors->has('i_fk_ciudad')) {{ $errors->first('i_fk_ciudad')}}  @endif</span>
                    </div>                  
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ( $errors->has('i_fk_genero')) has-error @else has-info @endif">
                        {!!Form::select('i_fk_genero',$generos,null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Genero'])!!}                                
                        <label for="i_fk_genero">Genero (*)</label>
                        <span class="help-block @if ($errors->has('i_fk_genero')) help-block-error @endif">@if ($errors->has('i_fk_genero')) {{ $errors->first('i_fk_genero')}}  @endif</span>
                    </div>                  
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        {!!Form::select('i_fk_etnia',$etnias,null,['class'=>'form-control selectpicker','data-live-search'=>'true','title'=>'Etnia','data-size'=>'8'])!!}                                
                        <label for="i_fk_etnia">Etnia</label>
                        <span class="help-block"></span>
                    </div>                  
                </div>                                     
            </div> 
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group form-md-line-input @if ( $errors->has('i_fk_eps')) has-error @else has-info @endif">
                        {!!Form::select('i_fk_eps',$eps,null,['class'=>'form-control selectpicker dropup','data-live-search'=>'true','title'=>'EPS','data-size'=>'3'])!!}                           
                        <label for="i_fk_eps">EPS (*)</label>  
                        <span class="help-block @if ($errors->has('i_fk_eps')) help-block-error @endif">@if ($errors->has('i_fk_eps')) {{ $errors->first('i_fk_eps')}}  @endif</span>
                    </div>                                
                </div>                
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            {!!Form::text('vc_telefono',null,['class'=>'form-control','placeholder'=>'Teléfono'])!!} 
                            <label for="vc_telefono">Teléfono</label>   
                            <i class="fa fa-phone"></i>                                               
                            <span class="help-block"></span>
                        </div>
                    </div>              
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            {!!Form::text('vc_celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!} 
                            <label for="vc_celular">Celular</label> 
                            <i class="fa fa-mobile-phone"></i>                                               
                            <span class="help-block"></span>
                        </div>
                    </div>                 
                </div>
                <div class="col-md-3">
                    <div class="form-group form-md-line-input has-info">
                        <div class="input-icon">
                            {!!Form::text('vc_direccion',null,['class'=>'form-control mayuscula','placeholder'=>'Dirección'])!!} 
                            <label for="vc_direccion">Dirección</label>                              
                            <i class="fa fa-info"></i>                                           
                            <span class="help-block"></span>
                        </div>
                    </div>                   
                </div>                                      
            </div> 
            <div class="row">               
                <div class="col-md-12">
                    <div class="form-group form-md-line-input @if ($errors->has('i_fk_area_pys')) has-error @else has-info @endif">
                        {!!Form::select('i_fk_area_pys',$areasPys, null,['class'=>'form-control selectpicker','data-live-search'=>'true','placeholder'=>'Seleccione la dependencia (Paz y Salvo)','title'=>' ','data-size'=>'8'])!!}                                
                        <label for="i_fk_area_pys">Seleccione la dependencia (Paz y Salvo) (*)</label>
                        <span class="help-block  @if ($errors->has('i_fk_area_pys')) help-block-error @endif">@if ($errors->has('i_fk_area_pys')) {{ $errors->first('i_fk_area_pys')}}  @endif</span>
                    </div>                                   
                </div>                                     
            </div>
            <div class="row mb-3"></div>
            <div class="form-actions noborder">
                {{ Form::submit('Guardar', ['class' => 'form-control btn green']) }}
            </div>     
            <div class="row mb-3"></div>        
        </div>     
 