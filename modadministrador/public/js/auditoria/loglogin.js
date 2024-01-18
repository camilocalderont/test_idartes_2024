var vURL = null;
jQuery(function(){
	vURL = $('#main').data('url');
	$(".ingreso-modulo").click(function(){
    	var datos ={ 
    		'i_fk_id_usuario': $(this).closest('form').find("input[name='id']").val(), 
    		'i_fk_id_modulo': $(this).closest('form').find("input[name='id_modulo']").val(),
    		'vc_url': $(this).closest('form').attr('action'),
    	}; 
        $.post(
            vURL+'/log-login',
            datos, 
            function(data)
            {
            	//console.log(data);                
            }
        );
        $(this).closest('form').submit();
	}); 
});  	