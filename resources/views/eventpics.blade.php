<?php
session_start();
$url_event="http://localhost:3000/api/events/".$id_event;
if (isset($url_event)){
    $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
    $resp = $myClient -> request('GET',$url_event,['form_params'=> ['id_status_event' => 1]], ['verify'=>false]);
    if ($resp -> getStatusCode() == 200){
        $body = $resp -> getBody();
        $GLOBALS['event'] = json_decode($body);

                echo "<p> events: ".$GLOBALS['event'][0]->event_name."</p>";
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
  <!----<script src="{{ asset('js/script.js') }}"></script>---->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<body>
    <form method="post" action="eventpics" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="hidden" name="test">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php 
    if (isset($_POST['test'])){
    echo "branlette";
    }
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
        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/gael.jpg') }}" width="1000" height="600">
        <div class="eventDescPic center">
        <?php echo $GLOBALS['event'][0]->event_body ;?>
        </div>
    </div>
    <div class="vector center"></div>
    <!-- pictures published by a student -->
    <div>
        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/bgevent2.jpg') }}" width ="1000" height="600">
        <div class=eventPicGrid>
            <div>
                <div class="picDesc center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Blanditiis, odit ipsa? Dolor mollitia ea aspernatur ullam quaerat 
                    similique nulla nemo fugiat, quisquam error a voluptate, excepturi 
                    exercitationem dicta unde iure!
                </div>
                <div class="likeGrid">
                    <div class="post">POST : 12/11/2018 5:45 PM</div>
                    <button class="buttonStyle1 likePos center">125</button>
                    <button class="buttonStyle3 likePos center">LIKE</button>
                    <button class="buttonStyle3 likePos center" style="width: 100px">SUPPR</button>
                </div>
            </div>
            <div>
                <img class="imgProfileBorder imgProfilePos" style="left: 10%; background-image: url({{ asset('image/LP.png') }}" width="150" height="150">
                <div class="ideaBoxName" width="200" height="75" style="left: 3%; border: transparent;"> <b>Logan Paul</b> </div>
            </div>
        </div>
        <div class="commentGrid eventDescPic center" style="height: 175px; padding: 0;">
            <div>
                <img class="imgProfileBorder imgProfilePos center" style="left: 10px; background-image: url({{ asset('image/LP.png') }} " width="100" height="100">
                <div class="ideaBoxName center" width="200" height="75" style="left: 5px; margin-top: 5px; border: transparent; background-color: transparent;"> <b>Logan Paul</b> </div>
            </div>
            <div>
                <div class="comment center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo esse fugiat totam mollitia laborum
                    inventore veniam dignissimos? Iste, explicabo? Blanditiis voluptates maxime nihil harum incidunt. Non 
                    cupiditate possimus hic ipsam.*
                </div>
                <div class="likeGrid">
                    <div class="post">POST : 12/11/2018 5:45 PM</div>
                    <div></div>
                    <button class="buttonStyle3 likePos center" style="width: 100px">SUPPR</button>
                    <button class="buttonStyle3 likePos center" style="width: 175px">SIGNALER</button>
                </div>
            </div> 
        </div>
        <div class="commentGrid eventDescPic center" style="height: 175px; padding: 0;">
            <div>
                <img class="imgProfileBorder imgProfilePos center" style="left: 10px; background-image: url({{ asset('image/LP.png') }} " width="100" height="100">
                <div class="ideaBoxName center" width="200" height="75" style="left: 5px; margin-top: 5px; border: transparent; background-color: transparent;"> <b>Logan Paul</b> </div>
            </div>
            <div>
                <div class="comment center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo esse fugiat totam mollitia laborum
                    inventore veniam dignissimos? Iste, explicabo? Blanditiis voluptates maxime nihil harum incidunt. Non 
                    cupiditate possimus hic ipsam.*
                </div>
                <div class="likeGrid">
                    <div class="post">POST : 12/11/2018 5:45 PM</div>
                    <div></div>
                    <button class="buttonStyle3 likePos center" style="width: 100px">SUPPR</button>
                    <button class="buttonStyle3 likePos center" style="width: 175px">SIGNALER</button>
                </div>
            </div>   
        </div>
        <button id="btncom1" class="buttonStyle2 commentButton" onclick="HideComment('hiddenComment1', 'btncom1')">voir plus de commentaires ></button> 
        <div id="hiddenComment1" class="hide">
            <div class="commentGrid eventDescPic center" style="height: 175px; padding: 0;">
                <div>
                    <img class="imgProfileBorder imgProfilePos center" style="left: 10px; background-image: url({{ asset('image/LP.png') }} " width="100" height="100">
                    <div class="ideaBoxName center" width="200" height="75" style="left: 5px; margin-top: 5px; border: transparent; background-color: transparent;"> <b>Logan Paul</b> </div>
                </div>
                <div>
                    <div class="comment center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo esse fugiat totam mollitia laborum
                        inventore veniam dignissimos? Iste, explicabo? Blanditiis voluptates maxime nihil harum incidunt. Non 
                        cupiditate possimus hic ipsam.
                    </div>
                    <div class="likeGrid">
                        <div class="post">POST : 12/11/2018 5:45 PM</div>
                        <div></div>
                        <button class="buttonStyle3 likePos center" style="width: 100px">SUPPR</button>
                        <button class="buttonStyle3 likePos center" style="width: 175px">SIGNALER</button>
                    </div>
                </div>   
            </div>
        </div>
        <div class="vector center"></div>
    </div>
</body>
</html>