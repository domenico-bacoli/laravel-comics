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

    $footerLists = [
        [
            "title" => "dc comics",
            "links" => [
                'Characters',
                'Comics',
                'Movies',
                'Tv',
                'Games',
                'Videos',
                'News',
            ] 
        ],
        [
            "title" => "shop",
            "links" => [
                "Shop DC",
                "Shop DC collectibles"
            ]
        ],
        [
            "title" => "dc",
            "links" => [
                "Terms Of Use",
                "Privacy Policy(New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ]
        ],
        [
            "title" => "sites",
            "links" => [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa"
            ]
        ],
    ];

    return view('home', compact('links', 'comics', 'shopItems', 'footerLists'));
});
