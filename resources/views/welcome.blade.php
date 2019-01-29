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
        @foreach($events as $event)
            @if ($event->id_status_event == 2)
            <div class="bg">
                <img class="blurBackground" src="image/{{$event->picture_presentation_event}}">
            </div>
            <div class="welcomeEventGrid">
                <div>
                    <img id=eventPic class="imgBorder imgPos center" src="image/{{$event->picture_presentation_event}}" width="600" height="300">
                    <p class="titleEvent tEventPos center"> - {{$event->event_name}} - {{$event->event_location}} - {{$event->event_date}} - </p>
                    <button class="buttonStyle1 buttonEventPos">S'inscrire maintenant ></button>
                </div>
                <div>
                    <div class="textEvent center">
                        {{$event->event_body}}
                    </div>
                </div>
                <button class="buttonStyle2 viewAllPos" onclick="location.href = 'http://127.0.0.1:8000/event';"> Voir Tout ></button>
            </div>
            @endif
        @endforeach
        </div>
        <div>
            <h1 class="title">Boutique</h1>
            <button class="buttonStyle2 viewAllPos" onclick="location.href =  'http://127.0.0.1:8000/shop';"> voir tout ></button>
            <div class="topMerchGrid">
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" src="{{ asset('image/arnold.jpg') }}" width="300" height="500">
                    </a>
                    <div class="nameProduct" width="300" height="100">
                        Black tuxedo / cool wear - <b>1.000 €</b>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" src="{{ asset('image/gaelz.jpg') }}" width="300" height="500">
                    </a>
                    <div class="nameProduct" width="300" height="100">
                        Young and Dynamic vest - <b>10 €</b>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img class="imgBorder imgPos center" src="{{ asset('image/shaq.jpg') }}" width="300" height="500">
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
            @foreach($users_ideas as $user_idea)
                @if($user_idea->id_status_event == 1)
                <div class="ideaBoxGrid">
                    <div>
                        <img class="imgProfileBorder imgProfilePos " src="image/{{$user_idea->profile_pic}}" width="150" height="150">
                        <div class="ideaBoxName center" width="200" height="75"> <b>{{$user_idea->first_name}} {{$user_idea->last_name}}</b> </div>
                        <button class="buttonStyle1 buttonIdeaPos center">Vote</button>
                    </div>
                    <div class="ideaBoxText center">
                        {{$user_idea->event_name}} <br/> {{$user_idea->event_body}}
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div> 
        <div>
            <h1 class="title">Réseaux Sociaux</h1>
            <div class="topMerchGrid">
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/fblogo.png') }});" onclick="location.href = 'http://www.facebook.com/CesiCampusArras/?ref=br_rs';"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/tlogo.png') }});" onclick="location.href = 'https://twitter.com/eXiaCesiArras';"></button>
                <button class="buttonNetwork center" style="background-image: url({{ asset('image/cesilogo.png') }});" onclick="location.href = 'http://www.cesi.fr';"></button>
            </div>
        </div> 
    </div>
    @endsection
</body>
    @section('footer')
        @parent
    @endsection
</html>