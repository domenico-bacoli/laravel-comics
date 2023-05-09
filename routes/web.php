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
    $links = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop"
    ];

    $comics = config('comics');

    $shopItems = [
        [
           "text" => "digital comics",
           "img" => "resources/img/buy-comics-digital-comics.png"
        ],
        [
            "text" => "dc merchandise",
            "img" => "resources/img/buy-comics-merchandise.png"
        ],
        [
            "text" => "digital comics",
            "img" => "resources/img/buy-comics-subscriptions.png"
        ],
        [
            "text" => "digital comics",
            "img" => "resources/img/buy-comics-shop-locator.png"
        ],
        [
            "text" => "digital comics",
            "img" => "resources/img/buy-dc-power-visa.svg"
        ],
    ];

    return view('home', compact('links', 'comics', 'shopItems'));
});
