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
<body>
<<<<<<< HEAD
    <h1 class="title">Boutique</h1> 
    <div class="topMerchGrid">
        <div>
            <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/arnold.jpg') }}" width="300" height="500">
            <p class="nameProduct" width="300" height="100">
                Black tuxedo / cool wear - <b>1.000 €</b>
            </p>
        </div>
        <div>
            <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/gaelz.jpg') }}" width="300" height="500">
            <p class="nameProduct" width="300" height="100">
                Young and Dynamic vest - <b>10 €</b>
            </p>
        </div>
        <div>
            <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/shaq.jpg') }}" width="300" height="500">
            <p class="nameProduct" width="300" height="100">
                Shaq'fu pro vest / 100% Sprite cramberry - <b>69.420 €</b>
            </p>
        </div>
    </div>
=======
    <?php
        $_SESSION['username'] = "pascal";
        echo $_SESSION['username'];
    ?>
>>>>>>> 7442dfc910de8c0674ac47a7a81b021c9ee0e89f
</body>
</html>