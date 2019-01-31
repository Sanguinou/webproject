<?php
if(isset($_SESSION['timeout'])){
    
    
    if( !isset($_SESSION['panier'])){
		$_SESSION['panier']=array();
		$_SESSION['panier']['id_product'] = array();
		$_SESSION['panier']['quantity']= array();
		$_SESSION['panier']['product_price']=array();
    };
    $_SESSION['verrou'] = false;
    if ($_SESSION['timeout'] + 5 * 60 < time()) {
        session_unset(); 
    }
} else {
    $_SESSION['verrou'] = true;
}
?>
<!DOCTYPE html>
<html lang="fr">


<style type="text/css">

body{
    padding: 0;
    margin: 0;
    text-transform: uppercase;
}

header{
    background: black;
    padding-top: 10px;
    min-height: 60px;
}

header a{
    font-family: Arial;
    text-decoration: none;
    font-size: 15px;
    color: #ffffff;
}

header li{
    position: relative;
    display: inline;
    padding: 0 20px 0 20px;
    float: left;
    border-right: #ffffff solid 1px;
}

header nav{
    float: right;
    margin-top: -5px; /* up or down the nav bar */
}

header li #connexion{
    color: black;
    background: #ffffff;
    font-size: 20px;
    font-weight: bold;
    padding: 32px;
    margin-right: -25px; 
}

#header_logo{
    float: left;
}

footer {
    background: black;
    padding-top: 0px;
    height: 100px;
    color: #ffffff;
}

</style>

<body>
    <!-- Header -->
    @section('navbar')
    <header>
        <div id="header_logo">
            <img src="" alt="">
        </div>
            <nav>
                <ul>
                    <li><a href="http://127.0.0.1:8000">Acceuil</a></li>
                    <li><a href="http://127.0.0.1:8000/event">événement</a></li>
                    <li><a href="http://127.0.0.1:8000/shop">Boutique</a></li>
                    <li><a href="http://127.0.0.1:8000/ideabox">Boite à idée</a></li>
                    <?php if(isset($_SESSION['decoded'])){if($_SESSION['decoded']->id_status_user==2){
                        echo "<li><a href='http://127.0.0.1:8000/Administration'>Administration</a></li>";
                    }}?>
                    <li id="connexion">
                    <?php if(isset($_SESSION['decoded'])){
                            echo"<a href='http://127.0.0.1:8000/profile/'>".$_SESSION['decoded']->first_name."</a>";
                        } else{
                            echo"<a href='http://127.0.0.1:8000/connection'>Connection</a>";}?></li>
                    <li>
                    <a href="http://127.0.0.1:8000/logout"id="Out">&#x23FB;</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @show
    <div class="container">
        @yield('content')
    </div>

    @section('footer')
    <footer>
        <p>&copy; Groupe4</p>
    </footer>
    @show

</body>
</html>