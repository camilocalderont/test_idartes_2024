var vURL = null;
jQuery(function($){
	vURL = $('#main').data('url');
	$("#contenedorTablaParametros").hide();   
	actualizarInputs();

	$("#obtener-parametros").click(function(){
		console.log($("#i_fk_id_parametro").val());
		var request = $.get(
            vURL+'/detalle-parametro/'+$("#i_fk_id_parametro").val(),
            function(data)
            {
            	//console.log(data);
                $('#tablaParametros').html(data.html);                 
                $("#contenedorTablaParametros").show();                 
			    $("#table_parametros").DataTable({ 
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

						title: 'Consulta de Parametros'
					}
					]		        
			    }).draw();
				validarForm("#form-crear-parametro-detalle",[],[]);
            }
        );	
		
		return request;
	});

	$("#modificar-parametro").click(function(){
		if($("#i_fk_id_parametro").val()!=""){

			var request = $.get(
	            vURL+'/parametro/'+$("#i_fk_id_parametro").val()+'/edit',
	            function(data)
	            {
	            	console.log(data); 
	            	$('#contenedorFormEdit').html(data.html); 
	            	$("#modal-modificar-parametro").modal("show");
	            	actualizarInputs();
	            }
	        );

			return request; 
		}
	});

	$("#crear-parametro-detalle").click(function(){
		$("input[name='i_fk_id_parametro']").val($("#i_fk_id_parametro").val());
		$('.selectpicker').selectpicker('refresh');
	});


	/* Crear */
	$(".guardar-parametro-detalle").click(function(){
		var idForm = ($(this).closest('form').attr('id')!= undefined) ? $(this).closest('form').attr('id') : '';
		var datos=$(this).closest("form").serialize();
		if($('#'+idForm).valid()){
			$.post(
				vURL+'/detalle-parametro',
				datos,
				function(data)
				{ 
					swal({
						title: data.title,
						html: data.message,
						type: data.type,
					});
					$("#formulario-parametro-detalle").modal("hide");
					$("#obtener-parametros").trigger("click");                                   
				}            
			).fail(function(data) {
				if(data.status == 419){
					swal({
						title: `¡Algo salió Mal!`,
						html: `Ha caducado el tiempo de sesión, se recargará la página`,
						type: `error`,
						showConfirmButton: false,
						timer: 3000                         
					}).then(()=>{
						location.reload();
					}); 
		  
				}else if(data.status == 500){
					swal({
						title: `¡Algo salió Mal!`,
						html: `Ha ocurrido un error en el servidor, contacte al soporte de Pandora`,
						type: `error`,
						showConfirmButton: false,
						timer: 3000                         
					})                    
				}
			});
		}else{ 
			swal({
				  title: "¡Algo salió mal!",
				  text: "Por favor diligencia toda la información.",
				  type: "error"
				});
		}
	});

	$("#contenedorFormEditDetalle").on('click',' .guardar-parametro-detalle',function(e){ 
		var datos=$(this).closest("form").serialize();
		var id= $(this).closest("form").find("input[name='i_pk_id']").val();
		$.post(
            vURL+'/detalle-parametro/'+id,
            datos,
            function(data)
            { 
            	//console.log(data);
            	//alert(data.message);
                swal({
                    title: data.title,
                    html: data.message,
                    type: data.type,
                });
                $("#modal-modificar-detalle").modal("hide");
	            $("#obtener-parametros").trigger("click");                                   
            }            
        );			
    });	

    $("#tablaParametros").on('click',' .modificar-parametro-detalle',function(e){   
		$.get( 
			vURL+'/detalle-parametro/'+$(this).data('id')+'/edit',
			function(data)
			{
					
				$('#contenedorFormEditDetalle').html(data.html); 
				$("#modal-modificar-detalle").modal("show");
				$('.selectpicker').selectpicker('refresh');
				actualizarInputs();
			}
		);	
    });


	function actualizarInputs(){
		$(".btn-switch").bootstrapSwitch();	
		$('.selectpicker').selectpicker();	
	}

});

function validarForm(id,reglas,mensajes){
    /* JQUERY VALIDATE*/
    if(id==undefined || $(id).length == 0 ){
      return false;
    }else{  
        reglas = (reglas == undefined) ? [] : reglas;
        mensajes = (mensajes == undefined) ? [] : mensajes; 
        $(id).validate().destroy();	
        $.validator.addClassRules("obligatorio", {
            required: true
        }); 	 
        $(id).validate({  
        //ignore: [],     		
        rules: reglas,
        messages: mensajes,
        errorPlacement : function(error, element) {
            $(element).closest('.form-group').find('.help-block').html(error.html());

            $(element).closest('tr').find('.error-subtotal .help-block').html(error.html());
            id_tab=$(element).closest('.tab-pane').attr('id'); 
            $(`#contenedor-wizard-actividades .nav-pills a[href="#${id_tab}"]`).tab('show');		
        },
        highlight : function(element) {
            $(element).closest('.form-group').removeClass('has-info').addClass('has-error');

            $(element).closest('tr').find('.error-subtotal .form-group').removeClass('has-info').addClass('has-error');
        }, 
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-info');
            $(element).closest('.form-group').find('.help-block').html('');

            $(element).closest('tr').find('.error-subtotal .form-group').removeClass('has-error').addClass('has-info');
            $(element).closest('tr').find('.error-subtotal .help-block').html('');
        }        
        });
    }
}