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

    {{-- Cards Pre footer --}}
    <section class="comics-pre-footer">
        <div class="comics-cards container d-flex justify-content-between align-items-center">
            @foreach ($cards as $card)
                <div class="comics-card ms-5">
                    <a href="#" class="comics-card__info">
                        <img src="{{ Vite::asset('resources/img/') }}{{ $card['img'] }}" alt="">
                        <p>{{ $card['card_name'] }}</p>
                    </a>
                </div>
            @endforeach
    </section>
@endsection
