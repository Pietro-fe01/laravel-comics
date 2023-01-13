@extends('layouts.main')

@section('page-title')
    Comics
@endsection

<style>
    main{
        background-color: #1c1c1c;
    }
</style>

@section('main-content')
    <section class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </section>
@endsection
