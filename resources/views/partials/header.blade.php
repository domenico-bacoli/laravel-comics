<header>
    <nav>
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo comics dc">
            </div>  
            <ul>
                @foreach ($links as $link)
                    <li>{{$link}}</li>
                @endforeach
            </ul>
            <div class="search">
                <input type="text" class="search-input" placeholder="Search">
                <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
        </div>
    </nav>
</header>