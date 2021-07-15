<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BTC price</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

    <div class="main" id="main">
        <div class="container">
            <div class="text-center price-container">
                <img class = "logo" src="{{asset('img/logo.png')}}" alt="">
                <h1 class="title">BTC PRICE TODAY</h1>
                <div>
                    <span class="plus price" id='price'></span>
                    <span class="percentage" id="percentage"></span>
                </div>
            </div>
            <div class="text-center avg-container">
                <h1 class="title">AVERAGE PRICE</h1>
                <span class="plus price" id='average'></span>
            </div>
        </div>
    </div>
        <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ URL::asset('js/btcPrice.js') }}"></script>
    </body>
</html>

