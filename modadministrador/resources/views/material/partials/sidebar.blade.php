<div class="page-sidebar-wrapper">
    {{-- BEGIN SIDEBAR --}}
    <div class="page-sidebar navbar-collapse collapse">
        {{-- BEGIN SIDEBAR MENU --}}      

        {!! Menu::make( $_SESSION['menu'][config('usuarios.modulo')] )->setActiveClass('start active open') !!}
        {{-- {!! Menu::make( $_SESSION['Usuario']['menu'])->setActiveClass('start active open') !!}  --}}
        {{-- BEGIN SIDEBAR MENU --}}
    </div>
    {{-- BEGIN SIDEBAR MENU --}}
</div>