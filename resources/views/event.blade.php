<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $url = "http://localhost:3000/events";
    if (isset($url)){
        $myClient = new GuzzleHttp\Client([
            'headers'=> ['User-Agent' => 'MyReader']
        ]);

        $resp = $myClient -> request('GET',$url,['verify'=>false]);
        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $obj = json_decode($body);
                foreach( $obj as $obj ){
                    echo "<img src='$obj->ImageEvent' alt='Italian Trulli'>";
                };
            };
        };

    ?></body>
</html>