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
    <div class="ideaBox imgPos center">
        <div class="ideaBoxGrid">
            <div>
                <img class="imgProfileBorder imgProfilePos " style="background-image: url({{ asset('image/LP.png') }}" width="150" height="150">
                <div class="ideaBoxName center" width="200" height="75"> <b>Logan Paul</b> </div>
                <button class="buttonStyle1 buttonIdeaPos center">vote</button>
            </div>
            <div class="ideaBoxText center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi reiciendis, 
                quis dicta quas sit reprehenderit. Dolorum, maiores deserunt in, unde dicta ullam 
                voluptatum labore id debitis minima nulla numquam facilis.
            </div>
        </div>
    </div>
    <div class="vector center"></div>
    <div class="ideaBox imgPos center">
        <div class="ideaBoxGrid">
            <div>
                <img class="imgProfileBorder imgProfilePos " style="background-image: url({{ asset('image/LP.png') }}" width="150" height="150">
                <div class="ideaBoxName center" width="200" height="75"> <b>Logan Paul</b> </div>
                <button class="buttonStyle1 buttonIdeaPos center">vote</button>
            </div>
            <div class="ideaBoxText center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi reiciendis, 
                quis dicta quas sit reprehenderit. Dolorum, maiores deserunt in, unde dicta ullam 
                voluptatum labore id debitis minima nulla numquam facilis.
            </div>
        </div>
    </div>
    <div class="vector center"></div>
    @endsection
</body>

    @section('navbar')
        @parent
    @endsection

</html>