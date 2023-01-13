@extends('layouts.main')

@section('page-title')
    Comics
@endsection

@section('main-content')
    <section class="comics-jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>

    <section class="comics-magazines container">
        @foreach ($comics_database as $comic)
        <!-- Singola CARD magazine -->
        <div class="comics-magazine">
            <div class="comics-magazine__image">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span class="comics-price">{{ $comic['price'] }}</span>
            </div>
            <div class="comics-magazine__title">
                <span class="comics-title">{{ $comic['title'] }}</span>
                <small class="comics-genre">{{ $comic['type'] }}</small>
            </div>
        </div>
        <!-- /Singola CARD magazine -->
        @endforeach

        <button class="comics-load-more-btn mb-4">LOAD MORE</button>
    </section>

    <section class="comics-pre-footer">
        <div class="comics-cards container d-flex justify-content-between align-items-center">
            <div class="comics-card ms-5">
                <a href="#" class="comics-card__info">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>

            <div class="comics-card">
                <a href="#" class="comics-card__info">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>

            <div class="comics-card">
                <a href="#" class="comics-card__info">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>

            <div class="comics-card">
                <a href="#" class="comics-card__info">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>

            <div class="comics-card me-5">
                <a href="#" class="comics-card__info">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>
        </div>
    </section>
@endsection
