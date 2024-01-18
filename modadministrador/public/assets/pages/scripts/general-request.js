var ajaxRequest = function () {
    var handleRequest = function (route, type, data, modal, form, table, tableRoute, async) {
        async = async || false;
        $.ajax({
            url: route,
            cache: false,
            type: type,
            contentType: false,
            data: data,
            processData: false,
            async: async,
            beforeSend: function () {
                $("input[type='submit']").attr('disabled','disabled');
                $("input[type='button']").attr('disabled','disabled');
            },
            success: function (response, xhr, request) {
                $('input[type="submit"]').removeAttr('disabled');
                $('input[type="button"]').removeAttr('disabled');
                if (request.status === 200 && xhr === 'success') {
                    if (form) {
                        form[0].reset();
                        $(".pmd-select2").select2({
                            width: null,
                            placeholder: "Selecccionar",
                        });
                    }
                    if (modal) {
                        $('#'+modal).modal('hide');
                    }
                    swal({
                        title: response.title,
                        text: response.message,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success",
                        type: xhr,
                    }, function () {
                        if (table && tableRoute) {
                            var newTbl = table.DataTable();
                            ajax: tableRoute;
                            newTbl.ajax.reload();
                            return request;
                        }
                    });
                }
            },
            error: function (response, xhr, request) {
                $('input[type="submit"]').removeAttr('disabled');
                $('input[type="button"]').removeAttr('disabled');
                if (response.status == 422){
                    $.each(response.responseJSON, function(index, value) {
                        $('#field_'+index).closest('.form-group').removeClass('has-success').addClass('has-error');
                        $('#field_'+index+'-error').text(''+value[0]);
                    });
                    if (response.title && response.message) {
                        swal({
                            title: response.title,
                            text: response.message,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-success",
                            type: 'error',
                        }, function () {
                            return response;
                        });
                    }
                } else {
                    swal({
                        title: '¡Algo sucedió!',
                        text: 'No pudimos procesar tu solicitud. '+response.responseText,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-danger",
                        type: 'error',
                    }, function () {
                        return response;
                    });
                }
            }
        });
    };
    var handleButtons = function () {
        $("input[type=\"submit\"]").attr('disabled','disabled');
        $("input[type=\"button\"]").attr('disabled','disabled');
    }
    return {
      init: function (route, type, data, modal, form, table, tableRoute, async) {
          handleRequest(route, type, data, modal, form, table, tableRoute, async);
          handleButtons();
      }
    };
}();