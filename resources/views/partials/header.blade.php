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

            {{-- SEARCHBAR --}}
            <div class="col-3">
                <div id="search">
                    <form class="d-flex" role="search">
                        <input class="form-control me-1 border-dark" type="search" placeholder="Search..."
                            aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>






    </div>
</header>
