<?php
session_start();
$MaxEventsShown = 1;


if(isset($_SESSION['timeout'])){
    if ($_SESSION['timeout'] + 5 * 60 < time()) {
        session_unset(); 
    };
};

$url_product="http://localhost:3000/api/products/top";
$url_event = "http://localhost:3000/api/events";
    if (isset($url_event)){
        $myClient = new GuzzleHttp\Client([
        'headers'=> ['User-Agent' => 'MyReader']
    ]);

    $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 1]], ['verify'=>false]);

        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $GLOBALS['events'] = json_decode($body);

        };
    };

    if (isset($url_event)){
        $myClient = new GuzzleHttp\Client([
        'headers'=> ['User-Agent' => 'MyReader']
    ]);

    $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 2]], ['verify'=>false]);

        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $GLOBALS['ideas'] = json_decode($body);
            for($i=0;$i<0;$i++){ 
            };
        };
    };

    if (isset($url_product)){
        $myClient = new GuzzleHttp\Client([
        'headers'=> ['User-Agent' => 'MyReader']
    ]);

    $resp = $myClient -> request('GET',$url_product,['verify'=>false]);
        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $GLOBALS['products'] = json_decode($body);

        };
    };
?>
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
                    <p class="titleEvent tEventPos center"><?php echo $GLOBALS['events'][0]->event_name." - ".$GLOBALS['events'][0]->event_date?> </p>

                    <form id='form' action=<?php 
                    if(isset($GLOBALS['events'])){
                         echo "event/".$GLOBALS['events'][0]->id_event ;}?> method='post'>
                    <input type='hidden' name='register' value='1'/>
                    <input type='submit' value='Sinscrire maintenant' class='buttonStyle1 buttonEventPos'/>
                    </form>";
                </div>
                <div>
                    <p class="textEvent"><?php echo $GLOBALS['events'][0]->event_body ?>
                    </p>



            <div class="content">
                <div class="title m-b-md">
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
