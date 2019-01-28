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
    <!-- main event presentation -->
    <h1 class="titleEventPic Center">exiaMiam - Repas - BurgerKing - 25/10/2018</h1>
    <div>
        <img class="imgBorder imgPos center" style="background-image: url({{ asset('image/bgevent.jpg') }}" width="1000" height="600">
        <div class="eventDescPic center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laudantium dolores est vel omnis perferendis 
            praesentium quaerat blanditiis temporibus earum porro, commodi numquam, totam tempore voluptas ratione perspiciatis, 
            ducimus magni?
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