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
Route::get('/action-comics-1000-the-deluxe-edition', function () {
    $single_magazine = [
        "title" => "Action Comics #1000: The Deluxe Edition",
        "href_title" => "action-comics-1000-the-deluxe-edition",
        "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
        "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
        "price" => "$19.99",
        "series" => "Action Comics",
        "sale_date" => "2018-10-02",
        "type" => "comic book",
        "artists" => [
            "José Luis García-López",
            "Clay Mann",
            "Rafael Albuquerque",
            "Patrick Gleason",
            "Dan Jurgens",
            "Joe Shuster",
            "Neal Adams",
            "Curt Swan",
            "John Cassaday",
            "Olivier Coipel",
            "Jim Lee"
        ],
        "writers" => [
            "Brad Meltzer",
            "Tom King",
            "Scott Snyder",
            "Geoff Johns",
            "Brian Michael Bendis",
            "Paul Dini",
            "Louise Simonson",
            "Richard Donner",
            "Marv Wolfman",
            "Peter J. Tomasi",
            "Dan Jurgens",
            "Jerry Siegel",
            "Paul Levitz"
        ],
    ];
    return view('pages/comic-page/action-comics', compact('single_magazine'));
});


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