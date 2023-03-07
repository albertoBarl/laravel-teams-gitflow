<header id="header">
    <div class="container p-3">

        <div class="row d-flex align-items-center justify-content-between">

            {{-- LOGO --}}
            <div class="col-2">
                <div id="logo"><img src="{{ Vite::asset('public/images/logo.png') }}" alt="logo not available"></div>
            </div>

            {{-- NAVBAR --}}
            <div id="navbar" class="col-6">
                <ul class="list-unstyled d-flex justify-content-between w-100 h-100">
                    <a class="text-decoration-none" href="/">
                        <li>HOME</li>
                    </a>
                    <a class="text-decoration-none" href="/">
                        <li>AL CINEMA</li>
                    </a>
                    <a class="text-decoration-none" href="/">
                        <li>NUOVE USCITE</li>
                    </a>
                    <a class="text-decoration-none" href="{{ route('admin.movies.index') }}">
                        <li>CATALOGO A-Z</li>
                    </a>
                    <a class="text-decoration-none" href="/">
                        <li>SERIE TV</li>
                    </a>
                </ul>
            </div>

            {{-- LOGIN --}}
            <div class="col-3">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>






    </div>
</header>
