	<div class="mt-element-ribbon bg-grey-steel">
        <div class="ribbon ribbon-color-{{$Color}} uppercase btn-block">{{$Grupo['vc_etc']}}<br>
            
            <div class="btn-group ">
                <button class="btn btn-default btn-sm  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Opciones grupo
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">                   
                    <li>
                        <a href="{{ route('editar_etc', [ 'id' => $Grupo['i_pk_id']])  }}"> Editar Etc</a>
                    </li>
                </ul>
            </div>
        </div>

        <label class="ribbon-content ">Especificaciones:
            <br>
            <br>
            @if($Grupo['i_estado']==1)
            <i class="fa fa-check-square-o" aria-hidden="true"> Activo</i>
            @else
            <i class="fa fa-times" aria-hidden="true"> Inactivo</i>
            @endIf
            <br>
            <b>Feccha inicio:</b> {{$Grupo['dt_fecha_inicio']}}
            <br>
            <b>Feccha fin:</b> {{$Grupo['dt_fecha_fin']}}
            <br>
        </label>
    </div>



