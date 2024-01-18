var AppCalendar = function() {

    return {
        //main function to initiate the module
        init: function(route, modal) {
            this.initCalendar(route, modal);
        },

        initCalendar: function(route, modal) {

            if (!jQuery().fullCalendar) {
                return;
            }

            var h = {};

            if (App.isRTL()) {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        right: 'title, prev, next',
                        center: '',
                        left: 'listDay, listWeek, agendaDay, agendaWeek, month, today, reload'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        right: 'title',
                        center: '',
                        left: 'reload, agendaDay, agendaWeek, month, today, listDay, listWeek, prev,next'
                    };
                }
            } else {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        left: 'title, prev, next',
                        center: '',
                        right: 'today,month,listDay,listWeek,agendaWeek,agendaDay'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,listDay,listWeek,agendaWeek,agendaDay,reload'
                    };
                }
            }

            $('#go-to-date').unbind('click').click(function () {
                $('#calendar').fullCalendar('gotoDate', $('#go-to').val());
                $('#calendar').fullCalendar('changeView', 'listDay');
            });

            $('#event_add').unbind('click').click(function(e) {
                e.preventDefault();
                var form = $('#create_visit');
                var sendAjax = function () {
                    var dataRequest = function () {
                        var type = 'POST';
                        var data = new FormData();
                        data.append('title', $('#headquarter option:selected').text());
                        data.append('headquarter', $('#headquarter').val());
                        data.append('coordinator', form.find('input#coordinator').val());
                        data.append('formato', form.find('select#format').val());
                        data.append('observation', $('#observation').val());
                        data.append('verify_zone', $('#verify_zone').val().toUpperCase());
                        data.append('date', form.find('input#date').val());
                        data.append('start_time', form.find('input#start_time').val());
                        data.append('end_time', form.find('input#end_time').val());
                        var post = form.attr('action');

                        $.ajax({
                            url: post,
                            cache: false,
                            type: type,
                            contentType: false,
                            data: data,
                            processData: false,
                            beforeSend: function() {

                                $.blockUI({
                                    message: null,
                                    onBlock: function() {
                                        $('#asignar_visita').block({
                                            message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Creando Visita ... </h3>',
                                            css: {
                                                border: 'none',
                                                padding: '20px',
                                                backgroundColor: '#000',
                                                '-webkit-border-radius': '10px',
                                                '-moz-border-radius': '10px',
                                                opacity: .5,
                                                color: '#fff'
                                            },
                                        });
                                    }
                                });
                            },
                            success: function (response, xhr, request) {
                                $.unblockUI({
                                    onUnblock: function () {
                                        $('#asignar_visita').unblock();
                                        $('#asignar_visita').modal('hide');
                                        if (request.status === 200 && xhr === 'success') {
                                            form[0].reset();
                                            $(".pmd-select2").select2({
                                                width: null,
                                                placeholder: "Selecccionar",
                                            });
                                            swal({
                                                title: response.title,
                                                text: response.message,
                                                buttonsStyling: false,
                                                confirmButtonClass: "btn btn-success",
                                                type: xhr,
                                            }, function () {
                                                $('#calendar').fullCalendar('refetchEventSources', route);
                                            });
                                        }
                                    }
                                });
                            },
                            error: function (response, xhr, request) {
                                $.unblockUI({
                                    onUnblock: function(){
                                        $('#asignar_visita').unblock();
                                        if (response.status === 422){
                                            $.each(response.responseJSON, function(index, value) {
                                                $('#field_'+index).closest('.form-group').removeClass('has-success').addClass('has-error');
                                                $('#'+index+'-error').text(''+value[0]);
                                            });
                                            if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                                $('#asignar_visita').modal('hide');
                                                swal({
                                                    title: response.responseJSON.title || response.title,
                                                    text: response.responseJSON.message || response.message,
                                                    buttonsStyling: false,
                                                    confirmButtonClass: "btn btn-success",
                                                    type: 'error',
                                                }, function () {
                                                    $('#asignar_visita').modal('hide');
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
                                                $('#calendar').fullCalendar('refetchEventSources', route);
                                            });
                                        }
                                    }
                                });
                            }
                        });

                    }
                    return {
                        init: function () {
                            dataRequest();
                        }
                    }
                }();

                if(form.valid()) {
                    sendAjax.init();
                }
            });

            $('#comentarios').unbind('click').click(function (e) {
                e.preventDefault();
                var c = $('#do-comment').val();
                if (c != '') {
                    var o = new FormData();
                    o.append('visit', $('#visit-to-comment').val());
                    o.append('type', 'Visita');
                    o.append('observation', c);
                    $.ajax({
                        type: 'POST',
                        url: $('#obs_route').val(),
                        data: o,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $.blockUI({
                                message: null,
                                onBlock: function() {
                                    $('#do-comment').val('');
                                    $('#visit-to-comment').val('');
                                    $('#ver_visita').block({
                                        message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Enviando comentario... </h3>',
                                        css: {
                                            border: 'none',
                                            padding: '20px',
                                            backgroundColor: '#000',
                                            '-webkit-border-radius': '10px',
                                            '-moz-border-radius': '10px',
                                            opacity: .5,
                                            color: '#fff'
                                        },
                                    });
                                }
                            });
                        },
                        success: function (response, xhr, request) {
                            $.unblockUI({
                                onUnblock: function () {
                                    $('#ver_visita').unblock();
                                    $('#ver_visita').modal('hide');
                                    if (request.status === 200 && xhr === 'success') {
                                        $(".pmd-select2").select2({
                                            width: null,
                                            placeholder: "Selecccionar",
                                        });
                                        swal({
                                            title: response.title,
                                            text: response.message,
                                            buttonsStyling: false,
                                            confirmButtonClass: "btn btn-success",
                                            type: xhr,
                                        }, function () {
                                            $('#calendar').fullCalendar('refetchEventSources', route);
                                        });
                                    }
                                }
                            });
                        },
                        error: function (response, xhr, request) {
                            $.unblockUI({
                                onUnblock: function(){
                                    $('#ver_visita').unblock();
                                    if (response.status === 422){
                                        $.each(response.responseJSON, function(index, value) {
                                            $('#field_'+index).closest('.form-group').removeClass('has-success').addClass('has-error');
                                            $('#'+index+'-error').text(''+value[0]);
                                        });
                                        if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                            $('#ver_visita').modal('hide');
                                            swal({
                                                title: response.responseJSON.title || response.title,
                                                text: response.responseJSON.message || response.message,
                                                buttonsStyling: false,
                                                confirmButtonClass: "btn btn-success",
                                                type: 'error',
                                            }, function () {
                                                $('#ver_visita').modal('hide');
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
                                            $('#calendar').fullCalendar('refetchEventSources', route);
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            });

            $('#edit_another_values').unbind('click').click(function (e) {
                e.preventDefault();
                var c = $('#lugar').val();
                var x = $('#work-day').val();
                if (c != '' && x != '') {
                    var data = new FormData();
                    data.append('_method', 'PATCH');
                    data.append('id', $('#visit-to-comment').val());
                    data.append('verify', c);
                    data.append('formatos', x);
                    $.ajax({
                        type: 'POST',
                        url: $('#update_visit_state').val(),
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $.blockUI({
                                message: null,
                                onBlock: function() {
                                    $('#ver_visita').block({
                                        message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Enviando comentario... </h3>',
                                        css: {
                                            border: 'none',
                                            padding: '20px',
                                            backgroundColor: '#000',
                                            '-webkit-border-radius': '10px',
                                            '-moz-border-radius': '10px',
                                            opacity: .5,
                                            color: '#fff'
                                        },
                                    });
                                }
                            });
                        },
                        success: function (response, xhr, request) {
                            $.unblockUI({
                                onUnblock: function () {
                                    $('#ver_visita').unblock();
                                    $('#ver_visita').modal('hide');
                                    if (request.status === 200 && xhr === 'success') {
                                        $(".pmd-select2").select2({
                                            width: null,
                                            placeholder: "Selecccionar",
                                        });
                                        swal({
                                            title: response.title,
                                            text: response.message,
                                            buttonsStyling: false,
                                            confirmButtonClass: "btn btn-success",
                                            type: xhr,
                                        }, function () {
                                            $('#calendar').fullCalendar('refetchEventSources', route);
                                        });
                                    }
                                }
                            });
                        },
                        error: function (response, xhr, request) {
                            $.unblockUI({
                                onUnblock: function(){
                                    $('#ver_visita').unblock();
                                    if (response.status === 422){
                                        $.each(response.responseJSON, function(index, value) {
                                            $('#field_'+index).closest('.form-group').removeClass('has-success').addClass('has-error');
                                            $('#'+index+'-error').text(''+value[0]);
                                        });
                                        if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                            $('#ver_visita').modal('hide');
                                            swal({
                                                title: response.responseJSON.title || response.title,
                                                text: response.responseJSON.message || response.message,
                                                buttonsStyling: false,
                                                confirmButtonClass: "btn btn-success",
                                                type: 'error',
                                            }, function () {
                                                $('#ver_visita').modal('hide');
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
                                            $('#calendar').fullCalendar('refetchEventSources', route);
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            });

            var initDrag = function(el) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim('Día Administrativo'),
                    allDay: true,
                };
                // store the Event Object in the DOM element so we can get to it later
                el.data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                el.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            };

            $('#external-events div.external-event').each(function() {
                initDrag($(this));
            });


            var currentMousePos = {
                x: -1,
                y: -1
            };

            jQuery(document).on("mousemove", function (event) {
                currentMousePos.x = event.pageX;
                currentMousePos.y = event.pageY;
            });

            var isToTrash = function () {

                var trashEl = jQuery('#trash');
                var ofs = trashEl.offset();
                var x1 = ofs.left;
                var x2 = ofs.left + trashEl.outerWidth(true);
                var y1 = ofs.top;
                var y2 = ofs.top + trashEl.outerHeight(true);
                if (currentMousePos.x >= x1 &&
                    currentMousePos.x <= x2 &&
                    currentMousePos.y >= y1 &&
                    currentMousePos.y <= y2) {
                    return true;
                }
                return false;
            };


            $('#calendar').fullCalendar({ //re-initialize the calendar
                header: h,
                defaultView: 'month', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/
                slotMinutes: 1,
                editable: true,
                allDayDefault: false,
                droppable: true,
                selectable: true,
                selectHelper: true,
                timeFormat: 'hh:mm a',
                nowIndicator: true,
                eventResourceEditable: true,
                customButtons: {
                    reload: {
                        text: 'Recargar',
                        click: function() {
                            $('#calendar').fullCalendar('refetchEventSources', route);
                        }
                    }
                },
                loading: function( isLoading, view ) {
                    if(isLoading) {
                        $.blockUI({
                            message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span><h3> Cargando Visitas en el Calendario ... </h3>',
                            css: {
                                border: 'none',
                                padding: '20px',
                                backgroundColor: '#000',
                                '-webkit-border-radius': '10px',
                                '-moz-border-radius': '10px',
                                opacity: .5,
                                color: '#fff'
                            }
                        });
                    } else {
                        $.unblockUI();
                    }
                },

                views: {
                    listDay: { buttonText: 'Visitas del Día' },
                    listWeek: { buttonText: 'Visitas de la Semana' }
                },
                businessHours: {
                    // days of week. an array of zero-based day of week integers (0=Sunday)
                    dow: [ 1, 2, 3, 4, 5, 6 ], // Monday - Thursday

                    start: '06:00', // a start time (10am in this example)
                    end: '18:00', // an end time (6pm in this example)
                },
                googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

                eventSources: [
                    route,
                    'es.co#holiday@group.v.calendar.google.com',
                ],


                drop: function(date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');
                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    var sdate = $.fullCalendar.moment(date.format('YYYY-MM-DD'));  // Create a clone of the dropped date.
                    sdate.stripTime();        // The time should already be stripped but lets do a sanity check.
                    sdate.time('00:00:00');   // Set a default start time.

                    var edate = $.fullCalendar.moment(date.format('YYYY-MM-DD'));  // Create a clone.
                    edate.stripTime();        // Sanity check.
                    edate.time('00:00:00');   // Set a default end time.

                    copiedEventObject.start = sdate.format('YYYY-MM-DD HH:mm:ss');
                    copiedEventObject.end = edate.format('YYYY-MM-DD HH:mm:ss');
                    copiedEventObject.backgroundColor = "#9A12B3";
                    copiedEventObject.durationEditable = false;
                    copiedEventObject.overlap = false;
                    copiedEventObject.resourceEditable = false;
                    copiedEventObject.estado = 4;

                    var sendAjax = function () {
                        var dataRequest = function () {
                            var form = $('#create_visit');
                            var type = 'POST';
                            var data = new FormData();
                            data.append('title', 'Día Administrativo');
                            data.append('headquarter', 'Día Administrativo');
                            data.append('formato', 'Día Administrativo');
                            data.append('verify_zone', 'Día Administrativo');
                            data.append('coordinator', form.find('input#coordinator').val());
                            data.append('date', sdate.format('YYYY-MM-DD'));
                            data.append('start_time', '00:00:00');
                            data.append('end_time', '23:00:00');
                            data.append('state', 4);
                            var post = form.attr('action');

                            $.ajax({
                                url: post,
                                cache: false,
                                type: type,
                                contentType: false,
                                data: data,
                                processData: false,
                                beforeSend: function() {

                                    $.blockUI({
                                        message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Creando Día Administrativo ... </h3>',
                                        css: {
                                            border: 'none',
                                            padding: '20px',
                                            backgroundColor: '#000',
                                            '-webkit-border-radius': '10px',
                                            '-moz-border-radius': '10px',
                                            opacity: .5,
                                            color: '#fff'
                                        },
                                    });
                                },
                                success: function (response, xhr, request) {
                                    $.unblockUI({
                                        onUnblock: function () {
                                            if (request.status === 200 && xhr === 'success') {
                                                $(".pmd-select2").select2({
                                                    width: null,
                                                    placeholder: "Selecccionar",
                                                });
                                                swal({
                                                    title: response.title,
                                                    text: response.message,
                                                    buttonsStyling: false,
                                                    confirmButtonClass: "btn btn-success",
                                                    type: xhr,
                                                }, function () {
                                                    $('#calendar').fullCalendar('refetchEventSources', route);
                                                });
                                            }
                                        }
                                    });
                                },
                                error: function (response, xhr, request) {
                                    $.unblockUI({
                                        onUnblock: function(){
                                            if (response.status === 422){
                                                $.each(response.responseJSON, function(index, value) {
                                                    $('#field_'+index).closest('.form-group').removeClass('has-success').addClass('has-error');
                                                    $('#'+index+'-error').text(''+value[0]);
                                                });
                                                if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                                    swal({
                                                        title: response.responseJSON.title || response.title,
                                                        text: response.responseJSON.message || response.message,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-success",
                                                        type: 'error',
                                                    });
                                                }
                                            } else {
                                                swal({
                                                    title: '¡Algo sucedió!',
                                                    text: 'No pudimos procesar tu solicitud. '+response.responseText,
                                                    buttonsStyling: false,
                                                    confirmButtonClass: "btn btn-danger",
                                                    type: 'error',
                                                });
                                            }
                                        }
                                    });
                                }
                            });

                        };
                        return {
                            init: function () {
                                dataRequest();
                            }
                        };
                    }();

                    sendAjax.init();

                },

                eventClick: function (event, jsEvent, view) {

                    if (typeof event.description === 'undefined'){
                        return ;
                    }
                    modal.find('ul#activity').empty();
                    $('#work-day').select2().val(null).trigger("change");
                    //modal.find('#work-day').empty();
                    modal.find('h4.modal-title').text('VISITA '+event.title);
                    modal.find('p#address').text(event.description+' '+event.city);
                    modal.find('p#date').text(event.fecha);
                    if (event.estado == 1 || event.estado == 3) {
                        modal.find('input#lugar').prop("disabled", true);
                        modal.find('#edit_another_values').prop("disabled", true);
                    } else {
                        modal.find('#edit_another_values').prop("disabled", false);
                        modal.find('input#lugar').prop("disabled", false);
                    }
                    modal.find('input#lugar').val(event.lugar);
                    modal.find('input#update_visit_state').val(event.update);
                    modal.find('input#visit-to-comment').val(event.id);
                    modal.find('input#visit_statet').val(event.estado);

                    if (typeof event.formatos == 'object') {
                        var array = $.map(event.formatos, function(value, index) {
                            return [value.formato];
                        });
                        if (event.estado == 1 || event.estado == 3) {
                            $('#work-day').select2({
                                multiple: true,
                                width: null,
                                placeholder: "Seleccionar",
                                disabled: true,
                            });
                            $('#work-day').select2('val', [array]);
                            $('#work-day').prop("disabled", true);
                            modal.find('#edit_another_values').prop("disabled", true);
                        } else {
                            $('#work-day').select2({
                                multiple: true,
                                width: null,
                                placeholder: "Seleccionar",
                                disabled: false,
                            });
                            $('#work-day').select2('val', [array]);
                            $('#work-day').prop("disabled", false);
                            modal.find('#edit_another_values').prop("disabled", false);
                        }

                    } else {
                        if (event.estado == 1 || event.estado == 3) {
                            $('#work-day').select2({
                                multiple: true,
                                width: null,
                                placeholder: "Seleccionar",
                                disabled: true,
                            });
                            $('#work-day').select2('val', '');
                            $('#work-day').prop("disabled", true);
                            modal.find('#edit_another_values').prop("disabled", true);
                        } else {
                            $('#work-day').select2({
                                multiple: true,
                                width: null,
                                placeholder: "Seleccionar",
                                disabled: false,
                            });
                            $('#work-day').select2('val', '');
                            $('#work-day').prop("disabled", false);
                            modal.find('#edit_another_values').prop("disabled", false);
                        }
                    }

                    modal.find('p#hour').text(event.hin +' - '+event.hfn);
                    modal.find('p#coordinator').text(event.coordinador);
                    modal.find('p#approved').text(event.aprobacion);
                    if (typeof event.observaciones == 'object') {
                        event.observaciones.forEach(function (index) {
                            var my, other;
                            var base = "data:image/png;base64,";
                            if (index.picture === null) {
                                my = new Identicon(index.my_avatar, 42).toString();
                                my =  base + my;
                            } else {
                                my = index.picture;
                            }
                            if (index.other_pic === null) {
                                other = new Identicon(index.avatar, 42).toString();
                                other =  base + other;
                            } else {
                                other = index.other_pic;
                            }

                            var image = (index.id == index.my_id) ? my:other;
                            var name = (index.id == index.my_id) ? index.my_name:index.name;
                            var clase = (index.id == index.my_id) ? 'out':'in';
                            var html =  '<li class="'+clase+'">';
                                html += '<img class="avatar" alt="'+name+'" src="'+image+'" />';
                                html += '<div class="message">';
                                html += '<span class="arrow"> </span>';
                                html += '<a href="javascript:;" class="name"> '+name+' </a>';
                                html += '<span class="body">'+index.text+'</span>';
                                html += '</div></li>';

                            modal.find('ul#activity').append(html);
                        });
                    } else {
                        modal.find('p#text-activity').text(event.observaciones);
                    }
                    modal.modal('show');

                    if (view.name === "month") {
                        $('#calendar').fullCalendar('gotoDate', event.fecha);
                        $('#calendar').fullCalendar('changeView', 'listWeek');
                    }
                },

                selectOverlap: function(event) {
                    return event.rendering === 'background';
                },

                eventDragStop: function (event, jsEvent, ui, view) {
                    if(event.estado != 3 && event.estado != 1 && event.estado != 2) {
                        if (isToTrash()) {

                            swal({
                                title: 'Advertencia',
                                text: "Eliminaras la visita a la sede " + event.title,
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonClass: 'btn btn-success',
                                cancelButtonClass: 'btn btn-danger',
                                confirmButtonText: 'Si, eliminar',
                                cancelButtonText: 'Cancelar',
                                buttonsStyling: false
                            }, function (isConfirm) {
                                if (isConfirm) {
                                    var f = new FormData();
                                    f.append('_method', 'DELETE');
                                    f.append('estado', event.estado);
                                    $.ajax({
                                        url: event.delete,
                                        cache: false,
                                        type: 'POST',
                                        contentType: false,
                                        data: f,
                                        processData: false,
                                        beforeSend: function() {
                                            $.blockUI({
                                                message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Eliminando Visita ... </h3>',
                                                css: {
                                                    border: 'none',
                                                    padding: '20px',
                                                    backgroundColor: '#000',
                                                    '-webkit-border-radius': '10px',
                                                    '-moz-border-radius': '10px',
                                                    opacity: .5,
                                                    color: '#fff'
                                                }
                                            });
                                        },
                                        success: function (response, xhr, request) {
                                            if (request.status === 200 && xhr === 'success') {
                                                $(".pmd-select2").select2({
                                                    width: null,
                                                    placeholder: "Selecccionar",
                                                });
                                                swal({
                                                    title: response.title,
                                                    text: response.message,
                                                    buttonsStyling: false,
                                                    confirmButtonClass: "btn btn-success",
                                                    type: response.type || xhr,
                                                }, function () {
                                                    $('#calendar').fullCalendar('refetchEventSources', route);
                                                });
                                            }
                                        },
                                        error: function (response, xhr, request) {
                                            if (response.status == 422){
                                                if (response.title && response.message) {
                                                    swal({
                                                        title: response.title,
                                                        text: response.message,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-success",
                                                        type: 'error',
                                                    });
                                                }
                                            } else {
                                                swal({
                                                    title: '¡Algo sucedió!',
                                                    text: 'No pudimos procesar tu solicitud. '+response.responseText,
                                                    buttonsStyling: false,
                                                    confirmButtonClass: "btn btn-danger",
                                                    type: 'error',
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    } else {
                        var estado;
                        if (event.estado == 1) {
                            estado = 'aprobado';
                        } else if(event.estado == 3) {
                            estado = 'cancelado';
                        } else if(event.estado == 2) {
                            estado = 'rechazado';
                        }

                        swal({
                            title: 'No se puede modificar',
                            text: 'La visita tiene estado '+estado+' y no se puede eliminar',
                            type: 'error',
                            confirmButtonClass: 'btn btn-success',
                            confirmButtonText: 'De acuerdo',
                            buttonsStyling: false
                        });
                    }
                },

                eventResize: function(event, delta, revertFunc) {
                    if(event.estado != 3 && event.estado != 1){
                        swal({
                            title: 'Cambiar Fecha',
                            text: 'La visita a la sede ' + event.title + " ha sido cambiada a la fecha " + event.start.format('YYYY-MM-DD') + ' con hora de inicio ' + event.start.format('hh:mm a') + ' y hora de finalización ' + event.end.format('hh:mm a'),
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonClass: 'btn btn-success',
                            cancelButtonClass: 'btn btn-danger',
                            confirmButtonText: 'Si, modificar',
                            cancelButtonText: 'Cancelar',
                            buttonsStyling: false
                        }, function (isConfirm) {
                            if (isConfirm) {
                                var type = 'POST';
                                var data = new FormData();
                                data.append('_method', 'PATCH');
                                data.append('id', event.id);
                                data.append('date', event.start.format('YYYY-MM-DD'));
                                data.append('start_time', event.start.format('hh:mm a'));
                                data.append('end_time', event.end.format('hh:mm a'));
                                var post = event.update;

                                $.ajax({
                                    url: post,
                                    cache: false,
                                    type: type,
                                    contentType: false,
                                    data: data,
                                    processData: false,
                                    beforeSend: function() {

                                        $.blockUI({
                                            message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Modificando Visita ... </h3>',
                                            css: {
                                                border: 'none',
                                                padding: '20px',
                                                backgroundColor: '#000',
                                                '-webkit-border-radius': '10px',
                                                '-moz-border-radius': '10px',
                                                opacity: .5,
                                                color: '#fff'
                                            },
                                        });
                                    },
                                    success: function (response, xhr, request) {
                                        $.unblockUI({
                                            onUnblock: function () {
                                                if (request.status === 200 && xhr === 'success') {
                                                    swal({
                                                        title: response.title,
                                                        text: response.message,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-success",
                                                        type: xhr,
                                                    }, function () {
                                                        $('#calendar').fullCalendar('refetchEventSources', route);
                                                    });
                                                }
                                            }
                                        });
                                    },
                                    error: function (response, xhr, request) {
                                        revertFunc();
                                        $.unblockUI({
                                            onUnblock: function(){
                                                if (response.status === 422){
                                                    if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                                        swal({
                                                            title: response.responseJSON.title || response.title,
                                                            text: response.responseJSON.message || response.message,
                                                            buttonsStyling: false,
                                                            confirmButtonClass: "btn btn-success",
                                                            type: 'error',
                                                        });
                                                    }
                                                } else {
                                                    revertFunc();
                                                    swal({
                                                        title: '¡Algo sucedió!',
                                                        text: 'No pudimos procesar tu solicitud. '+response.responseText,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-danger",
                                                        type: 'error',
                                                    }, function () {
                                                        $('#calendar').fullCalendar('refetchEventSources', route);
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });
                            } else {
                                revertFunc();
                            }
                        });
                    } else {
                        var estado;
                        if (event.estado == 1) {
                            estado = 'aprobado';
                        } else if(event.estado == 3) {
                            estado = 'cancelado';
                        } else if (event.estado == 4) {
                            estado = 'de día administrativo';
                        }

                        swal({
                            title: 'No se puede modificar',
                            text: 'La visita tiene estado '+estado+' y no se puede modificar',
                            type: 'warning',
                            confirmButtonClass: 'btn btn-success',
                            confirmButtonText: 'De acuerdo',
                            buttonsStyling: false
                        }, function (isConfirm) {
                            if (isConfirm) {
                                revertFunc();
                            } else {
                                revertFunc();
                            }
                        });
                    }


                },

                eventDrop: function(event, delta, revertFunc) {

                    if(event.estado != 3 && event.estado != 1) {
                        swal({
                            title: 'Cambiar Fecha',
                            text: 'La visita a la sede ' + event.title + " ha sido cambiada a la fecha " + event.start.format('YYYY-MM-DD') + ' con hora de inicio ' + event.start.format('hh:mm a') + ' y hora de finalización ' + event.end.format('hh:mm a'),
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonClass: 'btn btn-success',
                            cancelButtonClass: 'btn btn-danger',
                            confirmButtonText: 'Si, modificar',
                            cancelButtonText: 'Cancelar',
                            buttonsStyling: false
                        }, function (isConfirm) {
                            if (isConfirm) {
                                var type = 'POST';
                                var data = new FormData();
                                data.append('_method', 'PATCH');
                                data.append('id', event.id);
                                data.append('date', event.start.format('YYYY-MM-DD'));
                                data.append('start_time', event.start.format('hh:mm a'));
                                data.append('end_time', event.end.format('hh:mm a'));
                                var post = event.update;

                                $.ajax({
                                    url: post,
                                    cache: false,
                                    type: type,
                                    contentType: false,
                                    data: data,
                                    processData: false,
                                    beforeSend: function () {

                                        $.blockUI({
                                            message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Modificando Visita ... </h3>',
                                            css: {
                                                border: 'none',
                                                padding: '20px',
                                                backgroundColor: '#000',
                                                '-webkit-border-radius': '10px',
                                                '-moz-border-radius': '10px',
                                                opacity: .5,
                                                color: '#fff'
                                            },
                                        });
                                    },
                                    success: function (response, xhr, request) {
                                        $.unblockUI({
                                            onUnblock: function () {
                                                if (request.status === 200 && xhr === 'success') {
                                                    swal({
                                                        title: response.title,
                                                        text: response.message,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-success",
                                                        type: xhr,
                                                    }, function () {
                                                        $('#calendar').fullCalendar('refetchEventSources', route);
                                                    });
                                                }
                                            }
                                        });
                                    },
                                    error: function (response, xhr, request) {
                                        revertFunc();
                                        $.unblockUI({
                                            onUnblock: function () {
                                                if (response.status === 422) {
                                                    if (response.responseJSON.title && response.responseJSON.message || response.title && response.message) {
                                                        swal({
                                                            title: response.responseJSON.title || response.title,
                                                            text: response.responseJSON.message || response.message,
                                                            buttonsStyling: false,
                                                            confirmButtonClass: "btn btn-success",
                                                            type: 'error',
                                                        });
                                                    }
                                                } else {
                                                    revertFunc();
                                                    swal({
                                                        title: '¡Algo sucedió!',
                                                        text: 'No pudimos procesar tu solicitud. ' + response.responseText,
                                                        buttonsStyling: false,
                                                        confirmButtonClass: "btn btn-danger",
                                                        type: 'error',
                                                    }, function () {
                                                        $('#calendar').fullCalendar('refetchEventSources', route);
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });
                            } else {
                                revertFunc();
                            }
                        });
                    } else {
                        var estado;
                        if (event.estado == 1) {
                            estado = 'aprobado';
                        } else if(event.estado == 3) {
                            estado = 'cancelado';
                        }

                        swal({
                            title: 'No se puede modificar',
                            text: 'La visita tiene estado '+estado+' y no se puede modificar',
                            type: 'warning',
                            confirmButtonClass: 'btn btn-success',
                            confirmButtonText: 'De acuerdo',
                            buttonsStyling: false
                        }, function (isConfirm) {
                            if (isConfirm) {
                                revertFunc();
                            } else {
                                revertFunc();
                            }
                        });
                    }
                },

                dayClick: function(date, jsEvent, view) {

                    /*
                    var today = moment();
                    if (today > date) {
                        return true;
                    }
                    */
                    $('#asignar_visita').modal('show');
                    $('#create_visit').find('input#date').val(date.format('YYYY-MM-DD'));
                },

            });

        }

    };

}();