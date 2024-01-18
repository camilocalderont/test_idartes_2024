 jQuery(document).ready(function () {
        var vURL = $('#main').data('url');

        var validateForm = $('#tipo_actividad');
        var validateRules = {
            'tipoPersona':    { required: true },
            'modulo':    { required: true },
        };

        var validateMessages = {};
        FormValidationMd.init(validateForm, validateRules, validateMessages, false);
     
        $('#tipoPersona').select2({ 
            placeholder: "Seleccionar",
            allowClear: true,
            selectOnClose: true,
         });

        $('#modulo').select2({ 
            placeholder: "Seleccionar",
            allowClear: true,
         });

        $('#tipoPersona').val('0').trigger('change');
        $('#modulo').val('0').trigger('change');

        $('#TablaTipoActividad').delegate('input[data-target="#check"]','click',function (e) {  
                var id_act = $(this).data('rel'); 
                var id_tipo = $('#id_tipo_hiden').val();
               
                if (this.checked == true){
                        $.get(
                            vURL+'/tipo-actividad/add/'+id_act+'/'+id_tipo,
                            function(data)
                            {
                                $('#'+id_act+'_id_label_ok').text(data);
                                setTimeout(function(){ 
                                    $('#'+id_act+'_id_label_ok').text('');
                                }, 3000);
                            }
                        );
                  } else {
                        $.get(
                            vURL+'/tipo-actividad/remove/'+id_act+'/'+id_tipo,
                            function(data)
                            {
                               $('#'+id_act+'_id_label_dele').text(data);
                                setTimeout(function(){
                                    $('#'+id_act+'_id_label_dele').text('');
                                }, 3000);
                            }
                        );
                  }

        });

        
    });