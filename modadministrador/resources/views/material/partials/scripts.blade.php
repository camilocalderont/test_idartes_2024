<!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
{{-- BEGIN CORE PLUGINS --}}
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/pages/scripts/portlet-draggable.min.js') }}" type="text/javascript"></script>
<!-- SweetAlert Scripts -->
<script src="{{ asset('bower_components/sweetalert2/dist/sweetalert2.all.min.js') }}" type="text/javascript"></script>
{{-- END CORE PLUGINS --}}
{{-- BEGIN THEME GLOBAL SCRIPTS --}}
<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
{{-- END THEME GLOBAL SCRIPTS --}}
{{-- BEGIN PAGE LEVEL PLUGINS --}}
@stack('plugins')
{{-- END PAGE LEVEL PLUGINS --}}
{{-- BEGIN THEME LAYOUT SCRIPTS --}}
<script src="{{ asset('assets/apps/scripts/pnglib.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/apps/scripts/indenticon.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
{{-- END THEME LAYOUT SCRIPTS --}}
<script>
    $(function()
    {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    });

    @if(Auth::check())
      
        @if(auth()->user()->vc_perfil_pic == null)
            var avatar = new Identicon("{{ substr(hash('md5', auth()->user()->full_name), 0, 15) }}", 200).toString();
            var profilePic = 'data:image/png;base64,'+ avatar;
        @else
            var profilePic = "{{ asset(auth()->user()->vc_perfil_pic) }}";
        @endif
         var myProfilePic = function () {
            $('.user-profile-pic').attr('src', profilePic);
        };
    myProfilePic();
    @endif
</script>