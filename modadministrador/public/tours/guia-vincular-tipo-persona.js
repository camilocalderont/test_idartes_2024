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

        if($('input[name="hd_tipo"]').val() == 'Rol'){

            tour.addStep({
                title: 'Vincular tipo persona',
                text: '<p>En esta sección podrá asignar diferentes tipos de persona a un usuario.</p>',
                attachTo: {
                    element: '#menu_501-Configuracion .sub-menu li:nth-child(5)',
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
                title: 'Vincular tipo persona',
                text: '<p>Seleccione un usuario para gestionar sus tipos de persona.</p>',
                attachTo: {
                    element: 'button[data-id="user_id"]',
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
                title: 'Vincular tipo persona',
                text: '<p>Haga click en el botón <strong>VER PERFILES</strong> para traer los resultados de la consulta.</p>',
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
                id: 'step_2',
            });

            tour.addStep({
                title: 'Vincular tipo persona',
                text: '<p>Encontrará información como:<br><br>'+
                    '<strong>ID:</strong><br>Identificador numérico del tipo de persona<br><br>'+
                    '<strong>Tipo Persona (Rol):</strong><br>Nombre y/o descripción del tipo de persona<br><br>'+
                    '<strong>Módulo:</strong><br>Módulo al que esta asociado el tipo de persona<br><br>'+
                '</p>',
                attachTo: {
                    element: '#TablaTipopersonaUsuario tbody tr:nth-child(1)',
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
                title: 'Vincular tipo persona',
                text: '<p>Y dispondrá de las siguientes acciones:<br><br>'+
                    '<label class="mt-checkbox"> <input type="checkbox"><span></span> </label> Click para activar tipo de persona al usuario<br>'+
                    '<label class="mt-checkbox"> <input type="checkbox" checked><span></span> </label> Click para remover tipo de persona al usuario<br>'+
                '</p>',
                attachTo: {
                    element: '#TablaTipopersonaUsuario tbody tr:nth-child(1) td:nth-child(4)',
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

        }else{
            tour.addStep({
                title: 'Asignación cargo a usuario',
                text: '<p>En esta sección podrá asignar diferentes cargos a un usuario.</p>',
                attachTo: {
                    element: '#menu_501-Configuracion .sub-menu li:nth-child(7)',
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
                title: 'Asignación cargo a usuario',
                text: '<p>Seleccione un usuario para gestionar sus cargos.</p>',
                attachTo: {
                    element: 'button[data-id="user_id"]',
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
                title: 'Asignación cargo a usuario',
                text: '<p>Haga click en el botón <strong>VER PERFILES</strong> para traer los resultados de la consulta.</p>',
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
                id: 'step_2',
            });

            tour.addStep({
                title: 'Asignación cargo a usuario',
                text: '<p>Encontrará información como:<br><br>'+
                    '<strong>ID:</strong><br>Identificador numérico del tipo de persona<br><br>'+
                    '<strong>Cargo:</strong><br>Nombre y/o descripción del cargo<br><br>'+
                    '<strong>Módulo:</strong><br>Módulo al que esta asociado el tipo de persona<br><br>'+
                '</p>',
                attachTo: {
                    element: '#TablaTipopersonaUsuario tbody tr:nth-child(1)',
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
                title: 'Asignación cargo a usuario',
                text: '<p>Y dispondrá de las siguientes acciones:<br><br>'+
                    '<label class="mt-checkbox"> <input type="checkbox"><span></span> </label> Click para activar un cargo al usuario<br>'+
                    '<label class="mt-checkbox"> <input type="checkbox" checked><span></span> </label> Click para remover el cargo al usuario<br>'+
                '</p>',
                attachTo: {
                    element: '#TablaTipopersonaUsuario tbody tr:nth-child(1) td:nth-child(4)',
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