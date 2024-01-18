var vURL = null;
jQuery(function(){
	vURL = $('#main').data('url');
    $("#modal_infografia").hide();
    $(document).on("click","#logo-inicio",()=>{
        $("#modal_infografia").modal("show");
    });

});