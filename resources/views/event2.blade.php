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
    
    $url_event = "http://localhost:3000/api/events";
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
</body>
</html>