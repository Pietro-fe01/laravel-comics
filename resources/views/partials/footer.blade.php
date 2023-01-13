@php
    $footer_links_1 = [
        'title' => 'DC COMICS',
        'links' => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ]
    ];

    $footer_links_2 = [
        'title' => 'SHOP',
        'links' => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];

    $footer_links_3 = [
        'title' => 'DC',
        'links' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us',
        ]
    ];

    $footer_links_4 = [
        'title' => 'SITES',
        'links' => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ]
    ];

    $social_links = [
        [
            'name' => 'Facebook',
            'image' => 'footer-facebook.png'
        ],
        [
            'name' => 'Twitter',
            'image' => 'footer-twitter.png'
        ],
        [
            'name' => 'Youtube',
            'image' => 'footer-youtube.png'
        ],
        [
            'name' => 'Pinterest',
            'image' => 'footer-pinterest.png'
        ],
        [
            'name' => 'Periscope',
            'image' => 'footer-periscope.png'
        ]
    ];
@endphp


<footer>
    <div class="footer-top">
        <div class="container py-5">
            <div class="footer-top__menu d-flex">
                <div class="menu__left me-5">
                    <h3> {{ $footer_links_1['title'] }}</h3>
                    <nav>
                        <ul class="p-0">
                            @foreach ($footer_links_1['links'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
    
                    <h3> {{ $footer_links_2['title'] }}</h3>
                    <nav>
                        <ul class="p-0">
                            @foreach ($footer_links_2['links'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="menu__center me-5">
                    <h3> {{ $footer_links_3['title'] }}</h3>
                    <nav>
                        <ul class="p-0">
                            @foreach ($footer_links_3['links'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="menu__right me-5">
                    <h3>{{ $footer_links_4['title'] }}</h4>
                    <nav>
                        <ul class="p-0">
                            @foreach ($footer_links_4['links'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div> 
            </div>
    
            <small class="d-block">All Site Content TM and C 2020 DC Entertainment, unless otherwise <span class="em-phrase"><a href="#" class="text-decoration-none">noted here</a></span>. All rights reserved.</small>
            <span class="em-phrase"><a href="#" class="text-decoration-none">Cookies Settings</a></span>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container py-4 d-flex justify-content-between align-items-center">
            <div class="sign-up">
                <button>SIGN-UP NOW!</button>
            </div>

            <div class="follow-us">
                <h5 class="m-0 me-2">FOLLOW-US</h5>

                @foreach ($social_links as $social)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/') }}{{ $social['image'] }} " alt="{{ $social['name'] }}-social-icon">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>