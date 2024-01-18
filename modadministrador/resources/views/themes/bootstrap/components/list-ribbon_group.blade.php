	   <div class="mt-element-ribbon bg-grey-steel">
        <div class="ribbon ribbon-color-{{$Color}} uppercase btn-block">{{$Grupo['vc_nombre']}}
            <br>
            @if($Grupo['i_estado']==1)
            <i class="fa fa-check-square-o" aria-hidden="true"> Activo</i>
            @else
            <i class="fa fa-times" aria-hidden="true"> Inactivo</i>
            @endIf
            <br>
            <i class="fa fa-cc-diners-club" aria-hidden="true"> Peso: {{$Grupo['i_peso']}}</i>
            <div class="btn-group ">
                <button class="btn btn-default btn-sm  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Opciones grupo
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    
                    <li>
                        <a href="{{ route('editar_items_colegio', [ 'id' => $Grupo['i_pk_id']])  }}"> Editar Grupo</a>
                    </li>
                    <li>
                        <a href="{{ route('index_grupo_colegio', [ 'id' => $Grupo['i_pk_id']])  }}"> Agregar Subgrupo </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <p class="font-green-sharp">Subgrupos:</p>
        <?php $var=1;?>
        @foreach($Grupo->grupos as $subgrupo) 
            <label class="ribbon-content ">{{$var}}. {{$subgrupo['vc_nombre']}}
            <br>
            @if($subgrupo['i_estado']==1)
            <i class="fa fa-check-square-o" aria-hidden="true"> Activo</i>
            @else
            <i class="fa fa-times" aria-hidden="true"> Inactivo</i>
            @endIf
            <br>
            <i class="fa fa-cc-diners-club" aria-hidden="true"> <b>Peso:</b> {{$subgrupo['i_peso']}}</i>
            <div class="btn-group ">
                <button class="btn btn-default btn-sm  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Opciones
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    
                    <li>
                        <a href="{{ route('editar_grupo_colegio', [ 'id' => $subgrupo['i_pk_id']])  }}"> Editar Subgrupo</a>
                    </li>
                    <li>
                        <a href="{{ route('index_subgrupo_pregunta_colegio', [ 'id' => $subgrupo['i_pk_id']])  }}"> Agregar Preguntas </a>
                    </li>
                    <li>
                        <a href="{{ route('tabla_pregunta_subgrupo_col', [ 'id' => $subgrupo['i_pk_id']])  }}"> Lista de Preguntas </a>
                    </li>
                </ul>
            </div>
            </label>

        <?php $var++;?>
        @endforeach
                                        
    </div>



<!--

    <div class="mt-element-ribbon bg-grey-steel">
        <div class="ribbon ribbon-color-{{$Color}} uppercase btn-block">{{$Grupo['vc_nombre']}}
            <br>
            @if($Grupo['i_estado']==1)
            <i class="fa fa-check-square-o" aria-hidden="true"> Activo</i>
            @else
            <i class="fa fa-times" aria-hidden="true"> Inactivo</i>
            @endIf
            <br>
            <div class="btn-group ">
                <button class="btn btn-default btn-sm  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Opciones
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('editar_grupo_colegio', [ 'id' => $Grupo['i_pk_id']])  }}"> Editar Grupo</a>
                    </li>
                    <li>
                        <a href="{{ route('index_subgrupo_pregunta_colegio', [ 'id' => $Grupo['i_pk_id']])  }}"> Agregar Preguntas </a>
                    </li>
                    <li>
                        <a href="{{ route('tabla_pregunta_subgrupo_col', [ 'id' => $Grupo['i_pk_id']])  }}"> Lista de Preguntas </a>
                    </li>
                </ul>
            </div>
        </div>    
    </div>



-->