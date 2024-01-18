$(function() {
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

        tour.addStep({
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>En esta sección podrá gestionar los accesos a las actividades de un módulo para un tipo de usuario.</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(4)',
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
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>Seleccione el tipo de usuario al cual desea gestionar los accesos a las actividades.</p>',
            attachTo: {
                element: '.form-body .row .form-group:nth-child(1)',
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
                    text: 'Siguiente',
                    action: tour.next
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>Seleccione el módulo de interés para consultar las actividades disponibles.</p>',
            attachTo: {
                element: '.form-body .row .form-group:nth-child(2)',
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
                    text: 'Siguiente',
                    action: tour.next
                }
            ],
            id: 'step_2',
        });

        tour.addStep({
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>Haga click en el botón <strong>GENERAR BUSQUEDA</strong> para traer los resultados de la consulta.</p>',
            attachTo: {
                element: '#btn_edit',
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
                        $('#guia').removeClass('hide');
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_3',
        });

        tour.addStep({
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>Encontrará información como:<br><br>'+
                '<strong>ID:</strong><br>Identificador numérico de la actividad<br><br>'+
                '<strong>Actividad:</strong><br>Nombre y/o descripción de la actividad<br><br>'+
                '<strong>Ruta:</strong><br>Ruta donde se realiza la actividad<br><br>'+
            '</p>',
            attachTo: {
                element: '#TablaTipoActividad tbody tr:nth-child(1)',
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
                        //$('#menu_501-Configuracion a').click();
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_4',
        });

        tour.addStep({
            title: 'Vincular actividades a <br>tipos de persona',
            text: '<p>Y dispondrá de las siguientes acciones:<br><br>'+
                '<label class="mt-checkbox"> <input type="checkbox"><span></span> </label> Click para habilitar acceso a la actividad<br>'+
                '<label class="mt-checkbox"> <input type="checkbox" checked><span></span> </label> Click para inhabilitar acceso a la actividad<br>'+
            '</p>',
            attachTo: {
                element: '#TablaTipoActividad tbody tr:nth-child(1) td:nth-child(4)',
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
            id: 'step_6',
        });

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
});