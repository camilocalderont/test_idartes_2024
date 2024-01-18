<?php

 $usuario= ['url' => '/usuarios', 'icon' => 'fa fa-user', 'title' => 'Usuarios'] ;
return [

    /*
     * Set the HTML theme for the components
     * like alerts, form fields, menus, etc.
     */
    'theme'  => 'bootstrap',

    /*
     * Set the folder to store the custom templates
     */
    'custom' => 'themes',

    /*
     * Set to false to deactivate the AccessHandler component
     * Doing so the component will run slightly faster but
     * the logged and roles checkers won't be available
     */
    'control_access' => true,

    /*
     * Set to false to deactivate the Translator for the alert and menu
     * components, doing so they will run slightly faster but won't
     * search for Lang keys to translate texts.
     *
     * Note: the FieldBuilder will always use the translator
     * to search for attribute names and other texts,
     * regardless of this configuration value.
     */
    'translate_texts' => true,

    /*
     * Set to true to deactivate HTML5 form validation
     * and test the backend validation
     */
    'novalidate' => false,

    /*
     * Specify abbreviations for the form field attributes
     */
    'abbreviations' => [
        'ph' => 'placeholder',
        'max' => 'maxlength',
        'min' => 'minlength',
        'tpl' => 'template',
        'req' => 'required',
        'auto' => 'autocomplete',
    ],

    /*
     * Set the configuration for each theme
     */
    'themes' => [
        /**
         * Default configuration for the Twitter Bootstrap framework
         */
        'bootstrap' => [
            /*
             * Set a specific HTML template for a field type if the
             * type is not set, the default template will be used
             */
            'field_templates' => [
                // type => template
                'checkbox' => 'checkbox',
                'checkboxes' => 'checkboxes',
                'radios' => 'radios',
            ],
            /*
             * Set the default classes for each field type
             */
            'field_classes' => [
                // type => class or classes
                'default' => 'form-control',
                'color' => 'form-control',
                'select' => 'select2-hidden-accessible form-control pmd-select2',
                'date' => 'form-control',
                'time' => 'form-control',
                'checkbox' => 'md-check',
                'error' => 'help-block-error'
            ],
        ]
    ],

    /*
     * Set the custom menu for all pages
     */



    'sidebar' => [
        'inicio' => ['exact' => true,  'url' => '/', 'icon' => 'icon-home','access' => true],
        'Usuario' => [
            'submenu' => [
                
                'GestionUsuario' => [
                    'exact' => true,  
                    'url' => '/gestionar-usuarios',
                    'icon' => 'fa fa-users',
                    'title' => 'Gestion de usuarios',
                    'access' => true,
                    'id'=>1,
                    'secure' => 'true'
                ]
                /*'GestionCargos' => [
                    'exact' => true,  
                    'url' => '/cargos',
                    'icon' => 'fa fa-user-plus',
                    'title' => 'Gestión de Cargos',
                    'access' => true,
                    'id'=>,
                    'secure' => 'true'
                ]*/
            ],
            'title' => 'Gestión de Usuarios',
            'icon' => 'icon-settings',
            'access' => true
        ],
        'Configuracion' => [
            'submenu' => [
                
                'GestionModulo' => [
                    'exact' => true,  
                    'url' => '/modulo/',
                    'icon' => 'fa fa-check-circle-o',
                    'title' => 'Gestion de Módulos',
                    'access' => true,
                    'id'=>5,
                    'secure' => 'true'
                ],
                'GestionActividades' => [
                    'exact' => true,  
                    'url' => '/actividad',
                    'icon' => 'fa fa-th-list',
                    'title' => 'Gestión de Actividades',
                    'access' => true,
                    'id'=>6,
                    'secure' => 'true'
                ],
                'GestionTipoPersona' => [
                    'exact' => true,  
                    'url' => '/perfiles',
                    'icon' => 'fa fa-th-list',
                    'title' => 'Gestión Tipo Persona',
                    'access' => true,
                    'id'=>7,
                    'secure' => 'true'
                ],                 
                'GestionParametros' => [
                    'exact' => true,  
                    'url' => '/parametro',
                    'icon' => 'fa fa-th-list',
                    'title' => 'Gestión de Parámetros',
                    'access' => true,
                    'id'=>11,
                    'secure' => 'true'
                ],
                'AsignacionTipoActividad' => [
                    'exact' => true,  
                    'url' => '/tipo-actividad', 
                    'icon' => 'fa fa-th-list',
                    'title' => 'Vincular Tipo Persona - Actividad',
                    'access' => true,
                    'id'=>8,
                    'secure' => 'true'
                ],
                'AsignacionTipopersonaUsuario' => [
                    'exact' => true,  
                    'url' => '/usuario-actividad', 
                    'icon' => 'fa fa-th-list',
                    'title' => 'Vincular Tipo persona - usuario',
                    'access' => true,
                    'id'=>10,
                    'secure' => 'true'
                ],
                'AsignacionUsuarioGrupoTrabajo' => [
                    'exact' => true,  
                    'url' => '/grupos-trabajo', 
                    'icon' => 'fa fa-users',
                    'title' => 'Asociación Usuarios - Grupos de Trabajo',
                    'access' => true,
                    'id'=>10,
                    'secure' => 'true'
                ]                

            ],
            'title' => 'Configuración',
            'icon' => 'icon-settings',
            'access' => true
        ],

        'Auditoria' => [
            'submenu' => [
                'Auditoria' => [
                    'exact' => true,  
                    'url' => '/auditoria',
                    'icon' => 'fa fa-th-list',
                    'title' => 'Auditoría',
                    'access' => true,
                    'id'=>9,
                    'secure' => 'true'
                ]
            ],
            'title' => 'Auditoria',
            'icon' => 'icon-lock',
            'access' => true
        ]

       

    ],

];
