$(function() {
  console.log();
  function configurar_guia_principal() {
      let tour = new Shepherd.Tour({
          defaultStepOptions: {
              cancelIcon: {
                  enabled: true
              },
              classes: 'shadow-md bg-purple-dark',
              scrollTo: { behavior: 'smooth', block: 'center' }
          },
          useModalOverlay: true
      });

      if($('input[name="hd_tipo"]').val() == 'Perfil'){
        tour.addStep({
            title: 'Gestión tipo persona',
            text: '<p>Aquí podrá gestionar los perfiles o roles asociados a los usuarios, los cuales podrán ser articulados a los diferentes módulos del sistema.</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(3)',
                on: 'left'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                text: 'Siguiente',
                action: tour.next
                }
            ],
            id: 'step_0',
        });

        tour.addStep({
            title: 'Gestión tipo persona',
            text: '<p>Para asignar un módulo a un tipo persona diligencie los campos del formulario<br><br>'+
                '<strong>Perfil de usuario:</strong><br>Seleccione el perfil que desea gestionar<br><br>'+
                '<strong>¿A qué módulo pertenece?:</strong><br>Seleccione el módulo al que pertenece<br><br>'+
                '<strong>¿Activo?:</strong><br>Seleccione si desea que se active o no el perfil  <br><br>'+
                'y haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: '.form-body',
                on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Gestión tipo persona',
            text: '<p>Aquí podrá consultar el listado de perfiles asignados.</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper',
                on: 'top'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_2',
        });

        tour.addStep({
            title: 'Gestión tipo persona',
            text: '<p>Encontrará información como:<br><br>'+
                    '<strong>Perfil (Rol):</strong><br>Nombre del perfil<br><br>'+
                    '<strong>Módulo:</strong><br>Nombre del módulo<br><br>'+
                    '<strong>Estado:</strong><br>Indicador de perfil habilitado o inhabilitado<br><br>'+
                '</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper tbody tr:nth-child(1)',
                on: 'top'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_3',
        });

        tour.addStep({
            title: 'Gestión tipo persona',
            text: '<p>Y dispondra de las siguientes acciones:<br><br>'+
                '<button class="btn btn-sm blue fa fa-pencil"></button> Editar la información del perfil <br>'+
            '</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper tbody tr:nth-child(1) td:nth-child(4)',
                on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        window.location.reload(true);                        
                        return this.complete();
                    },
                    text: 'Terminar'
                }
            ],
            id: 'step_4',
        });
      }else{
        tour.addStep({
            title: 'Gestión de cargos',
            text: '<p>Aquí podrá gestionar los cargos asociados al perfil de usuario.</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(8)',
                on: 'left'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                text: 'Siguiente',
                action: tour.next
                }
            ],
            id: 'step_0',
        });

        tour.addStep({
            title: 'Gestión de cargos',
            text: '<p>Para asignar un módulo a un perfil diligencie los campos del formulario<br><br>'+
                '<strong>Perfil de usuario:</strong><br>Seleccione el perfil que desea gestionar<br><br>'+
                '<strong>¿A qué módulo pertenece?:</strong><br>Seleccione el módulo al que pertenece<br><br>'+
                '<strong>¿Activo?:</strong><br>Seleccione si desea que se active o no el perfil  <br><br>'+
                'y haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: '.form-body',
                on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Gestión de cargos',
            text: '<p>Aquí podrá consultar el listado de cargos asignados.</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper',
                on: 'top'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_2',
        });

        tour.addStep({
            title: 'Gestión de cargos',
            text: '<p>Encontrará información como:<br><br>'+
                    '<strong>Cargo:</strong><br>Nombre del cargo<br><br>'+
                    '<strong>Módulo:</strong><br>Nombre del módulo<br><br>'+
                    '<strong>Estado:</strong><br>Indicador de perfil habilitado o inhabilitado<br><br>'+
                '</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper tbody tr:nth-child(1)',
                on: 'top'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_3',
        });

        tour.addStep({
            title: 'Gestión de cargos',
            text: '<p>Y dispondra de las siguientes acciones:<br><br>'+
                '<button class="btn btn-sm blue fa fa-pencil"></button> Editar la información del cargo <br>'+
            '</p>',
            attachTo: {
                element: '#tbl_tipo_wrapper tbody tr:nth-child(1) td:nth-child(4)',
                on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
                {
                    action() {
                        return this.back();
                    },
                    classes: 'shepherd-button-secondary',
                    text: 'Atras'
                },
                {
                    action() {
                        window.location.reload(true);                        
                        return this.complete();
                    },
                    text: 'Terminar'
                }
            ],
            id: 'step_4',
        });
      }
      
        tour.on('complete', function(e) {
            window.location.reload(true);
        });

        tour.on('cancel', function(e) {
            window.location.reload(true);
        });
        
        tour.on('hide', function(e) {
            window.location.reload(true);
        });

      return tour;
  }

  const tour_principal = configurar_guia_principal();
  $('#manual').on('click', function(e) {
      e.preventDefault();
      tour_principal.start();
  });
})