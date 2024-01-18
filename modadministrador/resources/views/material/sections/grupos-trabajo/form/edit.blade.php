{!!Form::model($usuario,['route'=>['grupos-trabajo.update',$usuario->i_pk_id],'method'=>'PUT','role'=>'form','id'=>'form-editar-usuario'])!!}         
    @include('material.sections.grupos-trabajo.form.campos')
{{ Form::close() }}  