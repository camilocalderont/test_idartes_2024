{!!Form::model($parametroDetalle,['route'=>['detalle-parametro.update',$parametroDetalle->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-detalle'])!!}    
     {!! Form::hidden('i_pk_id')!!}
    @include('material.sections.parametro.form.campos-detalle')
{{ Form::close() }}