@extends('layouts.comic-layout')

@section('page-title')
    Comics
@endsection

@section('main-content')
    <section class="magazine__image">
        <div class="ms-container-small">
            <img src="{{ $single_magazine['thumb'] }}" alt="single-magazine-cover">
        </div>
    </section>

    <section class="magazine__shop py-5">
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
    </section>

    <section class="magazine__info text-dark">
        <div class="ms-container-small row">
            <div class="col-6 pe-4">
                <h4 class="py-4">Talent</h4>

                <div class="magazine__art-by d-flex pt-2">
                    <small>Art by:</small>
                    <p>
                        @foreach ($single_magazine['artists'] as $artist)
                            @if ($loop->index === count($single_magazine['artists']) - 1)
                                {{ $artist }}
                            @else
                                {{ $artist }}<span class="text-dark">,</span>
                            @endif
                        @endforeach
                    </p>
                </div>

                <div class="magazine__written-by d-flex pt-2">
                    <small>Written by:</small>
                    <p>
                        @foreach ($single_magazine['writers'] as $writer)
                            @if ($loop->index === count($single_magazine['writers']) - 1)
                                {{ $writer }}
                            @else
                                {{ $writer }}<span class="text-dark">,</span>
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="col-6 ps-4">
                <h4 class="py-4">Specs</h4>

                <div class="magazine__specs">
                    <div class="py-2 d-flex">
                        <small>Series:</small>
                        <span class="magazine__specs-series">{{ $single_magazine['series'] }}</span>
                    </div>
                    <div class="py-2 d-flex">
                        <small>U.S. Price:</small>
                        <span>{{ $single_magazine['price'] }}</span>
                    </div>
                    <div class="py-2 d-flex">
                        <small>On Sale Date:</small>
                        <span>{{ $single_magazine['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
