@extends('layout')

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>BDE Cesi - Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <h1 class="title">Boutique</h1> 
    <h2 class="title2">Top produits :</h2>
    <div class="topMerchGrid">
        <div>
            <a href="#">
                <img class="imgBorder imgPos center" src="{{ asset('image/arnold.jpg') }}" width="300" height="500">
            </a>
            <p class="nameProduct" width="300" height="100">
                Black tuxedo / cool wear - <b>1.000 €</b>
            </p>
        </div>
        <div>
            <a href="#">
                <img class="imgBorder imgPos center" src="{{ asset('image/gaelz.jpg') }}" width="300" height="500">
            </a>
            <p class="nameProduct" width="300" height="100">
                Young and Dynamic vest - <b>10 €</b>
            </p>
        </div>
        <div>
            <a href="#">
                <img class="imgBorder imgPos center" src="{{ asset('image/shaq.jpg') }}" width="300" height="500">
            </a>
            <p class="nameProduct" width="300" height="100">
                Shaq'fu pro vest / 100% Sprite cramberry - <b>69.420 €</b>
            </p>
        </div>
    </div>
    <h2 class="title2">Produits :</h2>
    <button id=filterEvent class="buttonStyle3 buttonFilterPos dropdown" onclick="Drop('dropFilterEvent')">Filtre</button>
        <div id="dropFilterEvent" class="drop-content filterPos">
            <a href="javascript:HideEvent('accessories', 'apparels')">Vêtements</a>
            <a href="javascript:HideEvent('apparels', 'accessories')">Accessoires</a>
            <a href="javascript:ShowAll('apparels', 'accessories')">Afficher tous</a>
        </div> 
        <div id=apparels class="hide show">
            <div class="titleEvent tEventPos">vêtements :</div>
                <div class="topMerchGrid">
                @foreach ($products as $product)
                    @if ($product->id_category == 1)
                            <div>
                            <a href="#">
                                <img class="imgBorder imgPos center" src="image/{{$product->product_pic}}" width="300" height="300">
                            </a>
                            <p class="nameProduct" width="300" height="100">
                                {{ $product->product_name }} - <b>{{ $product->product_price }} €</b>
                            </p>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
        <div id=accessories class="hide show">
            <div class="titleEvent tEventPos">accessoires :</div>
                <div class="topMerchGrid">
                @foreach ($products as $product)
                    @if ($product->id_category == 2)
                        <div>
                            <a href="#">
                                <img class="imgBorder imgPos center" src="image/{{$product->product_pic}}" width="300" height="300">
                            </a>
                            <p class="nameProduct" width="300" height="100">
                                {{ $product->product_name }} - <b>{{ $product->product_price }} €</b>
                            </p>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>