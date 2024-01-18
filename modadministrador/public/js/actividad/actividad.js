var vURL = null;
jQuery(function(){
	vURL = $('#main').data('url');


    $("#i_fk_id_modulo").change(function(e){
        var datos = {
          'i_fk_id_modulo' : $(this).val()
        };
        $.post(
            vURL+'/obtener-actividades-modulo',
            datos,
            function(data)
            {  
              console.log(data);
              $optionsActividades='';
              $.each(data.actividades,function(index,actividad){
                $optionsActividades+='<option value="'+actividad.i_pk_id+'">'+actividad.vc_actividad+'</option>';
              });
              $("#i_fk_id_padre").html($optionsActividades);
              //
              $(".selectpicker").selectpicker('refresh');
              $('#i_fk_id_padre').val($('#i_fk_id_padre_').val()); 
              $(".selectpicker").selectpicker('refresh');
              

            }            
        );         
    });
    $("#i_fk_id_modulo").trigger('change');
});