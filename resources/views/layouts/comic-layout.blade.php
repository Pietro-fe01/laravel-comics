@php
    $cards = [
        [
            'img' => 'buy-comics-digital-comics.png',
            'card_name' => 'DIGITAL COMICS',
        ],
        [
            'img' => 'buy-comics-subscriptions.png',
            'card_name' => 'SHOP DC',
        ],
        [
            'img' => 'buy-comics-shop-locator.png',
            'card_name' => 'COMIC SHOP LOCATOR',
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'card_name' => 'SUBSCRIPTIONS',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DC | @yield('page-title', 'Standard Title')</title>
        <!-- Fontawesome CDN -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fontawesome CDN -->
        <!-- Favicon DC -->
            <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
        <!-- /Favicon DC -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <!-- Header -->
        @include('partials.header')

        <!-- Main -->
        <main class="text-white">
            <section class="comics-jumbotron">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
            </section>

            @yield('main-content')

            <section class="magazine__pre-footer text-dark">
                <div class="ms-container-small d-flex">
                    @foreach ($cards as $card)
                    <div class="pre-footer__card d-flex justify-content-between py-3 px-3">
                        <div class="pre-footer__card-name">{{ $card['card_name'] }}</div>
                        <img src="{{ Vite::asset('resources/img/') }}{{ $card['img'] }}" alt="">
                    </div>
                    @endforeach
                </div>
            </section>
        </main>

        <!-- Footer -->
        @include('partials.footer')
    </body>
</html>