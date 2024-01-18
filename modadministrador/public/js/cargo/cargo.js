var vURL = null;
jQuery(function($){
	vURL = $('#main').data('url');

	$.post(
            vURL+'/consulta-cargos',
            function(data)
            {
            	console.log(data);
                $('#tablaCargos').html(data.html);                 
                $("#contenedorCargos").show();                 
			    $("#table_cargos").DataTable({ 
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

						title: 'Cargos'
					}
					]		        
			    }).draw();
            }
        );
});