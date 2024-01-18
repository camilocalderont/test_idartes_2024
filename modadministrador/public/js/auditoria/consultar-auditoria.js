var vURL = null;
jQuery(function(){
	vURL = $('#main').data('url');
	
    $("#contenedorTablaLogin").hide(); 
    $("#contenedorTabla").hide(); 
	$("#enlaceEdicionUsuario").hide(); 
	
	$(".datepicker").datepicker({
		format: 'yyyy-mm-dd',
		weekStart: 1,
    	language: 'es',
    	autoclose: true,
    });
    $('#consultar-auditoria').click(function (e) { 
    	var datos ={ 
    		'vc_tabla': $("#vc_tabla").val()
    	}; 
        $.post(
            vURL+'/consultar-auditoria',
            datos, 
            function(data)
            {
            	//console.log(data);
                $('#tablaAuditoria').html(data.html);                 
                $("#contenedorTabla").show(); 
			    $(".contenido-json").each(function(e){   
			    	var obj= $(this).data('obj');
			    	delete obj[""];
			    	$(this).jsonViewer(obj);   	
			    });                  
			    $("#table_auditoria").DataTable({
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

    }); 

 $('#consultar-login').click(function (e) { 
    	var datos ={ 
    		'i_fk_id_usuario': $("#i_fk_id_usuario").val(),
    		'd_fecha_inicial': $("#d_fecha_inicial").val(),
    		'd_fecha_final': $("#d_fecha_final").val(),
    		
    	}; 
        $.post(
            vURL+'/consultar-login',
            datos, 
            function(data)
            {
            	//console.log(data);
                $('#tablaLogin').html(data.html);                 
                $("#contenedorTablaLogin").show();                 
			    $("#table_login").DataTable({ 
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

						title: 'Consulta de Login de usuarios'
					}
					]		        
			    }).draw();  

            }
        );

    }); 

});  