<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BDE Cesi - Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}" />
</head>
<body>
    <div class="welcomeGrid">
        <!-- a changer en php -->
        <div>
            <div class="blurBackground" style="background-image: url({{ asset('image/bgevent.jpg') }})"></div>
            <div class="welcomeEventGrid">
                <div>
                    <img class="imgBorder imgPos center" src="{{ asset('image/bgevent.jpg') }}" width="600" height="300">
                    <p class="titleEvent tEventPos center"> - exiaMiam - Repas - Burger King - 25/10/2018 - </p>
                    <button class="buttonStyle1 buttonEventPos">S'inscrire maintenant ></button>
                </div>
                <div>
                    <p class="textEvent">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum labore, 
                        reiciendis nam temporibus quod quasi quidem assumenda esse officiis sed quibusdam voluptates 
                        soluta laudantium deserunt expedita ratione laboriosam tempore consequuntur?
                    </p>
=======
<?php
session_start();
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <?php echo $_SESSION['username'];?>
>>>>>>> 7442dfc910de8c0674ac47a7a81b021c9ee0e89f
                </div>
            </div>
        </div>
        <div>
            <h1 class="title">Boutique</h1>
            <button class="buttonStyle2 viewAllPos"> voir tout ></button>
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
        </div>
        <div>
            <h1 class="title">Boite à Idée</h1>
            <button class="buttonStyle2 viewAllPos"> Voir Tout ></button>
            <div class="ideaGrid">
                <div class="ideaBox imgPos">
                    <div class="ideaBoxGrid">
                        <div>
                            <img class="imgProfileBorder imgProfilePos " style="background-image: url({{ asset('image/LP.png') }}" width="150" height="150">
                            <div class="ideaBoxName center" width="200" height="75"> <b>Logan Paul</b> </div>
                            <button class="buttonStyle1 buttonIdeaPos center">Voir plus ></button>
                        </div>
                        <div class="ideaBoxText center">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi reiciendis, 
                            quis dicta quas sit reprehenderit. Dolorum, maiores deserunt in, unde dicta ullam 
                            voluptatum labore id debitis minima nulla numquam facilis.
                        </div>
                    </div>
                </div>
                <div class="ideaBox imgPos">
                    <div class="ideaBoxGrid">
                        <div>
                            <img class="imgProfileBorder imgProfilePos " style="background-image: url({{ asset('image/LP.png') }}" width="150" height="150">
                            <div class="ideaBoxName center" width="200" height="75"> <b>Logan Paul</b> </div>
                            <button class="buttonStyle1 buttonIdeaPos center">voir plus ></button>
                        </div>
                        <div class="ideaBoxText center">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi reiciendis, 
                            quis dicta quas sit reprehenderit. Dolorum, maiores deserunt in, unde dicta ullam 
                            voluptatum labore id debitis minima nulla numquam facilis.
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div>
            <h1 class="title">Réseaux Sociaux</h1>
            <div class="topMerchGrid">
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/fblogo.png') }}"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/tlogo.png') }}"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/cesilogo.png') }}"></button>
            </div>
        </div> 
    </div>
</body>
</html>