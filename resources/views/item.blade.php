@extends('layout')
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site du BDE - produit</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/item.css') }}"/>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div id="item_name" class="center">
        <h2>Shaq'fu pro vest / 100% sprite cramberry</h2>
        <p id="price">69,420 €</p>
    </div>
    <div id="buy_item" class="gridProduct">
        <div>
            <img id="image_product" class="center" style="background-image: url({{ asset('image/shaq.jpg') }}" width="500" height="500">
        </div>
        <div id="description_item" class="center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam explicabo nihil incidunt nemo sequi minus pariatur harum. Repellendus quis quos aut autem quisquam dolor recusandae, ratione nemo dolore laborum molestias.</p>
        </div> 
    </div>
        <input id="add_item" type="submit" name="buy" value="Add to cart">   
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>