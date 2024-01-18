@if($Grupo['i_estado'])
<div class="mt-element-list">
    <div class="mt-list-head list-simple font-white bg-green-sharp">
        <div class="list-head-title-container">
            <div class="list-date">Calificación </div>
            <h3 class="list-title">{{$Grupo['vc_nombre']}}</h3>
        </div>
    </div>
    

        @foreach($Grupo->grupos as $subgrupo) 
        @if($subgrupo['i_estado'])
        <h5><b>{{$subgrupo['vc_nombre']}}</b></h5>
        <div class="mt-list-container list-simple">

            <?php 
                $var=1; 
                $SubItemGrupo=$subgrupo->criterios->sortBy('i_orden');
            ?>
            @foreach($SubItemGrupo as $pregunta) 
            @if($pregunta['i_estado'])
            <h5>{{$pregunta['vc_nombre']}}</h5>
            <div class="row">

                    @if($pregunta['i_form_temperatura']==1)
                        <?php $a=7;?>
                        <?php $b=3;?>
                        <?php $c=2;?>
                    @else
                        <?php $a=9;?>
                        <?php $b=3;?>
                        <?php $c=0;?>
                    @endif


                    <div class="col-md-{{$a}}">
                        <div class="form-group">
                            
                             {{$var}}. {{$pregunta['vc_criterio']}}
                        </div>
                         
                    </div>

                    <div class="col-md-{{$b}}">
                        <div class="form-group">
                            <label class="control-label col-md-12">Puntaje</label><br>
                            <div class="input-group">
                                <div class="icheck-inline">
                                    <?php $valor=0;?>
                                @if($Ejecucion)
                                    
        
                                    @foreach($Ejecucion as $pivot) 
                                        
                                        
                                            @if($pregunta['i_pk_id']==$pivot->pivot['i_fk_id_criterio'])
                                                <?php $valor=$pivot->pivot['vc_puntaje']; ?>
                                            @endif

                                     
                                    @endforeach

                                    

                                    @if($valor==0)
                                        <label>
                                         <input type="radio" value="0" name="pregunta[{{$pregunta['i_pk_id']}}]" checked class="icheck" data-radio="iradio_square-grey"> 0 </label>
                                    @else
                                         <label>
                                         <input type="radio" value="0" name="pregunta[{{$pregunta['i_pk_id']}}]" class="icheck" data-radio="iradio_square-grey"> 0 </label>   
                                    @endif 

                                    @if($valor==1)
                                        <label>
                                        <input type="radio" value="1" name="pregunta[{{$pregunta['i_pk_id']}}]" checked class="icheck" data-radio="iradio_square-grey"> 1 </label>
                                    @else
                                         <label>
                                        <input type="radio" value="1" name="pregunta[{{$pregunta['i_pk_id']}}]" class="icheck" data-radio="iradio_square-grey"> 1 </label>   
                                    @endif

                                    @if($valor==2)
                                        <label>
                                        <input type="radio" value="2" name="pregunta[{{$pregunta['i_pk_id']}}]" checked class="icheck" data-radio="iradio_square-grey"> N.A </label>
                                    @else
                                        <label>
                                        <input type="radio" value="2" name="pregunta[{{$pregunta['i_pk_id']}}]" class="icheck" data-radio="iradio_square-grey"> N.A </label> 
                                    @endif

                                @else
                                    <label>
                                        <input type="radio" value="0" name="pregunta[{{$pregunta['i_pk_id']}}]"  class="icheck" data-radio="iradio_square-grey"> 0 </label>
                                    <label>
                                        <input type="radio" value="1" name="pregunta[{{$pregunta['i_pk_id']}}]" class="icheck" data-radio="iradio_square-grey"> 1 </label>
                                    <label>
                                        <input type="radio" value="2" name="pregunta[{{$pregunta['i_pk_id']}}]" checked class="icheck" data-radio="iradio_square-grey"> N.A </label>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    @if($c==2)
                    <div class="col-md-2"> 
                        <div class="form-group text-center">
                            <label class="control-label col-md-12">Formato temperatura.</label>
                            <a href="{{ route('index_formatostemperatura',[$id_visita,$Formulario['i_pk_id'],$pregunta['i_pk_id']]) }}" role="button" class="btn blue" >Registrar</a>
                        </div>
                    </div>
                    @endif
                    
            </div>
            <hr class="col-md-12">
            <?php $var++; ?>
            @endif
            @endforeach
            <br>

        </div>
        @endif
        @endforeach
        
    
</div>
@endif