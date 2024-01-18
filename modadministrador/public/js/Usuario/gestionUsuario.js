var vURL = null;
jQuery(function(){
	vURL = $('#main').data('url');
	
    $("#contenedorTabla").hide(); 
	$("#enlaceEdicionUsuario").hide(); 
	actualizarInputs();  
    validarForm("#form-crear-usuario");
    validarForm("#form-editar-usuario");

    $(document).on('keyup','.mayuscula',function(){ 
        $(this).val($(this).val().toUpperCase());
    });

    $('#consultar-usuarios-area').click(function (e, callback) {
        
    	var datos ={ 
    		'i_fk_id_area': $("#i_fk_id_area").val()
    	}; 

        var post = $.post(
            vURL+'/consultar-usuarios-area',
            datos, 
            function(data)
            {
            	//console.log(data);
                $('#tablaUsuariosArea').html(data.html); 
                $("#contenedorTabla").show(); 
			    $("#table_usuarios").DataTable({
			        responsive: true, 
			        "pageLength": 10,
			        "language": {
			            "lengthMenu": "Ver _MENU_ registros por pagina",
			            "zeroRecords": "No hay información, lo sentimos.",
			            "info": "Mostrando pagina _PAGE_ de _PAGES_",
			            "infoEmpty": "No hay registros disponibles",
			            "infoFiltered": "(filtered from _MAX_ total records)",
			            "search": "Filtrar"
			        },
					dom: 'Bfrtip',
					buttons: [
					{
						extend: 'excel',

						title: 'Consulta de Usuarios'
					}
					]		        
			    }).draw();    
            }
        );
        
        return post;
    }); 

 
    $("#tablaUsuariosArea").on('click',' .reset-password',function(e){   
    	var id= $(this).data('id');        
        swal({
            title: "Mensaje de confirmación",
            html: "¿Desea Resetear la contraseña del usuario?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            showCancelButton: true,
            cancelButtonText: 'No',              
        }).then((result) => {

            if (result.dismiss!="cancel") {                

                var datos ={ 
                    'id': id
                }; 
                $.post(
                    vURL+'/reset-password',
                    datos, 
                    function(data)
                    { 
                        swal({
                            title: data.title,
                            html: data.message,
                            type: data.type,
                        });                                   
                    }
                );                
            }else{
                //console.log("No se actualizará");
            }          
        }).catch(swal.noop);         
 	
    });

    $("#tablaUsuariosArea").on('click',' .desactivar-usuario',function(e){   
    	var id= $(this).data('id');        
        swal({
            title: "¿Desea desactivar el usuario seleccionado?",
            html: "Los permisos que se le hayan sido asignados serán removidos.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            showCancelButton: true,
            cancelButtonText: 'No',              
        }).then((result) => {
            if (result.dismiss!="cancel") {                
                var datos ={ 
                    'id': id
                }; 
                $.post(
                    vURL+'/removerRolesUsuario',
                    datos, 
                    function(data)
                    { 
                        swal({
                            title: data.title,
                            text: data.message,
                            type: data.type,
                            confirmButtonText: "OK"
                          }).then((result) => {
                                if (result.value == true) {
                                    $('#consultar-usuarios-area').trigger('click');
                                }
                            }).catch(swal.noop);
                    }
                );                
            }else{
                //console.log("No se actualizará");
            }          
        }).catch(swal.noop);         
 	
    });

    function actualizarInputs(){
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			weekStart: 1,
	    	language: 'es',
	    	autoclose: true,
	    });

	    $(".selectpicker").selectpicker('refresh');

		$(".btn-switch").bootstrapSwitch({
            onInit: function() {
                var valor = $(this).is(":checked") ? 1 : 0;
                $(this).val(valor);                
            },
            onSwitchChange: function(){
                var valor = $(this).is(":checked") ? 1 : 0;
                $(this).val(valor);
            }
        });   
    } 

    function validarForm(id){
        /* JQUERY VALIDATE*/

        // name validation
        var nombresregex = /^[a-zA-Z ]+$/;

        $.validator.addMethod("validname", function( value, element ) {
        return this.optional( element ) || nombresregex.test( value );
        }); 

        // valid email pattern
        var eregex = /^([a-zA-Z0-9_\\.\\-\\+])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        
        $.validator.addMethod("validemail", function( value, element ) {
            return this.optional( element ) || eregex.test( value );
        });

        var numeroidentifiacionregex = /^(?=.*[0-9])([a-zA-Z0-9]+)$/;
        $.validator.addMethod("validIdentification", function( value, element ) {
            return this.optional( element ) || numeroidentifiacionregex.test( value );
        });

        var numeroregex = /^([0-9]+)$/;
        $.validator.addMethod("validNumber", function( value, element ) {
            return this.optional( element ) || numeroregex.test( value );
        });

        var requerido = {
            required: true
        } 
        var mrequerido = {
            required: 'Por favor diligencie este campo'
        }     
        var ruleSet1 = {
            required: true,
            validname: true,
            minlength: 3,
            maxlength: 50
        }

        var mruleSet1= {
            required: "Por favor diligencie este campo",
            validname: "El campo solo debe contener letras y/o espacios",
            minlength: "El campo es muy corto",
            maxlength: "Por favor no ingrese más de 50 caracteres"
        }   
        var ruleSet2 = {
            required: false,
            validname: true,
            minlength: 3,
            maxlength: 50
        };   

        var mruleSet2= {
            validname: "El campo solo debe contener letras y/o espacios",
            minlength: "El campo es muy corto",
            maxlength: "Por favor no ingrese más de 50 caracteres"
        }       

        $(id).validate({    
            rules:{
                i_cedula:{
                    required: true,
                    validIdentification: true,
                    maxlength: 20
                },
                i_fk_tipo_documento: requerido,
                name: ruleSet1,
                vc_segundo_nombre: ruleSet2,
                vc_primer_apellido: ruleSet1,
                vc_segundo_apellido: ruleSet2,
                email:{
                    validemail: true,
                    maxlength: 100
                },
                i_fk_ciudad: requerido,
                i_fk_genero: requerido,
                i_fk_eps: requerido,
                i_fk_area: requerido,
            },
            messages:{
                i_cedula: {
                    required: "Por favor ingrese un número de identificación",
                    validIdentification: "El número de identificación solo debe contener números y/o letras",
                    maxlength: "Por favor no ingrese más de 20 dígitos"
                },
                i_fk_tipo_documento: mrequerido,
                name: mruleSet1,
                vc_segundo_nombre: mruleSet2,
                vc_primer_apellido: mruleSet1,
                vc_segundo_apellido: mruleSet2,
                email: {
                    validemail: "Ingrese un Email válido",
                    maxlength: "Por favor no ingrese más de 100 caracteres" 
                },
                i_fk_ciudad: mrequerido,
                i_fk_genero: mrequerido, 
                i_fk_eps: mrequerido,  
                i_fk_area: mrequerido,      
            },
            errorPlacement : function(error, element) {
                $(element).closest('.form-group').find('.help-block').html(error.html());
            },
            highlight : function(element) {
                $(element).closest('.form-group').removeClass('has-info').addClass('has-error');
            }, 
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-info');
                $(element).closest('.form-group').find('.help-block').html('');
            }        
        });
        
    }      	
});
