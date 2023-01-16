<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/characters', function () {
    return view('pages/characters');
})->name('characters');

Route::get('/', function () {
    $comics_database = config('comics-db');
    $cards = [
        [
            'img' => 'buy-comics-digital-comics.png',
            'card_name' => 'DIGITAL COMICS',
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'card_name' => 'DC MERCHANDISE',
        ],
        [
            'img' => 'buy-comics-subscriptions.png',
            'card_name' => 'SUBSCRIPTION',
        ],
        [
            'img' => 'buy-comics-shop-locator.png',
            'card_name' => 'COMIC SHOP LOCATOR',
        ],
        [
            'img' => 'buy-dc-power-visa.svg',
            'card_name' => 'DC POWER VISA',
        ],
    ];

    return view('pages/comics', compact('comics_database', 'cards'));
})->name('comics');

// Pagine per ogni singolo fumetto
Route::get('/comic-magazine/{index}', function ($index) {
    $comics = config('comics-db');

    $single_magazine = $comics[$index];

    return view('pages/comic-page/single-magazine', compact('single_magazine'));
})->name('show');
// /Pagine per ogni singolo fumetto

Route::get('/movies', function () {
    return view('pages/movies');
})->name('movies');

Route::get('/tv', function () {
    return view('pages/tv');
})->name('tv');

Route::get('/games', function () {
    return view('pages/games');
})->name('games');

Route::get('/collectibles', function () {
    return view('pages/collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('pages/videos');
})->name('videos');

Route::get('/fans', function () {
    return view('pages/fans');
})->name('fans');

Route::get('/news', function () {
    return view('pages/news');
})->name('news');

Route::get('/shop', function () {
    return view('pages/shop');
})->name('shop');