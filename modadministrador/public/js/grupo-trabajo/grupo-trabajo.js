var vURL = null;
jQuery(function($){
	vURL = $('#main').data('url');
	actualizarInputs();
	//$("#contenedorTablaUsuarios").hide();
	$("#unidades_gestion").change(function(){
		var id_unidades = $("#unidades_gestion").val();  
		var data = {
		    'id_unidades' : id_unidades,
		}
		$.post(
		    vURL+"/obtenerSubUnidadesGestion",
		    data,  
		    function(data)
		    {
	        //console.log(data.subUnidades); 
	        if(data.subUnidades.length==0){
	            swal({
	              title: 'Algo salió mal',
	              html: 'No se encontraron Sub Unidades asociadas',
	              type: 'error',
	              showConfirmButton: false,
	              timer: 3000                        

	            });
	        }else{            
	            $optionsSubUnidades = '';
		    	$.each(data.subUnidades,function(index,valor){
		    		$optionsSubUnidades+='<option value="'+index+'">'+valor+'</option>';
	            });
	            $("#sub_unidades_gestion").html($optionsSubUnidades);
	            $(".selectpicker").selectpicker('refresh');
	            actualizarInputs();                   
	          	} 
	        }
		);		
	});

	$("#sub_unidades_gestion").change(function(){
		var id_subunidad_gestion = $("#sub_unidades_gestion").val();  
		var data = {
		    'id_subunidad_gestion' : id_subunidad_gestion,
		}
		$.post(
		    vURL+"/obtenerGruposSubUnidades",
		    data,  
		    function(data)
		    {
	        console.log(data.grupos); 
	        if(data.grupos.length==0){
	            swal({
	              title: 'Algo salió mal',
	              html: 'No se encontraron Grupos asociadas',
	              type: 'error',
	              showConfirmButton: false,
	              timer: 3000                        

	            });
	        }else{            
	            $optionsGrupos = '';
		    	$.each(data.grupos,function(index,valor){
		    		$optionsGrupos+='<option value="'+index+'">'+valor+'</option>';
	            });
	            $("#grupos_trabajo").html($optionsGrupos);
	            $(".selectpicker").selectpicker('refresh');
	            actualizarInputs();                   
	          	} 
	        }
		);		
	});

	$("#grupos_trabajo").change(function(){
		var id_grupo_trabajo = [$("#grupos_trabajo").val()];  
		var data = {
		    'id_grupo_trabajo' : id_grupo_trabajo,
		}
		$.post(
		    vURL+"/obtenerMiembrosGrupo",
		    data,  
		    function(data)
		    {
	        	//console.log(data.grupos); 
	        	$('#tablaUsuarios').html(data.html);  //data.dependenciaPertenece               
	            $("#contenedorTablaUsuarios").show();                 
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

	            		title: 'Consulta Usuarios'
	            	}
	            	]		        
	            }).draw();
	    	}
	    );		
	});

	$("#agregar-usuario").click(function(){
		$("input[name='i_fk_id_grupo']").val($("#grupos_trabajo").val());
		$('.selectpicker').selectpicker('refresh');
	});

	/* Crear */
	$(".guardar_usuario").click(function(){
		var datos=$(this).closest("form").serialize();
		$.post(
            vURL+'/grupos-trabajo',
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
                $("#formulario-crear-usuario").modal("hide");
	            //$("#obtener-parametros").trigger("click");                                   
            }            
        );			
	});

	$("#tablaUsuarios").on('click','.modificar-usuario',function(e){   
		$.get( 
            vURL+'/grupos-trabajo/'+$(this).data('id')+'/edit',
            function(data)
            {
            	$('#contenedorFormModificarUsuario').html(data.html); 
            	$("#modal-modificar-usuario").modal("show");
            	actualizarInputs();
            }
        );	
    });

	/*$("#contenedorFormEditDetalle").on('click',' .guardar_usuario',function(e){ 

		var datos=$(this).closest("form").serialize();
		var id= $(this).closest("form").find("input[name='i_pk_id']").val();
		$.post(
            vURL+'/grupos-trabajo/'+id,
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
                $("#modal-modificar-usuario").modal("hide");
	            $("#obtener-parametros").trigger("click");                                   
            }            
        );			
    });*/	

	function actualizarInputs(){
		$(".btn-switch").bootstrapSwitch();		
		$(".selectpicker").selectpicker();
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			weekStart: 1,
			language: 'es',
			autoclose: true,
		});	
	}

});
