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

<script>
$(document).ready(function(){
  $("#test").click(function(){
    $("#form").toggle();
  });
});
</script>

    <?php
     $url = "http://localhost:3000/login";
     if (isset($url) && isset($_POST['password'])){
         
         $myClient = new GuzzleHttp\Client([
             'headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/json']
         ]);
        try {
         $resp =  $myClient -> request('POST',$url,[
             'form_params'=> [
                 'password' => $_POST['password'],
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
             $_SESSION['username'] = $_SESSION['decoded']->last_name;
             $_SESSION['timeout'] = time();
             header("Location:http://localhost:8000/");
             exit();
            }
        }
        }else{
             echo "<button id='test'>test</button>";
             echo  "<form id='form' action='login' method='post'>
                            <input type='text' name='email'/>
                            <input type='password' name='password'/>
                            <input type='submit' value='Login' />
                    </form>";
         };

    ?>

</body>
</html>