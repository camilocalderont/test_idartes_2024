<div class="card">
  
</div>
<table class='table table-hover' id='table_auditoria' style='width: 100%'> 
  <thead>
    <tr>
      <th>Tabla</th>
      <th>Fecha</th>
      <th>Id Registro</th>
      <th>Antes</th>
      <th>Ahora</th>
      <th>Usuario</th>
    </tr>
  </thead>
  <tbody>
@foreach ($auditorias as $auditoria)  
  <tr>
    <td> {{ $auditoria->vc_tabla }}   </td>
    <td> {{ $auditoria->d_fecha }} </td>
    <td> {{ $auditoria->i_id_registro }} </td>
    <td> <div class="contenido-json" data-obj="{{ $auditoria->tx_campos_antes }}"></div></td>
    <td> <div class="contenido-json" data-obj="{{ $auditoria->tx_campos_ahora }}"></div></td>
    <td> @if(!is_null($auditoria->usuario)) {{ $auditoria->usuario->full_name }} @endif</td>  
  </tr>
@endforeach 
</tbody>
</table>