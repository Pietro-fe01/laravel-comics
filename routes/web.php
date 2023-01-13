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

Route::get('/', function () {
    $comics_database = config('comics-db');

    return view('comics', compact('comics_database'));
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
