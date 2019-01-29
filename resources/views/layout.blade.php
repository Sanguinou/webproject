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
                    <li id="connexion"><a href="connexion.php">Connexion</a></li>
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