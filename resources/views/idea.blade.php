@extends('layout')

<!DOCTYPE html>
<html>
<head>
<title>BDE Cesi - Idea Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <h1 class="title">boite à idée</h1>
    @foreach($ideas as $idea)
            @if($idea->id_status_event == 1)
                <div class="ideaBox imgPos center">
                    <div class="ideaBoxGrid">
                        <div>
                            <img class="imgProfileBorder imgProfilePos " src="image/{{$idea->profile_pic}}" width="150" height="150">
                            <div class="ideaBoxName center" width="200" height="75"> <b>{{$idea->first_name}} {{$idea->last_name}}</b> </div>
                            <button class="buttonStyle1 buttonIdeaPos center">Vote</button>
                        </div>
                        <div class="ideaBoxText center">
                            {{$idea->event_name}} <br/> {{$idea->event_body}}
                        </div>
                    </div>
                </div>
                <div class="vector center"></div>
            @endif
        @endforeach
    @endsection
</body>

    @section('navbar')
        @parent
    @endsection

</html>