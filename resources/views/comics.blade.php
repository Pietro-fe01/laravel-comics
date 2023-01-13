@extends('layouts.main')

@section('page-title')
    Comics
@endsection

<style>
    main{
        background-color: #1c1c1c;
    }
    .jumbotron img{
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        object-position: top;
    }
</style>

@section('main-content')
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>
@endsection
