<?php
session_start();
$MaxEventsShown = 1;
if(isset($_SESSION['timeout'])){
    if ($_SESSION['timeout'] + 5 * 60 < time()) {
        session_unset(); 
    };
};
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

        <?php     
        $url_product="http://localhost:3000/products/top";
        $url_event = "http://localhost:3000/events";
            if (isset($url_event)){
                $myClient = new GuzzleHttp\Client([
                'headers'=> ['User-Agent' => 'MyReader']
            ]);

            $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 1]], ['verify'=>false]);

                if ($resp -> getStatusCode() == 200){
                    $body = $resp -> getBody();
                    $obj = json_decode($body);
                    for($i=0;$i<$MaxEventsShown;$i++){ 
                        echo "<p> events: ".$obj[$i]->event_name."</p>";
                    };
                };
            };

            if (isset($url_event)){
                $myClient = new GuzzleHttp\Client([
                'headers'=> ['User-Agent' => 'MyReader']
            ]);

            $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 2]], ['verify'=>false]);

                if ($resp -> getStatusCode() == 200){
                    $body = $resp -> getBody();
                    $obj = json_decode($body);
                    for($i=0;$i<$MaxEventsShown;$i++){ 
                        echo "<p> ideas: ".$obj[$i]->event_name."</p>";
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
                    $obj = json_decode($body);
                        for($i=0;$i<$MaxEventsShown;$i++){ 
                            echo "<p>".$obj[$i]->Product_name."</p>";
                        };
                };
            };
            if(isset($_SESSION['username'])){
                    echo $_SESSION['username'];
            };?>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
    </body>
</html>
