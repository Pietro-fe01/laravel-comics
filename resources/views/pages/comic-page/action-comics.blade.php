@extends('layouts.comic-layout')

@section('page-title')
    Comics
@endsection

@section('main-content')
    {{-- @dd($action_comic_1000); --}}
    <section class="magazine__image">
        <div class="ms-container-small">
            <img src="{{ $single_magazine['thumb'] }}" alt="single-magazine-cover">
        </div>
    </section>

    <section>
        <div class="magazine__info py-5">
            <div class=" ms-container-small">
                <h3 class="magazine__title mb-0">{{ $single_magazine['title'] }}</h3>
            </div>
        </div>
    </section>
@endsection
