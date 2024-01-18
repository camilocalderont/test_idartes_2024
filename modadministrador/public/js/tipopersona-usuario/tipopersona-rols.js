jQuery(document).ready(function () {
  var vURL = $('#main').data('url');
  $("#boton_crear").hide();
  actualizarInputs();



  $("#form-busqueda").on("click", "#consultar-usuarios", function () {
    if ($('#user_id').val()) {
      var valor = $("#user_id").val();
      var datos = {
        user_id: valor
      };
      $.post(vURL + "/consultar-tipo-persona-rols", datos, function (data) {
        if (data.success && data.roles.length > 0) {
          $("#boton_crear").show();
          $("#tablaTipoRol").html(data.html);
          $("#contenedorTabla").show();
          $("#tabla_tipoRol")
            .DataTable({
              responsive: true,
              pageLength: 100,
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
          $("#tablaTipoRol").html("");
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

  $("#abrir-form-nuevo-usuario").click(function () {
    var id = $(this).data("id_tipo_persona");
    mostrarModalUsuario(id);
  });

  $("#tablaTipoRol").on("click", " .actualizarUsuario", function () {
    var id = $(this).data("id_tipo_persona");
    mostrarModalUsuario(id);
  });

  function mostrarModalUsuario(id) {
    // var id = $(this).data('id_usuario');
    //console.log(id);
    var user_id = $("#user_id").val();
    var datos = {
      id: id,
      user_id: user_id,
    };
    $.post(vURL + "/mostrarFormularioRoles", datos, function (data) {
      $("#contenedorModals").html(data.html);
      $("#formularioRoles").modal("show");
      actualizarInputs();
      const { reglasFormulario, mensajesFormulario } = reglasFormularioModal();
      validarForm("#formulario", reglasFormulario, mensajesFormulario);
    });
  }

  $(document).on("click", "#save-users", function () {
    //aqui una validacion de que el campo tipo este lleno
    var tipo_id = $("#tipo_id").val();
    $.post(vURL + "/validar-roles", { tipo_id: tipo_id }, function (data) {
      if (data !== 0) {
        if ($("#formulario").valid()) {
          var form = $("#formulario"); // aqui se esta guardando el formulario #formulario
          var url = form.attr("action"); //aqui se esta guardando por que ruta se va a ir
          var datos = form.serializeArray(); //aqui guarda todos los datos del formulario
          $.post(url, datos, function (data) {
            swal({
              title: data.title,
              html: data.message,
              type: data.type,
            });
            if (data.type == "success") {
              $("#formularioRoles").modal("hide");
              $("#consultar-usuarios").trigger("click");
            }
          });
        } else {
          swal({
            title: `Ocurrió un error.`,
            html: `¡Válida los campos nuevamente!`,
            type: `error`,
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success",
            type: "error",
          });
        }
      } else {
        var form = $("#formulario"); // aqui se esta guardando el formulario #formulario
        var url = form.attr("action"); //aqui se esta guardando por que ruta se va a ir
        var datos = form.serializeArray(); //aqui guarda todos los datos del formulario
        $.post(url, datos, function (data) {
          swal({
            title: data.title,
            html: data.message,
            type: data.type,
          });
          if (data.type == "success") {
            $("#formularioRoles").modal("hide");
            $("#consultar-usuarios").trigger("click");
          }
        });
      }
    });


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
          $.post(vURL + "/borrar-tipo-persona-rols", datos, function (data) {
            swal({
              title: data.title,
              text: data.message,
              type: data.type,
              confirmButtonText: "OK",
            })
              .then((result) => {
                if (result.value == true) {
                  $("#consultar-usuarios").trigger("click");
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
      tipo_id: {
        required: true,
      },
      i_fk_id_area: {
        required: true,
      },
      dt_fecha_posesion: {
        required: true,
        fechaMenor: '#dt_fecha_retiro',
      },
      dt_fecha_retiro: {
        required: true,
        fechaMayor: '#dt_fecha_posesion',
      },
      user_id: {
        required: true,
      },
    };

    var mensajesFormulario = {
      tipo_id: {
        required: "Por favor seleccione un rol",
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
      user_id: {
        required: "Por favor seleccione un usuario",
      },
    };

    $.validator.addMethod('fechaMenor', function (value, element, param) {
      var fechaRetiro = $(param).val();
      return value <= fechaRetiro;
    });

    $.validator.addMethod('fechaMayor', function (value, element, param) {
      var fechaPosesion = $(param).val();
      return value >= fechaPosesion;
    });

    return { reglasFormulario, mensajesFormulario }; if (this.optional(element)) {
      return true; // El elemento es opcional, se considera válido
    }
  }

  function reglasFormularioTipo_id(){
    var reglasFormularioTipo_id = {
      tipo_id: {
        required: true,
      },
    };

    var reglasFormularioTipo_id = {
      tipo_id: {
        required: "Por favor seleccione un rol",
      },
    };
  }

});