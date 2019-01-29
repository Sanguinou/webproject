@extends('layout')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BDE Cesi - Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div>
        <h1 class="title">événement</h1>
        <button id=filterEvent class="buttonStyle3 buttonFilterPos dropdown" onclick="Drop('dropFilterEvent')">Filtre</button>
        <div id="dropFilterEvent" class="drop-content filterPos">
            <a href="javascript:HideEvent('finishedEvent', 'nextEvent')">Prochain evenements</a>
            <a href="javascript:HideEvent('nextEvent', 'finishedEvent')">Evenement finis</a>
            <a href="javascript:ShowAll('nextEvent', 'finishedEvent')">Afficher tous</a>
        </div>
        <div id="nextEvent" class="hide show">
            @foreach($events as $event)
                @if($event->id_status_event == 2)
                    <div class="eventGrid ">
                        <div>
                            <img class="picEvent imgPos center" src="image/{{$event->picture_presentation_event}}" width="500" height="300">
                            <p class="titleEvent tEventPos center"> - {{$event->event_name}} - {{$event->event_location}} - {{$event->event_date}} - </p>
                            <button class="buttonStyle1 buttonEventPos" onclick="location.href = 'http://127.0.0.1:8000/event/{{$event->id_event}}';">S'inscrire maintenant ></button>
                        </div>
                        <div class="eventDesc center">
                            {{$event->event_body}}
                        </div>
                    </div>
                    <div class="vector center"></div>
                @endif
            @endforeach
        </div>
        <div id="finishedEvent" class="hide show">
            @foreach($events as $event)
                @if($event->id_status_event == 3)
                <div class="eventGrid ">
                        <div>
                            <img class="picEvent imgPos center" src="image/{{$event->picture_presentation_event}}" width="500" height="300">
                            <p class="titleEvent tEventPos center"> - {{$event->event_name}} - {{$event->event_location}} - {{$event->event_date}} - </p>
                            <button class="buttonStyle1 buttonEventPos ">voir les photos ></button>
                        </div>
                        <div class="eventDesc center">
                            {{$event->event_body}}
                        </div>
                    </div>
                    <div class="vector center"></div>
                @endif
            @endforeach
        </div>
    </div>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>