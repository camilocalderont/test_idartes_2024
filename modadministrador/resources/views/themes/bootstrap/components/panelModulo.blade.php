<div class="portlet light {{$class}}">
  <div class="portlet-title"><span class="caption-subject bold"> {{$title}}</span> </div>
  <div class="portlet-body" style="height: 100px;">
      <div class="row">
        <div class="col-xs-5 contenedor-icono">
          <i class="{{ $imagen }} fa-7x font-green-meadow" aria-hidden="true"></i>
        </div>
        <div class="col-xs-6 descripcion-modulo">
            <div class="row texto-descripcion-modulo">
              <div class="col-xs-12">                
                {{$contenido}}
              </div>
            </div>                        
            <div class="row"> 
              <form name="registro" action="{{strstr(URL::to('/'),'/mod',true).$ruta}}" target="_blank" method="POST" > 
                <input type="hidden"  id="id" name="id" value="{{$id}}">
                <input type="hidden"  id="actividades" name="actividades" value="{{$actividades}}">
                <input type="hidden"  id="id_modulo" name="id_modulo" value="{{$id_modulo}}">
                <input type="button" value="Ingresar" class="btn-block btn btn-circle green-meadow ingreso-modulo" name="Btn_Ir" {{ $disabled }}>
                {{ csrf_field() }}
              </form>                
            </div>  
        </div>    
      </div>             
  </div>
</div> 