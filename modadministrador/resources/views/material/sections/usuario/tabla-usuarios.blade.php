<div class="card">


    <table class='table table-hover' id='table_usuarios' style='width: 100%'>
        <thead>
            <tr>
                <th>id</th>
                <th>Estado</th>
                <th>Área</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                @php
                    $class = '';
                    $estado = '';
                    if ($usuario->vc_estado == 1) {
                        $class = 'success';
                        $estado = 'Activo';
                    } else {
                        $class = 'danger';
                        $estado = 'Inactivo';
                    }
                @endphp
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>
                        <span class="label label-{{ $class }}">
                            <span class="badge badge-{{ $class }}">{{ $usuario->vc_estado }}</span>
                            {{ $estado }}
                        </span>
                    </td>
                    <td> {{ $usuario->area->vc_parametro_detalle }}</td>
                    <td> {{ $usuario->i_cedula }}</td>
                    <td> {{ $usuario->full_name }}</td>
                    <td> {{ $usuario->email }} </td>
                    <td>
                        <a class="btn blue fa fa-pencil" href="{{ url('/usuarios/' . $usuario->id . '/edit') }}"></a>
                        <button class="btn green reset-password fa fa-key" data-id="{{ $usuario->id }}"
                            data-toggle="tooltip" title="Resetear Contraseña"></button>
                        <button class="btn red desactivar-usuario fa fa-arrow-down" data-id="{{ $usuario->id }}"
                            data-toggle="tooltip" title="Desactivar Usuario"></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
