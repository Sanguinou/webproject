@extends('layout')
<?php
session_start();

$url_event="http://localhost:3000/api/events/".$id_event;
if (isset($url_event)){
    $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
    $resp = $myClient -> request('GET',$url_event, ['verify'=>false]);
    if ($resp -> getStatusCode() == 200){
        $body = $resp -> getBody();
        $GLOBALS['event'] = json_decode($body);
    };
};

if(isset($_SESSION['decoded'])){
    $url_reg="http://localhost:3000/api/registers/";
    if (isset($url_reg)){
        $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/json']]);
        $resp = $myClient -> request('GET',$url_reg,['form_params'=> ['id_event'=> $id_event,'id_user'=>$_SESSION['decoded']->id_user]], ['verify'=>false]);
        if ($resp -> getStatusCode() == 200){
            $bodyreg = $resp -> getBody();
            $decoded = json_decode($bodyreg,true);
            if(isset($decoded)){
                $GLOBALS['isRegistered']=$decoded['isRegistered'];
                if($GLOBALS['isRegistered']!=1){
                    if(isset($_POST['register'])){
                        $url_reg="http://localhost:3000/api/registers/";
                        if (isset($url_reg)){
                            $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader','Content-Type' =>'application/json']]);
                            $resp = $myClient -> request('POST',$url_reg,['form_params'=> ['id_event' => $id_event,'id_user' => $_SESSION['decoded']->id_user]], ['verify'=>false]);
                            if ($resp -> getStatusCode() == 200){
                                echo $_SESSION['decoded']->id_user;
                            };
                        };
                    };
                }else{
                //echo "you are already registered";
                };
            };
        };
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
@section('navbar')
        @parent
    @endsection
<body>
@section('content')

    <form method="post" action="eventpics" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="hidden" name="test">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php 
    ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input[type="file"]').change(function(e){
                var fileName = e.target.files[0].name;
                );
            });
        });

</script>
<script src="{{ asset('js/upload.js') }}"></script>
    <!-- main event presentation -->
    <h1 class="titleEventPic Center"><?php echo $GLOBALS['event'][0]->event_name ;?></h1>
    <div>
        <img class="picEvent imgPos center" style="background-image: url('http://localhost:8000/image/<?php echo $GLOBALS['event'][0]->picture_presentation_event;?>')" width="1000" height="600">
        <div class="eventDescPic center">
        <?php echo $GLOBALS['event'][0]->event_body ;?>

        </div>
    </div>
    <div class="vector center"></div>
    <?php
    $url_pic_event="http://localhost:3000/api/pictures_event/";
    if(isset($GLOBALS['isRegistered'])&& isset($GLOBALS['event'])){
        if($GLOBALS['isRegistered']==1 && $GLOBALS['event'][0]->id_status_event==3){
            echo '<button id="addPic" class="buttonStyle3 likePos center">Ajoute une photo</button>
        <div id="addPicForm" style="display:none">                   
            <form id="con" method="POST" action="http://127.0.0.1:8000/AddImage" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="file">Votre Image :</label></td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    </tr>
                    <tr>
                        <td><label for="picture_event_body">Légende :</label></td>
                        <td><textarea id="picture_event_body" name="picture_event_body" rows="10" cols="60"></textarea></td>
                    </tr>  
                </table>
                <input type="hidden" value="'.$_SESSION['decoded']->id_user.'" name="id_user" />
                <input type="hidden" value="'.$GLOBALS['event'][0]->id_event.'" name="id_event" />
                <input type="hidden" name="picture_event_name" />  
 
                <!-- Button for sign up -->
                <input id="btn_Add_Pic" type="submit" name="formAddPic" value="Ajouter l\'image">
            </form>
        </div> ';
        }
    }
    if (isset($url_pic_event)){
        $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
        $resp = $myClient -> request('GET',$url_pic_event,['form_params'=> ['id_event' => $id_event]], ['verify'=>false]);
        if ($resp -> getStatusCode() == 200){
            $body = $resp -> getBody();
            $GLOBALS['pictures_event'] = json_decode($body,true);
            $url_likes="http://localhost:3000/api/likes/";
            foreach($GLOBALS['pictures_event'] as $pic){
              

                echo '<div>
                <img class="imgBorder imgPos center" style="background-image: url(http://127.0.0.1:8000/image/'.$pic["picture_event_name"].')" width ="1000" height="600">
                <div class=eventPicGrid>
                    <div>
                        <div class="picDesc center">'
                            .$pic["picture_event_body"].'
                        </div>
                        <div class="likeGrid">
                            <div class="post">POST : '.$pic["created_at"].'</div>
                            ';
                            if(isset($url_likes)){
                                $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
                                $resp = $myClient -> request('GET',$url_likes,['form_params'=> ['id_picture_event' => $pic['id_picture_event']]], ['verify'=>false]);
                                if ($resp -> getStatusCode() == 200){
                                    $bodyLikes = $resp -> getBody();
                                    $pic['likes'] = json_decode($bodyLikes,true);
                                    if (isset($pic['likes'])&& sizeof($pic['likes'])>0){
                                        foreach($pic['likes'] as $likes){
                                        echo '<button class="buttonStyle1 likePos center">'.$likes['LIKES'].'</button>';

                                        }
                                    }
                                }
                            }
                            echo '<form id="form" action="http://127.0.0.1:8000/event/AddLikes/" method="post">
                                <input type="hidden" name="id_event" value="'.$id_event.'"/>
                                <input type="hidden" name="id_picture_event" value="'.$pic['id_picture_event'].'"/>
                                <input type="hidden" name="like" value="1"/>
                                <input class="buttonStyle3 likePos Center" type="submit" value="LIKE"/>
                                </form>
                            <button class="buttonStyle3 likePos center" style="width: 100px">SUPPR</button>
                        </div>
                    </div>
                    <div>
                        <img class="imgProfileBorder imgProfilePos" style="left: 10%; background-image: url(\" \")" width="150" height="150">
                        <div class="ideaBoxName" width="200" height="75" style="left: 3%; border: transparent;"> <b>Logan Paul</b> </div>
                    </div>
                </div>
            ';
            
                $url_comments="http://localhost:3000/api/comments/";
                if (isset($url_comments)){
                    $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
                    $resp = $myClient -> request('GET',$url_comments,['form_params'=> ['id_picture_event' => $pic['id_picture_event']]], ['verify'=>false]);
                    if ($resp -> getStatusCode() == 200){
                        $bodypic = $resp -> getBody();
                        $pic['comments'] = json_decode($bodypic,true);
                        if(isset($pic['comments'])&& sizeof($pic['comments'])>0){
                        foreach($pic['comments'] as $comments){

                    echo "<div class='commentGrid eventDescPic center' style='height: 175px; padding: 0;'>
                        <div>
                            <img class='imgProfileBorder imgProfilePos center' style='left: 10px; background-image: url({{ asset('image/LP.png') }} ' width='100' height='100'>
                            <div class='ideaBoxName center' width='200' height='75' style='left: 5px; margin-top: 5px; border: transparent; background-color: transparent;'> <b>Logan Paul</b> </div>
                        </div>
                        <div>
                            <div class='comment center'>
                                ".$comments['comment_body']."
                            </div>
                            <div class='likeGrid'>
                                <div class='post'>POST : ".$comments['created_at'] ."</div>
                                <div></div>
                                <button class='buttonStyle3 likePos center' style='width: 100px'>SUPPR</button>
                                <button class='buttonStyle3 likePos center' style='width: 175px'>SIGNALER</button>
                            </div>
                        </div>     
                    </div>
                </div>";    };
                        };
                    };

                };
            };
        };
    }; 
?>

        <button id="btncom1" class="buttonStyle2 commentButton" onclick="HideComment('hiddenComment1', 'btncom1')">voir plus de commentaires ></button> 
        <div id="hiddenComment1" class="hide">
            <div class="commentGrid eventDescPic center" style="height: 175px; padding: 0;">

            </div>
        </div>
        <div class="vector center"></div>
    </div>
    <script>
$(document).ready(function(){
  $("#addPic").click(function(){
    $("#addPicForm").toggle();
  });
});

$(document).ready(function(){
    $("#fileToUpload").change(function(){
            var fileName = $("#fileToUpload").val();
            $("#picture_event_name").value=fileName.split('\\').pop(); // clean from C:\fakepath OR C:\fake_path 
    });
 });
</script>

    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>