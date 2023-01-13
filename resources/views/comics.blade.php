@extends('layouts.main')

@section('page-title')
    Comics
@endsection

@section('main-content')
    <section class="comics-jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>

    {{-- @dd($comics_database); --}}
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
@endsection
