<div class="card">
  
</div>
<table class='table table-hover' id='table_parametros' style='width: 100%'> 
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th> 
      <th>Padre</th> 
      <th>Estado</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
@foreach ($parametros as $parametro) 
  @php
     //dd($parametro->padre->vc_parametro_detalle); 
  @endphp 
  <tr>
    <td> {{ $parametro->i_pk_id }}   </td>
    <td> {{ $parametro->vc_parametro_detalle }} </td>
    <td> {{ $parametro->i_fk_id_padre }} </td>
    <td> <button class="btn @if($parametro->i_estado) green fa fa-thumbs-up @else red fa fa-thumbs-down @endif"></button> </td>
    <td> <button class="btn blue fa fa-pencil modificar-parametro-detalle" data-id="{{$parametro->i_pk_id}}"></button> </td>
  </tr>
@endforeach 
</tbody>
</table>