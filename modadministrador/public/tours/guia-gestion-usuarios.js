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
            title: 'Gestión de usuarios',
            text: '<p>En esta sección podrá crear y editar los registros de las personas que deben gestionar los diferentes módulos del sistema.</p>',
            attachTo: {
                element: '.sub-menu li:nth-child(1)',
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
        })

        if($('#link-consultar').length)
        {
            tour.addStep({
                title: 'Consultar',
                text: '<p>Aquí podrá consultar los usuarios asociados a las diferentes áreas de la entidad.</p>',
                attachTo: {
                    element: '#link-consultar',
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
                id: 'step_1',
            });

            tour.addStep({
                title: 'Consultar',
                text: '<p>Para visualizar el listado de las personas que pertenecen a un área de la entidad. Seleccione el área y luego haga click en el botón <strong>CONSULTAR</strong>. Aguarde mientras se cargan los resultados</p>',
                attachTo: {
                    element: '.step_1',
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
                            var val = $('#i_fk_id_area option:nth-child(1)').val();
                            $('#i_fk_id_area').val('12625').trigger('change');
                            var post = $('#consultar-usuarios-area').triggerHandler('click');

                            post.done(function(e) {
                                return _this.next();
                            })
                        },
                        text: 'Siguiente'
                    }
                ],
                id: 'step_2',
            });
        }

        tour.addStep({
            title: 'Consultar',
            text: '<p>Aquí podrá consultar el listado de personas asociadas al área.</p>',
            attachTo: {
                element: '#contenedorTabla',
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
                        //$('#menu_501-Configuracion a').click();
                        return this.next();
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_3',
        });

        tour.addStep({
            title: 'Consultar',
            text: '<p>Encontrará información como:<br><br>'+
                '<strong>Estado del usuario:</strong><br><span class="label label-success"><span class="badge badge-success">1</span>Activo</span> o <span class="label label-danger"><span class="badge badge-danger">0</span>Inactivo</span> <br><br>'+
                '<strong>Área:</strong><br>Área asociada al usuario<br><br>'+
                '<strong>Documento:</strong><br>Número de identificación del usuario<br><br>'+
                '<strong>Nombre:</strong><br>Nombres y apellidos del usuario<br><br>'+
                '<strong>Fecha de nacimiento:</strong><br>Año mes y día de nacimiento del usuario<br><br>'+
                '<strong>Email:</strong><br>Correo institucional o de contacto del usuario<br><br>'+
                '<strong>Teléfono:</strong><br>Teléfono o celular de contacto del usuario<br><br>'+
            '</p>',
            attachTo: {
                element: '#table_usuarios tbody tr',
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
            title: 'Consultar',
            text: '<p>Y dispondrá de las siguientes acciones:<br><br>'+
                '<button class="btn btn-sm blue fa fa-pencil"></button> Editar la información del usuario<br>'+
                '<button class="btn btn-sm green fa fa-key"></button> Restablecer la contraseña del usuario<br>'+
                '<button class="btn btn-sm red fa fa-arrow-down"></button> Desactivar el acceso del usuario'+
            '</p>',
            attachTo: {
                element: '#table_usuarios tbody tr td:nth-child(7)',
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
            id: 'step_6',
        });

        tour.addStep({
            title: 'Registrar ó modificar',
            text: '<p>Aquí se visualizará una ventana modal con los datos para registrar o modificar un usuario</p>',
            attachTo: {
                element: '#link-registrar',
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
                        $('#link-registrar').click();
                        setTimeout(() => {
                            return this.next();
                        }, 750);
                    },
                    text: 'Siguiente'
                }
            ],
            id: 'step_6',
        });

        tour.addStep({
            title: 'Registrar ó modificar',
            text: '<p>Para registrar o modificar un usuario complete la información solicitada y luego haga click en el botón <strong>GUARDAR</strong></p>',
            attachTo: {
                element: $('#modalCrear').length ? '#modalCrear' : '#modalActualizar',
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
            id: 'step_7',
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