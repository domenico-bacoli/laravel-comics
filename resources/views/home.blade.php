@extends('layouts/main-layout')

@section('content')

<main>
    <div class="main-image">

    </div>
    <div class="container">
        <div class="main-title-absolute">CURRENT SERIES</div>
        <div class="card-series-container">
            <div class="card-container">
                @foreach ($comics as $comic)
                <div class="card">
                    <div class="card-image">
                        <img src="{{$comic['thumb']}}" alt="comic cover">  
                    </div>
                    <div class="card-title">{{$comic['title']}}</div>
                </div>

                
                @endforeach
            </div>
        </div>
        <div class="button-load">
            <button>LOAD MORE</button>
        </div>
    </div>
    <div class="main-shop">
        <div class="container">
            @foreach ($shopItems as $shopItem)
            <div class="shop-item"> 
                <img src="{{ Vite::asset($shopItem['img'])}}" alt="{{$shopItem['text']}}">
                <div class="shop-item-text">{{$shopItem['text']}}</div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection