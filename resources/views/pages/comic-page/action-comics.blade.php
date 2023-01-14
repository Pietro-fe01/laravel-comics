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
            <div class=" ms-container-small row">
                <div class="col-8 pe-4">
                    <h3 class="magazine__title mb-3">{{ $single_magazine['title'] }}</h3>

                    <div class="magazine__check-disponibility d-flex justify-content-between">
                        <div class="d-flex p-3">
                            <div><span class="ms_light-green">U.S. Price:</span> <span class="fw-bold ms-1">{{ $single_magazine['price'] }}</span></div>
                        </div>
                        <div class="ms-auto pe-3 py-3 available ms_light-green">AVAILABLE</div>
                        <button class="p-3 bg-transparent text-white">
                            <span>Check Availability</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </button>
                    </div>

                    <p class="magazine__description text-dark mt-4">
                        {{ $single_magazine['description'] }}
                    </p>
                </div>
                <div class="magazine__adv col-4">
                    <h6 class="adv__title mb-0">ADVERTISEMENT</h6>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv-magazine">
                </div>
            </div>
        </div>
    </section>
@endsection
