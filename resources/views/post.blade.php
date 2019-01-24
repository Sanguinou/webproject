
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $url = "http://localhost:3000/users";
    if (isset($url)){
        $myClient = new GuzzleHttp\Client([
            'headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/x-www-form-urlencoded']
        ]);

        $myBody['Lastname'] = 'ARCELIN';
        $myBody['Firstname'] = 'Félix';
        $myBody['Password'] = 'puceau';



        $resp = $myClient -> post($url,['verify'=>false],['body'=>[
            'Lastname' => 'ARCELIN',
            'Firstname' => 'Félix',
            'Password' => 'puceau'
            ]]);
        if ($resp -> getStatusCode() == 201){
            $body = $resp -> getBody();
            print_r(json_decode((string)$body));
          
            };
        }
    ?>


</body>
</html>