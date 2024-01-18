{{-- BEGIN GLOBAL MANDATORY STYLES --}}
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
{{-- END GLOBAL MANDATORY STYLES --}}
{{-- BEGIN PAGE LEVEL PLUGINS --}}
@stack('styles')
{{-- END PAGE LEVEL PLUGINS --}}
{{-- BEGIN THEME GLOBAL STYLES --}}
<link href="{{ asset('assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
{{-- END THEME GLOBAL STYLES --}}
{{-- BEGIN THEME LAYOUT STYLES --}}
<link href="{{ asset('assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/general.css?v=2022-08-18') }}" rel="stylesheet" type="text/css" />
{{-- END THEME LAYOUT STYLES --}}
<link rel="shortcut icon" href="{{ asset('assets/pages/img/login/icono.ico') }}" />