{!!Form::model($parametro,['route'=>['parametro.update',$parametro->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-parametro'])!!}         
    @include('material.sections.parametro.form.campos')
{{ Form::close() }}  

