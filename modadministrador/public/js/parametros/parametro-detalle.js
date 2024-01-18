var vURL = null;
jQuery(function($){
	vURL = $('#main').data('url');
	$("#contenedorTablaParametros").hide();   
	actualizarInputs();
	$("#obtener-parametros").click(function(){
		console.log($("#i_fk_id_parametro").val());
		$.get(
            vURL+'/detalle-parametro/'+$("#i_fk_id_parametro").val(),
            function(data)
            {
            	console.log(data);
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
            }
        );		
	});

	$("#modificar-parametro").click(function(){
		if($("#i_fk_id_parametro").val()!=""){

			$.get(
	            vURL+'/detalle-parametro/'+$("#i_fk_id_parametro").val()+'/edit',
	            function(data)
	            {
	            	console.log(data); 
	            	$('#contenedorFormEdit').html(data.html); 
	            	$("#modal-modificar-parametro").modal("show");
	            	actualizarInputs();
	            }
	        );
		}
			
	});

	function actualizarInputs(){
		$(".btn-switch").bootstrapSwitch();		
	}
});
