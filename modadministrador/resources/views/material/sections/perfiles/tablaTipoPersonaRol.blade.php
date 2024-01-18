<div class="card">


    <table class='table table-hover ' id='tabla_tipoRol' style='width: 100%'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Fecha Posesion</th>
                <th>Fecha Fin</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>
                        {{ $rol->tipo->i_pk_id }}
                        {!! Form::hidden('i_pk_id_hidden', $rol->i_pk_id, ['class' => 'i_pk_id_hidden']) !!}
                    </td>

                    <td>
                        {{ $rol->tipo->vc_tipo }}
                        {!! Form::hidden('tipo_id_hidden', $rol->tipo_id, ['class' => 'tipo_id_hidden']) !!}
                    </td>
                    <td class="fecha-posesion">
                        {{ $rol->dt_fecha_posesion }}
                        {!! Form::hidden('fecha_posesion_hidden', $rol->dt_fecha_posesion, ['class' => 'fecha_posesion_hidden']) !!}
                    </td>

                    <td class="fecha-retiro">
                        {{ $rol->dt_fecha_retiro }}
                        {!! Form::hidden('fecha_retiro_hidden', $rol->dt_fecha_retiro, ['class' => 'fecha_retiro_hidden']) !!}
                    </td>
                    <td>
                        {{ is_object($rol->parametroDetalles) ? $rol->parametroDetalles->vc_parametro_detalle : '' }}
                        {!! Form::hidden('i_fk_id_area_hidden', $rol->i_fk_id_area, ['class' => 'i_fk_id_area_hidden']) !!}
                    </td>
                    <td>
                        <a class="btn blue fa fa-pencil actualizarUsuario" data-id_tipo_persona="{{ $rol->i_pk_id }}"></a>
                        <button class="btn red desactivar-usuario fa fa-arrow-down" data-id="{{ $rol->i_pk_id }}"
                            data-toggle="tooltip" title="Desactivar Rol"></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
