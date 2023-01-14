@php
    $header_menu = [
        [
            'label' => 'CHARACTERS',
            'active' => false,
        ],
        [
            'label' => 'COMICS',
            'active' => false,
        ],
        [
            'label' => 'MOVIES',
            'active' => false,
        ],
        [
            'label' => 'TV',
            'active' => false,
        ],
        [
            'label' => 'GAMES',
            'active' => false,
        ],
        [
            'label' => 'COLLECTIBLES',
            'active' => false,
        ],
        [
            'label' => 'VIDEOS',
            'active' => false,
        ],
        [
            'label' => 'FANS',
            'active' => false,
        ],
        [
            'label' => 'NEWS',
            'active' => false,
        ],
        [
            'label' => 'SHOP',
            'active' => false,
        ]
    ];
@endphp

<header>
    <div class="header-top text-white">
        <div class="container d-flex justify-content-end py-1">
            <small>DC POWER℠ VISA&#174;</small>
            <small>
                <a href="#" class="ms-5 text-white text-decoration-none">
                    ADDITIONAL DC SITES
                    <i class="fa-solid fa-caret-down"></i>
                </a>
            </small>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="#">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo-DC-image">
            </a>
    
            <nav class="header__nav">
                <ul class="d-flex list-unstyled my-0">
                    @foreach ($header_menu as $link)
                        <li>
                            <a href="{{ route(Str::lower($link['label'])) }}">
                                {{ $link['label'] }}
                                <i @if ($link['label'] === 'SHOP')) class="fa-solid fa-caret-down" @endif ></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
    
            <form action="" class="search-form">
                <input type="search" name="" id="" placeholder="Search">
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
    </div>
</header>