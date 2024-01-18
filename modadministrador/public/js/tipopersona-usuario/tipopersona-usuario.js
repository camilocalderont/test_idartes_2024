jQuery(document).ready(function () {
    var vURL = $('#main').data('url');
    $("#roles_busqueda").hide();
    $("#cargos_busqueda").hide();
    $("#boton_crear").hide();
    actualizarInputs();

    $("#campo_consulta").change(function (e) {
        valor = $(this).val();
        if (valor == "Roles") {
            $("#cargos_busqueda").hide();
            $("#roles_busqueda").slideDown("slow");
        } else {
            $("#roles_busqueda").hide();
            $("#cargos_busqueda").slideDown("slow");

        }
    });

    $("#form-busqueda").on("click", ".consultar-usuarios", function () {
        var consulta = {};
        var valor = $("#campo_consulta").val();
        if (valor == "Roles") {
            var rolId = $('#roles_busqueda select').val();
            consulta = {
                rol_id: rolId,
            };
            consulta["where"] = $("#campo_consulta option:selected").val();
            $.post(vURL + "/consultar-tipo-personas", consulta, function (data) {
                if (data.success && data.tipoPersonas.length > 0) {
                    $("#boton_crear").hide();
                    $("#tablaTipoPersona").html(data.html);
                    $("#contenedorTabla").show();
                    $("#table_usuarios")
                        .DataTable({
                            responsive: true,
                            pageLength: 20,
                            language: {
                                lengthMenu: "Ver _MENU_ registros por pagina",
                                zeroRecords: "No hay información, lo sentimos.",
                                info: "Mostrando pagina _PAGE_ de _PAGES_",
                                infoEmpty: "No hay registros disponibles",
                                infoFiltered: "(filtered from _MAX_ total records)",
                                search: "Filtrar",
                            },
                            dom: "Bfrtip",
                            buttons: [
                                {
                                    extend: "excel",

                                    title: "Consulta de Usuarios",
                                },
                            ],
                        })
                        .draw();
                } else {
                    $("#tablaTipoPersona").html("");
                    swal({
                        title: "Ocurrió un error.",
                        text: "No se encontraron registros relacionados.",
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success",
                        type: "error",
                    });
                }
            });
        } else {
            var cargoId = $('#cargos_busqueda select').val();
            consulta = {
                cargo_id: cargoId,
            };
            consulta["where"] = $("#campo_consulta option:selected").val();
            $.post(vURL + "/consultar-tipo-personas", consulta, function (data) {
                if (data.success && data.tipoPersonas.length > 0) {
                    $("#boton_crear").show();
                    $("#tablaTipoPersona").html(data.html);
                    $("#contenedorTabla").show();
                    $("#table_usuarios")
                        .DataTable({
                            responsive: true,
                            pageLength: 20,
                            language: {
                                lengthMenu: "Ver _MENU_ registros por pagina",
                                zeroRecords: "No hay información, lo sentimos.",
                                info: "Mostrando pagina _PAGE_ de _PAGES_",
                                infoEmpty: "No hay registros disponibles",
                                infoFiltered: "(filtered from _MAX_ total records)",
                                search: "Filtrar",
                            },
                            dom: "Bfrtip",
                            buttons: [
                                {
                                    extend: "excel",

                                    title: "Consulta de Usuarios",
                                },
                            ],
                        })
                        .draw();
                } else {
                    $("#boton_crear").show();
                    $("#tablaTipoPersona").html("");
                    swal({
                        title: "Ocurrió un error.",
                        text: "No se encontraron registros relacionados.",
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success",
                        type: "error",
                    });
                }
            });
        }



    });

    $("#abrir-form-nuevo-usuario").click(function () {
        var id = $(this).data("id_tipo_persona");
        mostrarModalUsuario(id);
    });

    $("#tablaTipoPersona").on("click", " .actualizarUsuario", function () {
        var id = $(this).data("id_tipo_persona");
        mostrarModalUsuario(id);
    });


    function mostrarModalUsuario(id) {
        // var id = $(this).data('id_usuario');
        //console.log(id);
        var cargoId = $('#cargos_busqueda select').val();
        var datos = {
            id: id,
            cargo_id: cargoId,
        };
        $.post(vURL + "/mostrarFormularioCargos", datos, function (data) {
            $("#contenedorModals").html(data.html);
            $("#modalTipoPersona").modal("show");
            actualizarInputs();
            const { reglasFormulario, mensajesFormulario } = reglasFormularioModal();
            validarForm("#formulario", reglasFormulario, mensajesFormulario);
        });
    }

    $(document).on("click", "#save-users", function () {
        if ($("#formulario").valid()) {
            var form = $("#formulario");
            var datosFormulario = new FormData(form[0]);

            // Obtener el archivo PDF
            var anexoPDF = $('#vc_anexo_soporte_oficio').prop('files')[0];

            // Verificar si se seleccionó un archivo
            if (anexoPDF) {
                datosFormulario.append('vc_anexo_soporte_oficio', anexoPDF);
            }

            // Obtener todos los campos del formulario
            var fomularioCampos = $(form).serializeArray();
            $.each(fomularioCampos, function (index, field) {
                datosFormulario.append(field.name, field.value);
            });
            var url = form.attr("action");
            $.ajax({
                url: url,
                type: 'POST',
                data: datosFormulario,
                processData: false,
                contentType: false,
                success: function (data) {
                    swal({
                        title: data.title,
                        html: data.message,
                        type: data.type,
                    });
                    if (data.type == "success") {
                        $("#modalTipoPersona").modal("hide");
                        $(".consultar-usuarios").trigger("click");
                    }
                },
                error: function () {
                    swal({
                        title: `Ocurrió un error.`,
                        html: `¡Válida los campos nuevamente!`,
                        type: `error`,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success",
                        type: "error",
                    });
                }
            });
        }
    });

    $(document).on("click", ".desactivar-usuario", function () {
        var id = $(this).data("id");
        swal({
            title: "¿Desea desactivar el usuario seleccionado?",
            html: "Los permisos que se le hayan sido asignados serán removidos.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si",
            showCancelButton: true,
            cancelButtonText: "No",
            allowOutsideClick: false,
        })
            .then((result) => {
                if (result.dismiss != "cancel") {
                    var datos = {
                        id: id,
                    };
                    $.post(vURL + "/borrar-tipo-persona", datos, function (data) {
                        swal({
                            title: data.title,
                            text: data.message,
                            type: data.type,
                            confirmButtonText: "OK",
                        })
                            .then((result) => {
                                if (result.value == true) {
                                    $(".consultar-usuarios").trigger("click");
                                }
                            })
                            .catch(swal.noop);
                    });
                } else {
                    //
                }
            })
            .catch(swal.noop);
    });

    function actualizarInputs() {
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd",
            weekStart: 1,
            language: "es",
            autoclose: true,
        });

        $(".selectpicker").selectpicker("refresh");

        $(".btn-switch").bootstrapSwitch({
            onInit: function () {
                var valor = $(this).is(":checked") ? 1 : 0;
                $(this).val(valor);
            },
            onSwitchChange: function () {
                var valor = $(this).is(":checked") ? 1 : 0;
                $(this).val(valor);
            },
        });

        $(".flatpickr").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    }

    function validarForm(id, reglas, mensajes) {
        /* JQUERY VALIDATE*/
        if (id == undefined || $(id).length == 0) {
            return false;
        } else {
            reglas = reglas == undefined ? [] : reglas;
            mensajes = mensajes == undefined ? [] : mensajes;
            $(id).validate().destroy();

            $(id).validate({
                //ignore: [],
                rules: reglas,
                messages: mensajes,
                errorPlacement: function (error, element) {
                    $(element)
                        .closest(".form-group")
                        .find(".help-block")
                        .html(error.html());

                    $(element)
                        .closest("tr")
                        .find(".error-subtotal .help-block")
                        .html(error.html());
                    id_tab = $(element).closest(".tab-pane").attr("id");
                    $(
                        `#contenedor-wizard-actividades .nav-pills a[href="#${id_tab}"]`
                    ).tab("show");
                },
                highlight: function (element) {
                    $(element)
                        .closest(".form-group")
                        .removeClass("has-info")
                        .addClass("has-error");

                    $(element)
                        .closest("tr")
                        .find(".error-subtotal .form-group")
                        .removeClass("has-info")
                        .addClass("has-error");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element)
                        .closest(".form-group")
                        .removeClass("has-error")
                        .addClass("has-info");
                    $(element).closest(".form-group").find(".help-block").html("");

                    $(element)
                        .closest("tr")
                        .find(".error-subtotal .form-group")
                        .removeClass("has-error")
                        .addClass("has-info");
                    $(element).closest("tr").find(".error-subtotal .help-block").html("");
                },
            });
        }
    }


    function reglasFormularioModal() {
        var reglasFormulario = {
            user_id: {
                required: true,
            },
            i_fk_id_area: {
                required: true,
            },
            dt_fecha_posesion: {
                required: true,
                fechaMenor: '#dt_fecha_retiro',
                fechaNoSolapada: true,
            },
            dt_fecha_retiro: {
                required: true,
                fechaMayor: '#dt_fecha_posesion',
            },
        };
        var mensajesFormulario = {
            user_id: {
                required: "Por favor seleccione un usuario",
            },
            i_fk_id_area: {
                required: "Por favor seleccione un área",
            },
            dt_fecha_posesion: {
                required: "Por favor diligencie una fecha",
                fechaMenor: "La fecha de posesión debe ser menor a la fecha de retiro.",
            },
            dt_fecha_retiro: {
                required: "Por favor diligencie una fecha",
                fechaMayor: "La fecha de retiro debe ser mayor a la fecha de posesión.",
            },
            vc_anexo_soporte_oficio: {
                required: "Por favor adjunte un anexo",

            }
        };

        $.validator.addMethod("fechaNoSolapada", function (value, element) {
            var fechasTabla = [];
            var i_pk_id = $("#i_pk_id").val();

            $("#table_usuarios tbody tr").each(function () {
                var fila_i_pk_id = $(this).find(".i_pk_id_hidden").val();

                if (fila_i_pk_id !== i_pk_id) {
                    var fechaInicio = $(this).find(".fecha_posesion_hidden").val() + "T00:00:00";
                    var fechaFin = $(this).find(".fecha_retiro_hidden").val() + "T23:59:59";
                    fechasTabla.push({
                        inicio: new Date(fechaInicio),
                        fin: new Date(fechaFin)
                    });
                }
            });


            // Obtener las fechas del formulario
            var fechaInicioFormulario = new Date($("#dt_fecha_posesion").val() + "T00:00:00");
            var fechaFinFormulario = new Date($("#dt_fecha_retiro").val() + "T23:59:59");

            // Validar que las fechas no se solapen
            for (var i = 0; i < fechasTabla.length; i++) {
                var fechaTabla = fechasTabla[i];
                if (
                    (fechaInicioFormulario >= fechaTabla.inicio && fechaInicioFormulario <= fechaTabla.fin) ||
                    (fechaFinFormulario >= fechaTabla.inicio && fechaFinFormulario <= fechaTabla.fin) ||
                    (fechaInicioFormulario <= fechaTabla.inicio && fechaFinFormulario >= fechaTabla.fin)
                ) {
                    return false; // Las fechas se solapan
                }
            }

            return true; // Las fechas no se solapan
        }, "Las fechas se solapan con las fechas existentes en la tabla");


        $.validator.addMethod('fechaMenor', function (value, element, param) {
            var fechaRetiro = $(param).val();
            return value <= fechaRetiro;
        });

        $.validator.addMethod('fechaMayor', function (value, element, param) {
            var fechaPosesion = $(param).val();
            return value >= fechaPosesion;
        });
        return { reglasFormulario, mensajesFormulario };
    }
});
