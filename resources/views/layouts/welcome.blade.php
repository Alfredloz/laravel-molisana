<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        
    </head>
    <body>
            <header class="header_content d_flex">
                <img class="logo_page" src="{{ asset('img/logo.png')}}" alt="">
            <nav class="links d_flex">
                <a href="/">Homepage</a>
                <a href="products">Products</a>
                <a href="info">Info</a>
            </nav>
            </header>
            @yield('welcome-title')
            @yield('info-title')
            <main>               
                <section>
                    @yield('product-content')
                </section>
            </main>
    </body>
</html>
