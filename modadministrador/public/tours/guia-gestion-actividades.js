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
            title: 'Gestión de actividades',
            text: '<p>Aquí podrá gestionar el acceso a las diferentes secciones que componen los módulos del sistema.</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(2)',
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
            title: 'Gestión de actividades',
            text: '<p>Para crear un actividad diligencie los campos del formulario<br><br>'+
                '<strong>Actividad:</strong><br>Nombre de la actividad<br><br>'+
                '<strong>¿A qué módulo pertenece?:</strong><br>Seleccione el módulo al que pertenece<br><br>'+
                '<strong>Descripción:</strong><br>Detalles de las actividades que se llevan a cabo en el vínculo<br><br>'+
                '<strong>Redirección:</strong><br>URL de destino<br><br>'+
                '<strong>Imagen:</strong><br>Icono representativo de la actividad<br><br>'+
                '<strong>Anidar actividad en:</strong><br>Seleccione si se encuentra anidada dentro de otra actividad<br><br><br>'+
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
            title: 'Gestión de actividades',
            text: '<p>Aquí podrá consultar el listado de actividades creadas.</p>',
            attachTo: {
                element: '#tbl_actividades',
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
            title: 'Gestión de actividades',
            text: '<p>Encontrará información como:<br><br>'+
                    '<strong>Id:</strong><br>Identificador<br><br>'+
                    '<strong>Módulo:</strong><br>Nombre del módulo<br><br>'+
                    '<strong>Actividad:</strong><br>Nombre de la actividad<br><br>'+
                    '<strong>Padre:</strong><br>Nombre de la actividad padre en caso de estar anidada dentro de otra<br><br>'+
                    '<strong>Descripción:</strong><br>Detalles de las actividades que se llevan a cabo en el vínculo<br><br>'+
                    '<strong>Redirección:</strong><br>URL de destino<br><br>'+
                    '<strong>Imagen:</strong><br>Icono representativo<br><br>'+
                    '<strong>Estado:</strong><br>Indicador de actividad habilitada o inhabilitada<br><br>'+
                '</p>',
            attachTo: {
                element: '#tbl_actividades tbody tr:nth-child(1)',
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
            title: 'Gestión de actividades',
            text: '<p>Y dispondra de las siguientes acciones:<br><br>'+
                '<button class="btn btn-sm blue fa fa-pencil"></button> Editar la información de la actividad <br>'+
            '</p>',
            attachTo: {
                element: '#tbl_actividades tbody tr:nth-child(1) td:nth-child(9)',
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