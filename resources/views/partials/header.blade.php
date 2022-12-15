<header>
    <header>
        <div class="container d-flex">
            <div class="logo-header">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
            </div>
            <nav class="nav-header">
                <ul>
                    <li class="mx-3">
                        <a href="{{ route('characters') }}">characters</a>
                    </li>
                    <li class="mx-3">
                        <a href="{{ route('comics') }}">comics</a>
                    </li>
                    {{-- <li class="mx-3">
                        <a href="{{ route('movies') }}">movies</a>
                    </li>
                    <li class="mx-3">
                        <a href="{{ route('tv') }}">tv</a>
                    </li>
                    <li class="mx-3">
                        <a href="{{ route('games') }}">games</a>
                    </li>
                    <li class="mx-3">
                        <a href="{{ route('collectibles') }}">collectibles</a>
                    </li>  --}}
                    <li class="mx-3"><a href="">movies</a></li>
                    <li class="mx-3"><a href="">tv</a></li>
                    <li class="mx-3"><a href="">games</a></li>
                    <li class="mx-3"><a href="">collectibles</a></li>
                </ul>
            </nav>
        </div>
    </header>
</header>