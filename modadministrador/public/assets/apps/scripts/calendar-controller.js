var AppCalendar = function() {

    return {
        //main function to initiate the module
        init: function(resourses, $events, modal, $update) {
            this.initCalendar(resourses, $events, modal, $update);
        },

        initCalendar: function(resourses, $events, modal, $update) {

            if (!jQuery().fullCalendar) {
                return;
            }

            var h = {};

            if (App.isRTL()) {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {

                        left: 'title,prev,next',
                        center: '',
                        right: 'timelineDay,timelineTenDay,timelineMonth,timelineYear'
                        /*
                        right: 'title, prev, next',
                        center: '',
                        left: 'timelineDay,timelineTenDay,timelineMonth,timelineYear'*/
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        left: 'timelineDay,timelineTenDay,timelineMonth,timelineYear,prev,next',
                        center: '',
                        right: 'title'
                        /*
                        right: 'title',
                        center: '',
                        left: 'reload, agendaDay, agendaWeek, month, today, listDay, listWeek, prev,next'*/
                    };
                }
            } else {
                if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        left: 'title,prev,next',
                        center: '',
                        right: 'timelineDay,timelineTenDay,timelineMonth,timelineYear'

                        /*
                        left: 'title, prev, next',
                        center: '',
                        right: 'today,month,listDay,listWeek,agendaWeek,agendaDay'*/
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {

                        left: 'title',
                        center: '',
                        right: 'prev,next,timelineDay,timelineTenDay,timelineMonth,timelineYear'
                        /*
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,listDay,listWeek,agendaWeek,agendaDay,reload'*/
                    };
                }
            }

            $('#go-to-date').unbind('click').click(function () {
                $('#calendar').fullCalendar('gotoDate', $('#go-to').val());
                $('#calendar').fullCalendar('changeView', 'timelineDay');
            });

            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "left",
                autoclose: true,
                language: 'es',
                dateFormat: 'yyyy-mm-dd',
                firstDay: 1,
                showMonthAfterYear: false,
                clearBtn: true,
                startDate: '2017-01-01'
            });

            var makeComment = function () {
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
                                            $('#calendar').fullCalendar( 'refetchResources' );
                                            $('#calendar').fullCalendar( 'refetchEvents' );
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
                                            $('#calendar').fullCalendar( 'refetchResources' );
                                            $('#calendar').fullCalendar( 'refetchEvents' );
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            };

            $('#comentarios').unbind('click').click(function (e) {
                e.preventDefault();
                makeComment();
            });

            $('.action').unbind('click').click(function () {
                var state = $(this).data('estado');
                var id = $('#visit-to-comment').val();
                var c = $('#do-comment').val();
                var title, btn, type;

                if (state == 1) {
                    title = 'Aprobar';
                    type = 'success';
                } else if (state == 2 && c != '') {
                    title = 'Rechazar';
                    type = 'warning';
                } else if (state == 3) {
                    title = 'Cancelar';
                    type = 'error';
                } else if (state == 2 && c == ''){
                    modal.modal('hide');
                    swal({
                        title: 'Error',
                        text: 'No puede rechazar una visita sin indicar una observación.',
                        type: 'error',
                        confirmButtonClass: 'btn btn-danger',
                        confirmButtonText: 'Ok',
                        buttonsStyling: false
                    });
                    return false;
                }
                modal.modal('hide');
                swal({
                    title: title,
                    text: '¿Desea '+ title.toLowerCase() +' esta visita?',
                    type: type,
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Si, '+title.toLowerCase(),
                    cancelButtonText: 'Cancelar',
                    buttonsStyling: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        makeComment();
                        var f = new FormData();
                        f.append('id', id);
                        f.append('state', state);
                        f.append('_method', 'PATCH');
                        $.ajax({
                            type: 'POST',
                            url: $update,
                            data: f,
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
                                            message: '<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><h3> Cambiando Estado... </h3>',
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
                                                $('#calendar').fullCalendar( 'refetchResources' );
                                                $('#calendar').fullCalendar( 'refetchEvents' );
                                            });
                                        }
                                    }
                                });
                            },
                            error: function (data) {
                            }
                        });
                    }
                });

            });

            $('#calendar').fullCalendar({ //re-initialize the calendar
                header: h,
                defaultView: 'timelineMonth', // change default view with available options from http://arshaw.com/fullcalendar/docs/views/Available_Views/
                slotMinutes: 1,
                aspectRatio: 1.8,
                scrollTime: '00:00',
                editable: false,
                allDayDefault: false,
                droppable: false,
                selectable: true,
                selectHelper: true,
                timeFormat: 'hh:mm a',
                nowIndicator: true,
                refetchResourcesOnNavigate: false,
                eventResourceEditable: false,
                resourceAreaWidth: '25%',

                resourceRender: function(resource, cellEls) {
                    cellEls.on('click', function() {
                        if (typeof resource.date === 'undefined') {return ;}
                        $('#calendar').fullCalendar('gotoDate', resource.date);
                        $('#calendar').fullCalendar('changeView', 'timelineDay');
                    });
                },
                resourceGroupField: 'interventor',
                resourceLabelText: 'Interventores',
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
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
                    timelineDay: {
                        buttonText: 'DÍA',
                        slotDuration: '00:15'
                    },
                    timelineTenDay: {
                        type: 'timeline',
                        duration: { days: 10 }
                    }
                },
                businessHours: {
                    // days of week. an array of zero-based day of week integers (0=Sunday)
                    dow: [ 1, 2, 3, 4, 5, 6 ], // Monday - Thursday

                    start: '06:00', // a start time (6am in this example)
                    end: '18:00', // an end time (6pm in this example)
                },

                eventSources: [
                    $events,
                ],

                resources: {
                    url: resourses,
                },

                eventClick: function (event, jsEvent, view) {

                    if (event.url) { return false; }
                    if (typeof event.description === 'undefined'){return ;}

                    $('#work-day').select2().val(null).trigger("change");
                    modal.find('ul#activity').empty();
                    modal.find('h4.modal-title').text('VISITA '+event.title);
                    modal.find('p#address').text(event.description+' '+event.ciudad);
                    modal.find('p#phone').text(event.telefono);
                    modal.find('p#dane_sede').text(event.dane_sede);
                    modal.find('p#date').text(event.fecha);
                    modal.find('input#visit-to-comment').val(event.id);
                    modal.find('#colegio').text(event.colegio);
                    modal.find('#dane_colegio').text(event.dane_colegio);
                    modal.find('p#hour').text(event.hin +' - '+event.hfn);
                    modal.find('p#coordinator').text(event.interventor);
                    modal.find('p#approved').text(event.aprobacion);

                    if (typeof event.formatos === 'object') {
                        var array = $.map(event.formatos, function(value, index) {
                            return [value.formato];
                        });
                        $('#work-day').select2({
                            multiple: true,
                            width: null,
                            placeholder: "Seleccionar",
                            disabled: true,
                        });
                        $('#work-day').select2('val', [array]);

                        $('#work-day').prop("disabled", true);
                    } else {
                        $('#work-day').select2({
                            multiple: true,
                            width: null,
                            placeholder: "Seleccionar",
                            disabled: true,
                        });
                        $('#work-day').select2('val', '');
                        $('#work-day').prop("disabled", true);
                    }
                    if (typeof event.observaciones === 'object') {
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
                },

                selectOverlap: function(event) {
                    return event.rendering === 'background';
                },

                dayClick: function(date, jsEvent, view) {
                    $('#calendar').fullCalendar('gotoDate', date);
                    $('#calendar').fullCalendar('changeView', 'listWeek');
                },

            });

        }

    };

}();

var UITree = function () {

    var ajaxTreeSample = function(tree) {

        $("#tree_4").jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                },
                // so that create works
                "check_callback" : true,
                'data' : {
                    'url' : function (node) {
                        return tree;
                    },
                    'data' : function (node) {
                        return { 'parent' : node.id };
                    }
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "search": {
                "case_insensitive": true,
                "show_only_matches" : true,
                'show_only_matches_children' : true,
            },
            "checkbox" : {
                "two_state" : true,
                //"three_state" : false,
                "whole_node" : false,//Used to check/uncheck node only if clicked on checkbox icon, and not on the whole node including label
                "tie_selection" : false
            },
            "state" : { "key" : "demo3" },
            "plugins" : [ "dnd", "types", "checkbox", "search", ]
        });

    };

    $(".search-input").keyup(function() {
        var searchString = $(this).val();
        $('#tree_4').jstree('search', searchString);
    });

    $('#tree_4').on('uncheck_node.jstree', function(e,data) {
        $('#calendar').fullCalendar( 'removeResource', data.node.id );
        console.log(removed);
    });

    $('#tree_4').on('check_node.jstree', function(e,data) {
        $('#tree_4').jstree().check_all();
        $('#calendar').fullCalendar( 'refetchResources' );
        $('#calendar').fullCalendar( 'refetchEvents' );
    });

    $('#tree_4').on('select_node.jstree', function(e,data) {
        if (typeof data.node.original.date === 'undefined') { return ;}
        $('#calendar').fullCalendar('gotoDate', data.node.original.date);
        $('#calendar').fullCalendar('changeView', 'timelineDay');
    });

    return {
        init: function (tree) {
            ajaxTreeSample(tree);
        }

    };

}();
