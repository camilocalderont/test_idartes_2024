var AppInbox = function () {

    var content = $('.inbox-content');
    var listListing = '';

    var loadInbox = function (el, name) {
        $('.inbox-content').loading();
        var url = el.attr('data-url');
        var title = el.attr('data-title');

        listListing = name;

        toggleButton(el);

        $.ajax({
            type: "GET",
            cache: false,
            url: url,
            dataType: "html",
            success: function(res) {

                history.pushState({}, "", url);

                toggleButton(el);

                $('.inbox-content').loading('stop');

                $('.inbox-nav > li.active').removeClass('active');
                el.closest('li').addClass('active');
                $('.inbox-header > h1').text(title);

                content.html(res);

                if (Layout.fixContentHeight) {
                    Layout.fixContentHeight();
                }
            },
            error: function(xhr, ajaxOptions, thrownError)
            {
                swal(
                    '¡Error!',
                    xhr.responseJSON.message,
                    'error'
                );
                $('.inbox-content').loading('stop');
                toggleButton(el);
            },
            async: false
        });

        // handle group checkbox:
        jQuery('body').on('change', '.mail-group-checkbox', function () {
            var set = jQuery('.mail-checkbox');
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                $(this).prop('checked', checked);
            });
        });
    };

    var loadSearch = function (el, name) {
        $('.inbox-content').loading();
        var url = el.attr('data-url');
        var title = el.attr('data-title');
        var value = $('#buscar-radicados').val();

        if (!value) {
            $('.inbox-content').loading('stop');
            return swal(
                '¡Error!',
                'Digita algo para buscar.',
                'error'
            );
        }

        listListing = name;

        toggleButton(el);

        $.ajax({
            type: "POST",
            data: { value: value },
            cache: false,
            url: url,
            dataType: "html",
            success: function(res) {

                toggleButton(el);

                $('.inbox-content').loading('stop');

                $('.inbox-nav > li.active').removeClass('active');
                el.closest('li').addClass('active');
                $('.inbox-header > h1').text(title);

                content.html(res);

                if (Layout.fixContentHeight) {
                    Layout.fixContentHeight();
                }
            },
            error: function(xhr, ajaxOptions, thrownError)
            {
                swal(
                    '¡Error!',
                    xhr.responseJSON.message,
                    'error'
                );
                $('.inbox-content').loading('stop');
                toggleButton(el);
            },
            async: false
        });
    };

    var sweetAlertCreate = function (el, options) {
        swal({
            title: options.title,
            showCancelButton: true,
            confirmButtonText: options.confirmButtonText,
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            input: 'text',
            inputPlaceholder: options.placeholder,
            inputValidator: (value) => {
                return !value && 'No se permiten campos vacíos.'
            },
            preConfirm: (text) => {
                return new Promise((resolve, reject) => {
                    f = {
                        [el.attr('data-type')]: text,
                    };
                    $.ajax({
                        url: options.url,
                        method: options.method,
                        data: f,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).done(function () {
                        $('.inbox-nav > li.active > a').click();
                        $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                        resolve();
                    }).fail(function(data) {
                        if ( typeof data.responseJSON.message !== 'undefined') {
                            swal(
                                '¡Error!',
                                data.responseJSON.message,
                                'error'
                            );
                        } else {
                            swal(
                                '¡Error!',
                                'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                'error'
                            );
                        }
                    });
                })
            },
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                swal({
                    type: 'success',
                    title: options.title + ' creado satisfactoriamente',
                    html: options.title +': ' + result.value
                })
            }
        }).catch(swal.noop);
    };

    var sweetAlertEdit = function (el, options) {
        swal({
            title: options.title,
            showCancelButton: true,
            confirmButtonText: options.confirmButtonText,
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            input: 'text',
            inputPlaceholder: options.placeholder,
            inputValue: el.attr('data-text'),
            inputValidator: (value) => {
                return !value && 'No se permiten campos vacíos.'
            },
            preConfirm: (text) => {
                return new Promise((resolve, reject) => {
                    f = {
                        [el.attr('data-type')]: text,
                        _method: 'PUT',
                    };
                    $.ajax({
                        url: options.url,
                        method: options.method,
                        data: f,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).done(function () {
                        $('.inbox-nav > li.active > a').click();
                        resolve();
                    }).fail(function(data) {
                        if ( typeof data.responseJSON.message !== 'undefined') {
                            swal(
                                '¡Error!',
                                data.responseJSON.message,
                                'error'
                            );
                        } else {
                            swal(
                                '¡Error!',
                                'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                'error'
                            );
                        }
                    });
                })
            },
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                swal({
                    type: 'success',
                    title: options.title + ' modificado satisfactoriamente',
                    html: options.title +': ' + result.value
                })
            }
        }).catch(swal.noop);
    };

    var sweetAlertDelete = function (options) {
        swal({
            title: options.title,
            text: options.text,
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: options.confirmButtonText,
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            preConfirm: (text) => {
                return new Promise((resolve, reject) => {
                    f = {
                        _method:  (typeof options.aditional_method !== 'undefined') ? options.aditional_method : 'DELETE',
                        ids:   options.data,
                    };
                    $.ajax({
                        url: options.url,
                        method: options.method,
                        data: f,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).done(function () {
                        $('.inbox-nav > li.active > a').click();
                        $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                        resolve();
                    }).fail(function(data) {
                        if ( typeof data.responseJSON.message !== 'undefined') {
                            $('.inbox-nav > li.active > a').click();
                            $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                            swal(
                                '¡Error!',
                                data.responseJSON.message,
                                'error'
                            );
                        } else {
                            $('.inbox-nav > li.active > a').click();
                            $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                            swal(
                                '¡Error!',
                                'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                'error'
                            );
                        }
                    });
                })
            },
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                swal({
                    type: 'success',
                    title: 'Datos procesados satisfactoriamente',
                })
            }
        }).catch(swal.noop);
    };


    var createTipoRemitente = function (el) {
        var options = {
          title: "Entidad",
          placeholder: "Entidad",
          confirmButtonText: 'Crear entidad',
          url: el.attr('data-url'),
          method: 'POST',
        };
        sweetAlertCreate(el, options);
    };

    var deleteTipoRemitente = function (el) {
        var options = {
            title: "Entidad",
            text: "¿Está seguro de eliminar esta entidad?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar entidad',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var editTipoRemitente = function (el) {

        var options = {
            title: "Entidad",
            placeholder: "Entidad",
            confirmButtonText: 'Guardar cambios',
            url: el.attr('data-edit-url'),
            method: 'POST',
        };

        sweetAlertEdit(el, options);
    };


    var createMedio = function (el) {
        var options = {
          title: "Medio de envío",
          placeholder: "Medio de envío",
          confirmButtonText: 'Crear Medio de envío',
          url: el.attr('data-url'),
          method: 'POST',
        };
        sweetAlertCreate(el, options);
    };

    var deleteMedio = function (el) {
        var options = {
            title: "Medio de envío",
            text: "¿Está seguro de eliminar este medio de envío?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar medio de envío',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var editMedio = function (el) {

        var options = {
            title: "Medio de envío",
            placeholder: "Medio de envío",
            confirmButtonText: 'Guardar cambios',
            url: el.attr('data-edit-url'),
            method: 'POST',
        };

        sweetAlertEdit(el, options);
    };


    var createEstado = function (el) {
        var options = {
          title: "Estado",
          placeholder: "Estado",
          confirmButtonText: 'Crear Estado',
          url: el.attr('data-url'),
          method: 'POST',
        };
        sweetAlertCreate(el, options);
    };

    var deleteEstado = function (el) {
        var options = {
            title: "Estado",
            text: "¿Está seguro de eliminar este estado?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar Estado',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var editEstado = function (el) {

        var options = {
            title: "Estado",
            placeholder: "Estado",
            confirmButtonText: 'Guardar cambios',
            url: el.attr('data-edit-url'),
            method: 'POST',
        };

        sweetAlertEdit(el, options);
    };


    var createRemitente = function (el) {
        swal({
            title: 'Remitente',
            text: 'Crear nuevo remitente',
            showCancelButton: true,
            confirmButtonText: 'Crear',
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    var tipo = $('#tipo_remitente').val();
                    var remitente = $('#remitente').val();

                    if ( !tipo || !remitente ) {
                        return swal(
                            '¡Error!',
                            'No se permten campos vacíos.',
                            'error'
                        );
                    }

                    f = {
                        remitente: remitente,
                        tipo_remitente: tipo,
                    };
                    $.ajax({
                        url: $('#form-remitente').attr('action'),
                        method: 'POST',
                        data: f,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).done(function () {
                        $('.inbox-nav > li.active > a').click();
                        $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                        resolve();
                    }).fail(function(data) {
                        if ( typeof data.responseJSON.message !== 'undefined') {
                            swal(
                                '¡Error!',
                                data.responseJSON.message,
                                'error'
                            );
                        } else {
                            swal(
                                '¡Error!',
                                'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                'error'
                            );
                        }
                    });
                })
            },
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                swal({
                    type: 'success',
                    title: 'Remitente creado satisfactoriamente',
                })
            } else {
                swal({
                    type: 'error',
                    title: 'Verifica que no hayan campos vacíos',
                })
            }
        }).catch(swal.noop);
    };

    var deleteRemitente = function (el) {
        var options = {
            title: "Remitente",
            text: "¿Está seguro de eliminar este remitente?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar remitente',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var editRemitente = function (el) {

        swal({
            title: '¿Desea editar el remitente?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Editar',
            cancelButtonText: 'No, cancelar',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                var tipo = $('#tipo_remitente').val( el.attr('data-tipo-remitente') );
                var remitente = $('#remitente').val( el.attr('data-text') );
                $('.create-remitente').hide();
                $('.btn-editar-remitente').show();
                $('.btn-cancelar-remitente').show();
            }
        });

        $(document).on('click', '.btn-editar-remitente', function () {
            swal({
                title: 'Remitente',
                text: 'Editar Remitente',
                showCancelButton: true,
                confirmButtonText: 'Editar',
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        var tipo = $('#tipo_remitente').val();
                        var remitente = $('#remitente').val();
                        var url = el.attr('data-edit-url');

                        if ( !tipo || !remitente ) {
                            return swal(
                                '¡Error!',
                                'No se permten campos vacíos.',
                                'error'
                            );
                        }

                        f = {
                            remitente: remitente,
                            tipo_remitente: tipo,
                            _method: 'PUT'
                        };
                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: f,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }).done(function () {
                            $('.create-remitente').show();
                            $('.btn-editar-remitente').hide();
                            $('.btn-cancelar-remitente').hide();
                            $('#form-remitente')[0].reset();
                            $('.inbox-nav > li.active > a').click();
                            $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                            resolve();
                        }).fail(function(data) {
                            if ( typeof data.responseJSON.message !== 'undefined') {
                                swal(
                                    '¡Error!',
                                    data.responseJSON.message,
                                    'error'
                                );
                            } else {
                                swal(
                                    '¡Error!',
                                    'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                    'error'
                                );
                            }
                        });
                    })
                },
                allowOutsideClick: false
            }).then((result) => {
                if (result.value) {
                    swal({
                        type: 'success',
                        title: 'Remitente modificado satisfactoriamente',
                    })
                } else {
                    swal({
                        type: 'error',
                        title: 'Verifica que no hayan campos vacíos',
                    })
                }
            }).catch(swal.noop);
        });

        $(document).on('click', '.btn-cancelar-remitente', function () {
            $('#form-remitente')[0].reset();
            $('.create-remitente').show();
            $('.btn-editar-remitente').hide();
            $('.btn-cancelar-remitente').hide();
        });
    };


    var createProyecto = function (el) {
        var options = {
            title: "Proyecto",
            placeholder: "Proyecto",
            confirmButtonText: 'Crear Proyecto',
            url: el.attr('data-url'),
            method: 'POST',
        };
        sweetAlertCreate(el, options);
    };

    var deleteProyecto = function (el) {
        var options = {
            title: "Proyecto",
            text: "¿Está seguro de eliminar este proyecto?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar proyecto',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var editProyecto= function (el) {

        var options = {
            title: "Tipo de remitente",
            placeholder: "Tipo de remitente",
            confirmButtonText: 'Guardar cambios',
            url: el.attr('data-edit-url'),
            method: 'POST',
        };

        sweetAlertEdit(el, options);
    };


    var createConsecutivo = function (el) {
        swal({
            title: 'Consecutivo',
            text: 'Crear Nuevo Consecutivo',
            showCancelButton: true,
            confirmButtonText: 'Crear',
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {

                    var mask_env = $('#mask_env').val();
                    var mask_rad = $('#mask_rad').val();
                    var num_env =  $('#num_env').val();
                    var num_rad =  $('#num_rad').val();
                    var proyecto = $('#proyecto').val();

                    if ( !mask_env || !mask_rad || !num_env || !num_rad || !proyecto ) {
                        return swal(
                            '¡Error!',
                            'No se permten campos vacíos.',
                            'error'
                        );
                    }

                    f = {
                        proyecto: proyecto,
                        mascara_consecutivo_enviado: mask_env,
                        mascara_consecutivo_radicado: mask_rad,
                        numero_enviado: num_env,
                        numero_radicado: num_rad,
                    };
                    $.ajax({
                        url: $('#form-consecutivo').attr('action'),
                        method: 'POST',
                        data: f,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).done(function () {
                        $('.inbox-nav > li.active > a').click();
                        $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                        resolve();
                    }).fail(function(data) {
                        if ( typeof data.responseJSON.message !== 'undefined') {
                            swal(
                                '¡Error!',
                                data.responseJSON.message,
                                'error'
                            );
                        } else {
                            swal(
                                '¡Error!',
                                'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                'error'
                            );
                        }
                    });
                });
            },
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                swal({
                    type: 'success',
                    title: 'Consecutivo creado satisfactoriamente',
                });
            } else {
                swal({
                    type: 'error',
                    title: 'Verifica que no hayan campos vacíos',
                });
            }
        }).catch(swal.noop);
    };

    var editConsecutivo = function (el) {

        swal({
            title: '¿Desea editar el consecutivo?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Editar',
            cancelButtonText: 'No, cancelar',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $(".panel-collapse").collapse("show");
                $('#proyecto').val( el.attr('data-proyecto') );
                $('#mask_rad').val( el.attr('data-mask-rad') );
                $('#mask_env').val( el.attr('data-mask-env') );
                $('#num_rad').val( el.attr('data-num-rad') );
                $('#num_env').val( el.attr('data-num-env') );
                $('.create-consecutivo').hide();
                $('.btn-editar-consecutivo').show();
                $('.btn-cancelar-consecutivo').show();
            }
        });

        $(document).on('click', '.btn-editar-consecutivo', function () {
            swal({
                title: 'Consecutivo',
                text: 'Editar Consecutivo',
                showCancelButton: true,
                confirmButtonText: 'Editar',
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        var url = el.attr('data-edit-url');
                        var mask_env = $('#mask_env').val();
                        var mask_rad = $('#mask_rad').val();
                        var num_env =  $('#num_env').val();
                        var num_rad =  $('#num_rad').val();
                        var proyecto = $('#proyecto').val();

                        if ( !mask_env || !mask_rad || !num_env || !num_rad || !proyecto ) {
                            return swal(
                                '¡Error!',
                                'No se permten campos vacíos.',
                                'error'
                            );
                        }

                        f = {
                            proyecto: proyecto,
                            mascara_consecutivo_enviado: mask_env,
                            mascara_consecutivo_radicado: mask_rad,
                            numero_enviado: num_env,
                            numero_radicado: num_rad,
                            _method: 'PUT',
                        };

                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: f,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }).done(function () {
                            $('.create-consecutivo').show();
                            $('.btn-editar-consecutivo').hide();
                            $('.btn-cancelar-consecutivo').hide();
                            $('#form-consecutivo')[0].reset();
                            $('.inbox-nav > li.active > a').click();
                            $('.inbox-nav > li.active > a > .badge').text( $('#total-datos-pagination').text() );
                            resolve();
                        }).fail(function(data) {
                            if ( typeof data.responseJSON.message !== 'undefined') {
                                $('.create-consecutivo').show();
                                $('.btn-editar-consecutivo').hide();
                                $('.btn-cancelar-consecutivo').hide();
                                $('#form-consecutivo')[0].reset();
                                swal(
                                    '¡Error!',
                                    data.responseJSON.message,
                                    'error'
                                );
                            } else {
                                $('.create-consecutivo').show();
                                $('.btn-editar-consecutivo').hide();
                                $('.btn-cancelar-consecutivo').hide();
                                $('#form-consecutivo')[0].reset();
                                swal(
                                    '¡Error!',
                                    'Lo sentimos, no se pudieron procesar los datos, intenta de nuevo.',
                                    'error'
                                );
                            }
                        });
                    })
                },
                allowOutsideClick: false
            }).then((result) => {
                if (result.value) {
                    swal({
                        type: 'success',
                        title: 'Consecutivo modificado satisfactoriamente',
                    })
                } else {
                    swal({
                        type: 'error',
                        title: 'Verifica que no hayan campos vacíos',
                    })
                }
            }).catch(swal.noop);
        });

        $(document).on('click', '.btn-cancelar-consecutivo', function () {
            $('#form-consecutivo')[0].reset();
            $('.create-consecutivo').show();
            $('.btn-editar-consecutivo').hide();
            $('.btn-cancelar-consecutivo').hide();
        });
    };

    var deleteConsecutivo = function (el) {
        var options = {
            title: "Consecutivo",
            text: "¿Está seguro de eliminar este consecutivo?",
            url: el.attr("data-delete-url"),
            confirmButtonText: 'Eliminar consecutivo',
            method: 'POST',
            data: [ el.parent().parent('tr').attr("data-id") ]
        };

        sweetAlertDelete(options);
    };

    var deleteFromCheckBox = function (el) {

        var selected = [];
        $('.mail-checkbox').each(function() {
            if ($(this).is(":checked")) {
                selected.push($(this).val());
            }
        });

        if ( selected.length !== 0 ) {
            var options = {
                title: "Eliminar",
                text: "¿Está seguro de eliminar los elementos seleccionados?",
                url: el.attr("data-delete-url"),
                confirmButtonText: 'Eliminar',
                method: 'POST',
                data: selected
            };
            sweetAlertDelete(options);
        }
    };

    var toggleButton = function(el) {
        if (typeof el === 'undefined') {
            return;
        }
        if (el.attr("disabled")) {
            el.attr("disabled", false);
        } else {
            el.attr("disabled", true);
        }
    };

    var handleSelect2 = function () {
        $.fn.select2.defaults.set('language', 'es');
        $.fn.select2.defaults.set('width', '100%');
        $.fn.select2.defaults.set('allowClear', true);

        $('#tipo_remitente').select2({
            placeholder: 'Tipo de Remitente:'
        });
        $('#proyecto').select2({
            placeholder: 'Proyecto:'
        });
        $('#proyecto').select2({
            placeholder: 'Proyecto:'
        });
        $('#tipo_documentacion').select2({
            placeholder: 'Tipo de documentación:'
        });
        $('#area').select2({
            placeholder: 'Área Responsable:'
        });
        $('#remitente').select2({
            placeholder: 'Remitente/Destinatario:'
        });
        $('#responsable').select2({
            placeholder: 'Responsable:'
        });
        $('#medio_envio').select2({
            placeholder: 'Medio de envío:'
        });
        $('#radicado_relacionado').select2({
            placeholder: 'Radicado Relacionado:'
        });
        $('#estado').select2({
            placeholder: 'Estado de Seguimiento:'
        });
    };

    var handleDateTimePicker = function () {
        $(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: App.isRTL(),
            format: "yyyy-mm-dd hh:ii:ss",
            fontAwesome: true,
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
            todayBtn: true,
            minuteStep: 5
        });
    };

    var cleanSelect = function ($select, $placeholder) {
        $select.empty();
        $select.val( null ).trigger("change");
        $select.select2({
            placeholder: $placeholder
        });
        $select.prop("disabled", true);
    };

    var $get = function ($url, $param, $disable, $set, $placeholder) {

        $set = $set | null;

        $disable.select2({ placeholder: 'Cargando...' });

        $.get( $url, $param ).done(function( data ) {
            $disable.select2().prop("disabled", false);
            $formatData($disable, data, $placeholder);
        }).then( function(  ) {
            $disable.val( $set ).trigger("change");
        });
    };

    var $formatData = function ($select, $data, $placeholder) {
        var $resources = $.each($data, function(index, text) {
            return text;
        });
        $select.select2({ placeholder: $placeholder, data: $resources }).prop("disabled", false);
        $select.val( null ).trigger("change");
    };

    var getPath = function ( paramName ) {
        var path = window.location.pathname;
        var path = path.split('/');

        var i, val;

        for (i = 0; i < path.length; i++) {
            val = path[i];
            if (val === paramName) {
                return unescape(val);
            }
        }
        return null;
    };

    var enableFields = function () {

        $select = $('#radicado_relacionado');

        $(document).on('change' ,'#answer', function () {
            if ($(this).is(":checked")) {
                $select.select2({
                    placeholder: 'Radicado Relacionado'
                });
                $select.val( null ).trigger("change");
                $select.prop('disabled', false);
                $select.prop('required', true);
            } else {
                $select.select2({
                    placeholder: 'Radicado Relacionado'
                });
                $select.val( null ).trigger("change");
                $select.prop('disabled', true);
                $select.prop('required', false);
            }
        });

        $(document).on('change' ,'#destinatario', function () {

            var days = $('#maximo_dias');
            var date = $('#max_date');

            if ($(this).is(":checked")) {
                days.val( null );
                days.prop('disabled', false);
                days.prop('required', true);
                date.val( null );
                date.prop('disabled', false);
                date.prop('required', true);
            } else {
                days.val( null );
                days.prop('disabled', true);
                days.prop('required', false);
                date.val( null );
                date.prop('disabled', true);
                date.prop('required', false);
            }
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            /**
             * Custom Functions
             */

            // handle inbox listing

            // handle compose btn click

            $('.inbox-nav > li > a').click(function () {
                loadInbox($(this), 'inbox');
            });

            $(document).on('click', '.create-tipo-remitente', function (e) {
                e.preventDefault();
                createTipoRemitente( $(this) );
            });

            $(document).on('click', '.edit-tipo-remitente', function (e) {
                e.preventDefault();
                editTipoRemitente( $(this) );
            });

            $(document).on('click', '.trash-tipo-remitente', function (e) {
                e.preventDefault();
                deleteTipoRemitente( $(this) );
            });

            $(document).on('click', '.create-estados', function (e) {
                e.preventDefault();
                createEstado( $(this) );
            });

            $(document).on('click', '.edit-estados', function (e) {
                e.preventDefault();
                editEstado( $(this) );
            });

            $(document).on('click', '.trash-estados', function (e) {
                e.preventDefault();
                deleteEstado( $(this) );
            });

            $(document).on('click', '.create-medio-envio', function (e) {
                e.preventDefault();
                createMedio( $(this) );
            });

            $(document).on('click', '.edit-medio-envio', function (e) {
                e.preventDefault();
                editMedio( $(this) );
            });

            $(document).on('click', '.trash-medio-envio', function (e) {
                e.preventDefault();
                deleteMedio( $(this) );
            });


            $(document).on('click', '.create-proyecto', function (e) {
                e.preventDefault();
                createProyecto( $(this) );
            });

            $(document).on('click', '.edit-proyecto', function (e) {
                e.preventDefault();
                editProyecto( $(this) );
            });

            $(document).on('click', '.trash-proyecto', function (e) {
                e.preventDefault();
                deleteProyecto( $(this) );
            });



            $(document).on('click', '.create-remitente', function (e) {
                e.preventDefault();
                createRemitente( $(this) );
            });

            $(document).on('click', '.edit-remitente', function (e) {
                e.preventDefault();
                editRemitente( $(this) );
            });

            $(document).on('click', '.trash-remitente', function (e) {
                e.preventDefault();
                deleteRemitente( $(this) );
            });



            $(document).on('click', '.create-consecutivo', function (e) {
                e.preventDefault();
                createConsecutivo( $(this) );
            });

            $(document).on('click', '.edit-consecutivo', function (e) {
                e.preventDefault();
                editConsecutivo( $(this) );
            });

            $(document).on('click', '.trash-consecutivo', function (e) {
                e.preventDefault();
                deleteConsecutivo( $(this) );
            });


            $(document).on('click', '.delete-selected', function () {
                deleteFromCheckBox( $(this) );
            });

            $(document).on('keypress', 'input', function (e) {
                if(e.which === 13){
                    return false;
                }
            });

            $(document).on('keypress', 'form', function (e) {
                if(e === 13){
                    return false;
                }
            });

            $('.inbox-nav > li.active > a').click();
        }

    };

}();

jQuery(document).ready(function() {
    AppInbox.init();
});
