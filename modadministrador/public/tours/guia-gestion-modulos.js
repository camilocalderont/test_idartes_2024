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
            title: 'Gestión de módulos',
            text: '<p>Aquí podrá crear y modificar los módulos que componen el sistema</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(1)',
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
            title: 'Gestión de módulos',
            text: '<p>Para crear un módulo haga click en el boton <i class="fa fa-plus"></i></p>',
            attachTo: {
                element: '.t-add',
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
                        $('.t-add').trigger('click');
                        setTimeout(() => {
                            return this.next();
                        }, 750);
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Gestión de módulos',
            text: '<p>Diligencie todos los campos y haga click en el botón <strong>CREAR</strong> para guardar un nuevo módulo, de lo contrario haga click en el botón <strong>CANCELAR</strong></p>',
            attachTo: {
                element: '#create-school',
                on: 'right'
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
                        $('#create-school #btn_cancel_create').trigger('click');
                        //$('#menu_501-Configuracion a').click();                            
                        setTimeout(() => {
                            return this.next();
                        }, 750);
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_2',
        });

        tour.addStep({
            title: 'Gestión de módulos',
            text: '<p>Aquí podrá consultar el listado de módulos creados.</p>',
            attachTo: {
                element: '#modulo-table',
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
            title: 'Gestión de módulos',
            text: '<p>Encontrará información como:<br><br>'+
                '<strong>#:</strong><br>Identificador<br><br>'+
                '<strong>Módulo:</strong><br>Nombre del módulo<br><br>'+
                '<strong>Redirección:</strong><br>URL de destino<br><br>'+
                '<strong>Imagen:</strong><br>Icono representativo<br><br>'+
                '<strong>Estado:</strong><br>Estado o disponibilidad del módulo (activo o inactivo)<br><br>'+
            '</p>',
            attachTo: {
                element: '#modulo-table tbody tr:nth-child(1)',
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
            id: 'step_4',
        });

        tour.addStep({
            title: 'Gestión de módulos',
            text: '<p>Y dispondra de las siguientes acciones:<br><br>'+
                '<button class="btn btn-sm yellow fa fa-pencil"></button> Editar la información del módulo <br>'+
            '</p>',
            attachTo: {
                element: '#modulo-table tbody tr:nth-child(1) td:nth-child(6)',
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
                        $('#modulo-table tbody tr:nth-child(1) td:nth-child(6) a').trigger('click');
                        setTimeout(() => {
                            return this.next();
                        }, 750);
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_5',
        });

        tour.addStep({
            title: 'Gestión de módulos',
            text: '<p>Diligencie todos los campos y haga click en el botón <strong>ACTUALIZAR</strong> para guardar los cambios del módulo, de lo contrario haga click en el botón <strong>CANCELAR</strong></p>',
            attachTo: {
                element: '#edit-school',
                on: 'right'
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
})