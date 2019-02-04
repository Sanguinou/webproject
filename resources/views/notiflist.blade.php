@extends('layout')

<?php
session_start();
if(isset($_SESSION['decoded'])){
    if(($_SESSION['decoded']->id_status_user)=="1"){
        header("Location:http://127.0.0.1:8000/");
        exit();
    }
}else if(!isset($_SESSION['decoded'])){
    header("Location:http://127.0.0.1:8000/");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/admin.css') }}"/>
    <meta name="keywords" content="Site Web, BDE du CESI, Campus CESI, Arras, Projetweb"/>
</head>

@section('navbar')
    @parent
@endsection

<body>
    @section('content')
        <h3 class="title">commentaire :</h3>
            <table class="center">
                                <tr>
                                    <th scope="col"><p>ID</p></th>
                                    <th scope="col"><p>commentaire</p></th>
                                    <th></th>
                                </tr>
    <?php
            $url_comments="http://localhost:3000/api/comments/";
                if (isset($url_comments)){
                    $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
                    $resp = $myClient -> request('GET',$url_comments,['form_params'=> ['id_status_content'=>2]], ['verify'=>false]);
                    if ($resp -> getStatusCode() == 200){
                        $bodycomm = $resp -> getBody();
                        $comments = json_decode($bodycomm);
                        if (isset($comments) && sizeof($comments)>0){
                            foreach($comments as $comment){                     
                                echo '
                                <tr>
                                    <th><p>'.$comment->id_comment.'</p></th>
                                    <th><p>'.$comment->comment_body.'</p></th>
                                    <form class="suppr" id="Comm" action="http://127.0.0.1:8000/event/SupprComment/" method="post">
                                    <input type="hidden" name="id_comment" value="'.$comment->id_comment.'">
                                    <th><button type="submit" class="buttonStyle2 deletePos"> supprimer </button></th>
                                    </form>
                                </tr>
                                ';
                            }
                        }
                    }
                }    
                        
                        ?>
                        
            </table>
        <h3 class="title">images :</h3>
            <table class="center">
                        <tr>
                            <th><p>ID</p></th>
                            <th><p>Image</p></th>
                            <th><p>commentaire de l'image</p></th>
                            <th></th>
                        </tr> 
        <?php
            $url_pics="http://localhost:3000/api/pictures_event/";
                if (isset($url_pics)){
                    $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
                    $resp = $myClient -> request('GET',$url_pics,['form_params'=> ['id_status_content'=>2]], ['verify'=>false]);
                    if ($resp -> getStatusCode() == 200){
                        $bodypic = $resp -> getBody();
                        $pics = json_decode($bodypic);
                        if (isset($pics) && sizeof($pics)>0){
                            foreach($pics as $pic){ 
                                echo '
                                <tr>
                                    <th><p>'.$pic->id_picture_event.'</p></th>
                                    <th><img class="imgBorder imgPos center" src="http://127.0.0.1:8000/image/'.$pic->picture_event_name.'" width ="100" height="100"></th>
                                    <th><p>'.$pic->picture_event_body.'</p></th>
                                    <form class="suppr" id="Img" action="http://127.0.0.1:8000/event/SupprImageEvent/" method="post">
                                    <input type="hidden" name="id_picture_event" value="'.$pic->id_picture_event.'">
                                    <th><button class= "buttonStyle2 deletePos" href=""> supprimer </button></th>
                                    </form>
                                </tr> 
                                ';
                            }
                        }
                    }
                }    
                                ?>
            </table>
<script>
$(document).ready(function(){
    $( ".suppr" ).submit(function(event) {
        var frm = $('#'+event.currentTarget.id);
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            dataType : 'html',
            success: function (data) {
                }
            });
        event.preventDefault();
    });
});

</script>
    @endsection
</body>

@section('footer')
    @parent
@endsection

</html>