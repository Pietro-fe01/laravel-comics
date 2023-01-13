<header>
    <div class="header-top text-white">
        <div class="container d-flex justify-content-end">
            <small>DC POWER℠ VISA&#174;</small>
            <small>
                <a href="#" class="ms-5 text-white text-decoration-none">
                    ADDITIONAL DC SITES
                    <i class="fa-solid fa-caret-down"></i>
                </a>
            </small>
        </div>
    </div>
    <div class="header-bottom container d-flex align-items-center justify-content-between">
        <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo-DC-image">

        <nav class="header__nav">
            <ul class="d-flex list-unstyled my-0">
                <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                <li><a href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="/movies">MOVIES</a></li>
                <li><a href="/tv">TV</a></li>
                <li><a href="/games">GAMES</a></li>
                <li><a href="/ccollectibles">COLLECTIBLES</a></li>
                <li><a href="/videos">VIDEOS</a></li>
                <li><a href="/fans">FANS</a></li>
                <li><a href="/news">NEWS</a></li>
                <li><a href="/shop">SHOP <i class="fa-solid fa-caret-down"></i></a></li>
            </ul>
        </nav>

        <form action="" class="search-form">
            <input type="search" name="" id="" placeholder="Search">
            <i class="search-icon fa-solid fa-magnifying-glass"></i>
        </form>
    </div>
</header>