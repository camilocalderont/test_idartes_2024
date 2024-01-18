<div class="card">


    <table class='table table-hover ' id='table_usuarios' style='width: 100%'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Fecha Posesion</th>
                <th>Fecha Fin</th>
                <th>Área</th>
                <th>Encargado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoPersonas as $tipoPersona)
                @php
                    $class = '';
                    $estado = '';
                    if ($tipoPersona->i_encargo == 1) {
                        $class = 'success';
                        $estado = 'Activo';
                    } else {
                        $class = 'danger';
                        $estado = 'Inactivo';
                    }
                @endphp
                <tr>
                    <td> 
                        {{ $tipoPersona->usuario->full_name }}
                        {!! Form::hidden('i_pk_id_hidden', $tipoPersona->i_pk_id, ['class' => 'i_pk_id_hidden']) !!} 
                    </td>
                    <td> {{ $tipoPersona->usuario->i_cedula }}</td>
                    <td class="fecha-posesion">
                        {{ $tipoPersona->dt_fecha_posesion }}
                        {!! Form::hidden('fecha_posesion_hidden', $tipoPersona->dt_fecha_posesion, ['class' => 'fecha_posesion_hidden']) !!}
                    </td>

                    <td class="fecha-retiro">
                        {{ $tipoPersona->dt_fecha_retiro  }}
                        {!! Form::hidden('fecha_retiro_hidden', $tipoPersona->dt_fecha_retiro, ['class' => 'fecha_retiro_hidden']) !!}
                    </td>

                    <td>{{ is_object($tipoPersona->parametroDetalles) ? $tipoPersona->parametroDetalles->vc_parametro_detalle : '' }}
                    </td>
                    <td>
                        <span class="label label-{{ $class }}">
                            <span class="badge badge-{{ $class }}">{{ $tipoPersona->i_encargo }}</span>
                            {{ $estado }}
                        </span>
                    </td>
                    <td>
                        <a class="btn blue fa fa-pencil actualizarUsuario"
                            data-id_tipo_persona="{{ $tipoPersona->i_pk_id }}"></a>
                        <button class="btn red desactivar-usuario "
                            data-id="{{ $tipoPersona->i_pk_id }}" data-toggle="tooltip"
                            title="Desactivar Usuario">
                            <i class="fa fa-trash" aria-hidden="true"></i></button>
                        <a class="btn green fa fa-download" href="{{ $tipoPersona->vc_anexo_ruta }}"
                            title="Descargar Anexo" target="_blank"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
