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
            title: 'Gestión de parámetros',
            text: '<p>En esta sección podrá gestionar los valores de los diferentes grupos de parámetros que existen en el sistema como los tipos de identificación, ciudades, etnias entre otros.</p>',
            attachTo: {
                element: '#menu_501-Configuracion .sub-menu li:nth-child(6)',
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
            title: 'Gestión de parámetros',
            text: '<p>Seleccione el parámetro que desea gestionar.</p>',
            attachTo: {
                element: 'button[data-id="i_fk_id_parametro"]',
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
                        $('#i_fk_id_parametro').val(1).trigger('change');
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_1',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Haga click en el botón buscar para conocer los valores registrados para este parametro.</p>',
            attachTo: {
                element: '#obtener-parametros',
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
                        var _this = this;
                        var get = $('#obtener-parametros').triggerHandler('click');
                        get.done(function(e) {
                            return _this.next();
                        });
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_2',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Encontrará información como:<br><br>'+
                '<strong>ID:</strong><br>Identificador numérico del valor<br><br>'+
                '<strong>Nombre:</strong><br>Nombre y/o descripción del valor<br><br>'+
                '<strong>Padre:</strong><br>Nombre y/o descripción de algun valor padre<br><br>'+
                '<strong>Estado:</strong><br><button class="btn btn-xs green fa fa-thumbs-up"></button> Activo <button class="btn btn-xs red fa fa-thumbs-down"></button> Inactivo<br><br>'+
            '</p>',
            attachTo: {
                element: '#table_parametros tbody tr:nth-child(1)',
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
            id: 'step_3',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Y dispondrá de las siguientes acciones:<br><br>'+
                '<button class="btn btn-xs blue fa fa-pencil"></button> Editar los valores del parámetro<br>'+
            '</p>',
            attachTo: {
                element: '#table_parametros tbody tr:nth-child(1) td:nth-child(5)',
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
            title: 'Gestión de parámetros',
            text: '<p>Para agregar un nuevo valor al parámetro hacer click en el botón: <strong>+</strong><br><br>'+
                'A continuación, se desplegará una ventana con el formulario para registrar un nuevo valor<br>'+
            '</p>',
            attachTo: {
                element: '#crear-parametro-detalle',
                on: 'left'
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
                        var _this = this;
                        $('#crear-parametro-detalle').trigger('click');
                        setTimeout(() => {
                            return this.next();
                        }, 750)
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_5',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Para registrar un valor, complete la información solicitada y luego haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: '#formulario-parametro-detalle',
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
                        $('#formulario-parametro-detalle').modal('hide');
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_6',
        });
        
        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Para crear un nuevo grupo de parámetros haga click en el botón: <strong>+</strong></p>',
            attachTo: {
                element: '#crear-parametro',
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
                        $('#crear-parametro').trigger('click');
                        setTimeout(() => {
                            return this.next();
                        }, 750)
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_7',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Para registrar un parámetro, complete la información solicitada y luego haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: '#formulario-parametro',
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
                        $('#formulario-parametro').modal('hide');
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_8',
        });
        
        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Para modificar el parámetro actual haga click en el botón: <strong><i class="fa fa-pencil"></i></strong></p>',
            attachTo: {
                element: '#modificar-parametro',
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
                        var _this = this;
                        var get = $('#modificar-parametro').triggerHandler('click');
                        
                        get.done(function() {
                            console.log('done');
                            return _this.next();
                        })
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_9',
        });

        tour.addStep({
            title: 'Gestión de parámetros',
            text: '<p>Para modificar un parámetro, complete la información solicitada y luego haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: '#modal-modificar-parametro',
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
                        $('#modal-modificar-parametro').modal('hide');
                        return this.complete();
                    },
                    text: 'Terminar'
                }
            ],
            id: 'step_10',
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