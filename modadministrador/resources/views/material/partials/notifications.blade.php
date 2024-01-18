
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        @if(count( auth()->user()->unreadNotifications ) > 0)
            <span class="badge badge-default"> {{ count( auth()->user()->unreadNotifications ) }} </span>
        @endif
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3><span class="bold">{{ count( auth()->user()->unreadNotifications ) }} </span> @if(count( auth()->user()->unreadNotifications ) == 1 ) notificación pendiente @else notificaciones pendientes @endif</h3>
            <a href="{{ route('notificaciones') }}">ver todas</a>
        </li>
        <li>
            <ul class="dropdown-menu-list scroller" style="height: 275px; overflow-y: scroll;" data-handle-color="#637283">
                @foreach(auth()->user()->unreadNotifications as $notification)
                    <li>
                        <a href="{{ route('read.notification.get', ['notification' => $notification->id, 'sede' => $notification->data['visit_id'], 'type' => $notification->data['type']]) }}" class=" @if($notification->read_at === null) bold @endif" data-id="{{ $notification->id }}">
                            <span class="photo">
                                <img alt="{{ $notification->data['user'] }}" class="img-circle" src="{{ Avatar::create($notification->data['user'])->toBase64() }}" />
                            </span>
                            <span class="subject">
                                <span class="from"> {{ $notification->data['user'] }} </span>
                                <span class="time"> {{ $notification->created_at->diffForHumans() }} </span>
                            </span>
                            <span class="message"> <i class="{{ $notification->data['icon'] }}"></i> {{ $notification->data['message'] }} </span>
                            <span class="message"> a {{ $notification->data['visit_name'] }} # {{ $notification->data['visit_id'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="external">
            <h3><a href="javascript:;" id="read-all-notifications"> Marcar <span class="bold">{{ count( auth()->user()->unreadNotifications ) }} </span> @if(count( auth()->user()->unreadNotifications ) == 1 ) notificación como leida @else notificaciones como leidas @endif</a> </h3>
        </li>
    </ul>
