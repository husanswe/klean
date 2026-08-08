<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav me-auto py-0">
            <a href="{{ route('main') }}" class="nav-item nav-link active">{{ __('main') }}</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">{{ __('about_us')}}</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">{{ __('services')}}</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">{{ __('project')}}</a>
            <a href="{{ route('posts.index') }}" class="nav-item nav-link">{{ __('blog')}}</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('contact_us')}}</a>
        </div>

        <div class="nav-item dropdown me-lg-3 my-2 my-lg-0">
            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center px-0 px-lg-2" data-bs-toggle="dropdown" id="langDropdown" aria-haspopup="true" aria-expanded="false">
                @php
                    $flags = ['en' => 'united-states', 'ru' => 'russia', 'uz' => 'uzbekistan'];
                    $labels = ['en' => 'English', 'ru' => 'Русский', 'uz' => "O'zbek"];
                    $current = app()->getLocale();
                @endphp
                <img src="{{ asset('img/flags/' . ($flags[$current] ?? 'uzbekistan') . '.png') }}"
                    alt="{{ $current }}" width="22" height="22" class="me-2" style="object-fit: cover; border-radius: 3px;">
                <span>{{ $labels[$current] ?? 'English' }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-lg-end shadow border-0 mt-2"
                aria-labelledby="langDropdown" style="min-width: 180px;">
                @foreach($labels as $code => $label)
                    <a class="dropdown-item d-flex align-items-center py-2 {{ $current === $code ? 'active' : '' }}"
                    href="{{ url('/lang/' . $code) }}">
                        <img src="{{ asset('img/flags/' . $flags[$code] . '.png') }}"
                            alt="{{ $code }}" width="20" height="20" class="me-2" style="object-fit: cover; border-radius: 3px;">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>

        @auth
            <div class="nav-item dropdown me-3 my-2 my-lg-0">
                <a href="#" class="nav-link position-relative p-2" data-bs-toggle="dropdown" id="notifBell" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell text-primary" style="font-size: 20px;"></i>
                    @if(auth()->user()->unreadNotifications->count() > 0)
                        <span class="badge bg-danger rounded-pill position-absolute" style="top: 0; right: 0; font-size: 10px;">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="notifBell"
                    style="min-width: 300px; max-width: 90vw; max-height: 400px; overflow-y: auto;">

                    <h6 class="dropdown-header d-flex justify-content-between align-items-center">
                        <span>Notifications</span>
                        @if(auth()->user()->unreadNotifications->count() > 0)
                            <form action="{{ route('notifications.readAll') }}" method="POST" class="m-0">
                                @csrf
                                <button class="btn btn-link btn-sm p-0 text-primary" style="font-size: 12px;">Mark all read</button>
                            </form>
                        @endif
                    </h6>

                    <div class="dropdown-divider"></div>

                    @forelse(auth()->user()->unreadNotifications as $notification)
                        <a href="{{ route('notifications.read', $notification->id) }}" class="dropdown-item text-wrap py-2" style="white-space: normal;">
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-truncate">{{ $notification->data['author_name'] }}</span>
                                <span class="text-muted" style="font-size: 13px;">published: {{ $notification->data['post_title'] }}</span>
                                <span class="text-muted" style="font-size: 11px;">{{ $notification->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                    @empty
                        <div class="dropdown-item text-muted text-center py-3">You're all caught up 🎉</div>
                    @endforelse
                </div>
            </div>

            <div class="me-2" style="max-width: 768px;">
                <button class="rounded text-wrap">
                    {{ auth()->user()->name }}
                </button>
            </div>

            <a href="{{ route('posts.create') }}" class="btn btn-primary me-3 my-2 my-lg-0">Create Post</a>
            <form action="{{ route('logout') }}" method="post" class="my-2 my-lg-0">
                @csrf
                <button class="btn btn-danger me-3">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary me-3 my-2 my-lg-0">Login</a>
        @endauth
    </div>
</nav>