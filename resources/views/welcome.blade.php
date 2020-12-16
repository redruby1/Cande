@include('navbar')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
    </head>
    <body>
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                @endauth
                </div>
        @endif

        <div class="box color-1">
            <div class="isi">
                <p>BUY. SELL.</p>
                <p>DISCOVER UNIQUE FASHION</p>
                <p class="i-1">designer, preloved, streetwear, one and only</p>
                <p class="i-1">whatever you wear, find it on cande</p>

                <input class="button" type="button" value="Shop now" href="#">
            </div>
        </div>

        <div class="box"></div>
    </body>
</html>
