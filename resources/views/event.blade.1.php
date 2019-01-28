<?php
session_start();

if(isset($_SESSION['timeout'])){
    if ($_SESSION['timeout'] + 5 * 60 < time()) {
        session_unset(); 
    };
};

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BDE Cesi - Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<?php

$url_event = "http://localhost:3000/events";
    if (isset($url_event)){
        $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
        $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 1]], ['verify'=>false]);
        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $obj = json_decode($body);
                foreach($obj as $obj){ 
                    echo "<p> events: ".$obj->event_name."</p>";
                };
        };
    };

        if(isset($id_event)){
        echo $id_event; 
        }
    ?>
    <div>
        <h1 class="title">événement</h1>
        <button id=filterEvent class="buttonStyle3 buttonFilterPos dropdown" onclick="Drop('dropFilterEvent')">Filtre</button>
        <div id="dropFilterEvent" class="drop-content filterPos">
            <a href="javascript:HideEvent('finishedEvent', 'nextEvent')">Prochain evenements</a>
            <a href="javascript:HideEvent('nextEvent', 'finishedEvent')">Evenement finis</a>
            <a href="javascript:ShowAll('nextEvent', 'finishedEvent')">Afficher tous</a>
        </div>
        <div id="nextEvent" class="hide show">
            <div class="eventGrid">
                <div>
                    <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/bgevent.jpg') }}" width="500" height="300">
                    <p class="titleEvent tEventPos center"> - exiaMiam - Repas - Burger King - 25/10/2018 - </p>
                    <button class="buttonStyle1 buttonEventPos">S'inscrire maintenant ></button>
                </div>
                <div class="eventDesc center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laudantium dolores est vel omnis perferendis 
                    praesentium quaerat blanditiis temporibus earum porro, commodi numquam, totam tempore voluptas ratione perspiciatis, 
                    ducimus magni?
                </div>
            </div>
            <div class="vector center"></div>
        </div>
        <div id="finishedEvent" class="hide show">
            <div class="eventGrid">
                <div>
                    <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/bgevent2.jpg') }}" width="500" height="300">
                    <p class="titleEvent tEventPos center"> - exiaLan - Tournois CS - Exia - 11/09/2018 - </p>
                    <button class="buttonStyle1 buttonEventPos">Voir les photos ></button>
                </div>
                <div class="eventDesc center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laudantium dolores est vel omnis perferendis 
                    praesentium quaerat blanditiis temporibus earum porro, commodi numquam, totam tempore voluptas ratione perspiciatis, 
                    ducimus magni?
                </div>
            </div>
            <div class="vector center"></div>
            <div class="eventGrid">
                <div>
                    <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/bgevent2.jpg') }}" width="500" height="300">
                    <p class="titleEvent tEventPos center"> - exiaLan - Tournois CS - Exia - 11/09/2018 - </p>
                    <button class="buttonStyle1 buttonEventPos">Voir les photos ></button>
                </div>
                <div class="eventDesc center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laudantium dolores est vel omnis perferendis 
                    praesentium quaerat blanditiis temporibus earum porro, commodi numquam, totam tempore voluptas ratione perspiciatis, 
                    ducimus magni?
                </div>
            </div>
            <div class="vector center"></div>
        </div>
    </div>
</body>
</html>