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
    $comics = config('db.comics');
    $nav_links = config('db.nav_links');
    $f_boxes = config('db.footer_links');
    $social_links = config('db.social_links');
    return view('index', compact('comics', 'nav_links', 'f_boxes', 'social_links'));
})->name('home');
