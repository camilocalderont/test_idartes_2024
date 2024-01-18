<div class="card">
  
</div>
<table class='table table-hover' id='table_usuarios' style='width: 100%'> 
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Fecha Retiro</th> 
      <th>Estado</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $usuario) 
      <tr>
        <td> {{ $usuario->usuarios->fullname }}   </td>
        <td> {{ $usuario->d_fecha_retiro }}   </td>
        <td> <button class="btn @if($usuario->i_estado) green fa fa-thumbs-up @else red fa fa-thumbs-down @endif"></button> </td>
        <td> <button class="btn blue fa fa-pencil modificar-usuario" data-id="{{$usuario->i_pk_id}}"></button> </td>
      </tr>
    @endforeach
  </tbody>
</table>