<div class="page-bar">
    <ul class="page-breadcrumb">
        @if(count(Request::segments()) == 0 && empty(Request::segments()))
            <li>
                <i class="icon-directions"></i>
                <a href="javascript:;">Inicio</a>
            </li>
        @else
            @for($i = 0; $i <= count(Request::segments()); $i++)
                <li>
                    @if($i == 1)
                        <i class="icon-directions"></i>
                        <a href="javascript:;">{{ mb_convert_case( str_replace('-', ' ', Request::segment($i) ), MB_CASE_TITLE, "UTF-8" ) }}</a>
                        @if($i < count(Request::segments()) & $i > 0)
                            <i class="fa fa-angle-right"></i>
                        @endif
                    @else
                        <a href="">{{ mb_convert_case( str_replace('-', ' ', Request::segment($i) ), MB_CASE_TITLE, "UTF-8" ) }}</a>
                        @if($i < count(Request::segments()) & $i > 0)
                            <i class="fa fa-angle-right"></i>
                        @endif
                    @endif
                </li>
            @endfor
        @endif
    </ul>
</div>