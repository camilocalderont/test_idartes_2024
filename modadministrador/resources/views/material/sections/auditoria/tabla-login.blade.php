<div class="card">
  
</div>
<table class='table table-hover' id='table_login' style='width: 100%'> 
  <thead>
    <tr>
      <th>Fecha Ingreso</th>
      <th>IP</th>
      <th>Dispositivo</th>
      <th>MAC</th>
      <th>Modulo</th>

    </tr>
  </thead>
  <tbody>
@foreach ($logins as $login)  
  <tr>
    <td> {{ $login->d_fecha_ingreso }}   </td>
    <td> {{ $login->vc_ip }} </td>
    <td> {{ $login->vc_dispositivo }} </td>
    <td> {{ $login->vc_mac }}</td>
    <td> {{ $login->modulo->vc_modulo }}</td>
 
  </tr>
@endforeach 
</tbody>
</table>