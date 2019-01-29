@extends('layout')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BDE Cesi - Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div class="welcomeGrid">
        <!-- a changer en php -->
        <div>
            <div class="bg">
                <div class="blurBackground" style="background-image: url({{ asset('image/bgevent.jpg') }})"></div>
            </div>
            <div class="welcomeEventGrid">
                <div>
                    <img id=eventPic class="imgBorder imgPos center" src="{{ asset('image/bgevent.jpg') }}" width="600" height="300">
                    <p class="titleEvent tEventPos center"> - exiaMiam - Repas - Burger King - 25/10/2018 - </p>
                    <button class="buttonStyle1 buttonEventPos">S'inscrire maintenant ></button>
                </div>
                <div>
                    <div class="textEvent center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum labore, 
                        reiciendis nam temporibus quod quasi quidem assumenda esse officiis sed quibusdam voluptates 
                        soluta laudantium deserunt expedita ratione laboriosam tempore consequuntur?
                    </div>
                </div>
                <button class="buttonStyle2 viewAllPos" onclick="location.href = 'http://127.0.0.1:8000/event';"> Voir Tout ></button>
            </div>
        </div>
        <div>
            <h1 class="title">Boutique</h1>
            <button class="buttonStyle2 viewAllPos" onclick="location.href =  'http://127.0.0.1:8000/shop';"> voir tout ></button>
            <div class="topMerchGrid">
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/arnold.jpg') }}" width="300" height="500">
                    </a>
                    <div class="nameProduct" width="300" height="100">
                        Black tuxedo / cool wear - <b>1.000 €</b>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/gaelz.jpg') }}" width="300" height="500">
                    </a>
                    <div class="nameProduct" width="300" height="100">
                        Young and Dynamic vest - <b>10 €</b>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/shaq.jpg') }}" width="300" height="500">
                    </a>
                    <div class="nameProduct" width="300" height="100">
                        Shaq'fu pro vest / 100% Sprite cramberry - <b>69.420 €</b>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="title">Boite à Idée</h1>
            <button class="buttonStyle2 viewAllPos" onclick="location.href = 'http://127.0.0.1:8000/ideabox';"> Voir Tout ></button>
            <div class="ideaBox imgPos center">
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
        </div> 
        <div>
            <h1 class="title">Réseaux Sociaux</h1>
            <div class="topMerchGrid">
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/fblogo.png') }}" onclick="location.href = 'http://www.facebook.com/CesiCampusArras/?ref=br_rs';"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/tlogo.png') }}" onclick="location.href = 'https://twitter.com/eXiaCesiArras';"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/cesilogo.png') }}" onclick="location.href = 'http://www.cesi.fr';"></button>
            </div>
        </div> 
    </div>
    @endsection
</body>
    @section('footer')
        @parent
    @endsection
</html>