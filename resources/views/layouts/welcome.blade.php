<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        
    </head>
    <body>
        <div id="app">
            <header class="header_content d_flex">
                <img class="logo_page" src="{{ asset('img/logo.png')}}" alt="">
            <nav class="links d_flex">
                <a class="{{ Route::currentRouteName() === 'home'? 'active': '' }}" id="first_link" href="{{ route('home') }}">Homepage</a>
                <a class="{{ Route::currentRouteName() === 'product'? 'active': '' }}" id="second_link" href="{{ route('product') }}">Products</a>
                <a class="{{ Route::currentRouteName() === 'info'? 'active': '' }}" id="third_link" href="{{ route('info') }}">Info</a>
            </nav>
            </header>
            @yield('welcome-title')
            @yield('info-title')
            <main>               
                <section>
                    @yield('product-content')
                    <div class="item_info">
                    @yield('item-card')
                    </div>
                </section>
                
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
