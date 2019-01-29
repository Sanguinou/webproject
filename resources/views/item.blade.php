@extends('layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/item.css') }}"/>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div id="item_name">
        <h2>Shaq'fu pro vest / 100% sprite cramberry</h2>
        <p id="price">69,420 €</p>
    </div>
    <div id="buy_item">
        <div>
            <img id="image_product" src="" alt="item_image">
            <img src="" alt="miniature1">
            <img src="" alt="miniature2">
            <img src="" alt="miniature3">
        </div>
        <div id="description_item">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam explicabo nihil incidunt nemo sequi minus pariatur harum. Repellendus quis quos aut autem quisquam dolor recusandae, ratione nemo dolore laborum molestias.</p>
        </div> 
        <input id="add_item" type="submit" name="buy" value="Add to cart">   
    </div>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>