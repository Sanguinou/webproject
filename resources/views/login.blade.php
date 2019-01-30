<?php
session_start();
use GuzzleHttp\Psr7;
use \Firebase\JWT\JWT;
use GuzzleHttp\Exception\ClientException;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    </head>
<body>
    <?php

    $urlLog = "http://localhost:3000/api/login";
    $urlReg = "http://localhost:3000/api/users";

    if (isset($urlLog) && isset($_POST['password']) && !isset($_POST['prenom'])){
         
         $myClient = new GuzzleHttp\Client([
             'headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/json']
         ]);
        try {
         $resp =  $myClient -> request('POST',$urlLog,[
             'form_params'=> [
                 'password' => hash('ripemd160',$_POST['password']),
                 'email' => $_POST['email']
             ]
             ]);} 
        catch (ClientException $e) {     
             echo "seems like something went wrong bro";
        }
        if(isset($resp)){
         if ($resp -> getStatusCode() == 200){
             $obj = json_decode($resp->getBody());
             $_SESSION['token'] = $obj->token;
             $_SESSION['decoded'] = JWT::decode($_SESSION['token'],'secret',array('HS256'));
             $_SESSION['timeout'] = time();
             header("Location:http://localhost:8000/");
             exit();
            }
        }
    }else if (isset($urlReg) && isset($_POST['password']) && isset($_POST['prenom'])){
         
            $myClient = new GuzzleHttp\Client([
                'headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/json']
            ]);
           try {
            $resp =  $myClient -> request('POST',$urlReg,[
                'form_params'=> [
                    'password' => hash('ripemd160',$_POST['password']),
                    'email' => $_POST['email'],
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'School_name' => $_POST['centre']
                ]
                ]);} 
           catch (ClientException $e) {     
                echo "seems like something went wrong bro";
           }
           if(isset($resp)){
            if ($resp -> getStatusCode() == 200){
                $obj = json_decode($resp->getBody());
                $_SESSION['token'] = $obj->token;
                $_SESSION['decoded'] = JWT::decode($_SESSION['token'],'secret',array('HS256'));
                $_SESSION['timeout'] = time();
                header("Location:http://localhost:8000/");
                exit();
               }
           }
           }
    ?>

</body>
</html>