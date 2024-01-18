<div class="card">


    <table class='table table-hover ' id='table_usuarios' style='width: 100%'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Fecha Posesion</th>
                <th>Fecha Fin</th>
                <th>Área</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoPersonas as $tipoPersona)
                @php
                    $class = '';
                    $estado = '';
                    if ($tipoPersona->i_estado == 1) {
                        $class = 'success';
                        $estado = 'Activo';
                    } else {
                        $class = 'danger';
                        $estado = 'Inactivo';
                    }
                @endphp
                <tr>
                    <td> {{ $tipoPersona->usuario->id }}</td>
                    <td> {{ $tipoPersona->usuario->full_name }}</td>
                    <td> {{ $tipoPersona->usuario->i_cedula }}</td>
                    <td>{{ $tipoPersona->dt_fecha_posesion }}</td>
                    <td>{{ $tipoPersona->dt_fecha_retiro  }}</td>
                    <td>{{ is_object($tipoPersona->parametroDetalles) ? $tipoPersona->parametroDetalles->vc_parametro_detalle : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
