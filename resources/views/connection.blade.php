@extends('layout')

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site BDE - Connexion</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/connexion.css') }}"/>

</head>
    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div>
        <h2>Connexion</h2>
        <!-- grey zone -->
        <div id="login_zone">       
            <!-- Inscription bloc -->                
            <div id="inscription">                   
                <h3>Inscription</h3>
                <form method="POST" action="">
                    <label for="nom">Nom :</label>
                    <input class="input" type="text" placeholder="Votre nom" id="nom" name="nom" />
                    <label for="prenom">Prénom :</label>
                    <input class="input" type="text" placeholder="Votre Prénom" id="prenom" name="prenom" />
                    <label for="centre">Centre :</label>
                    <select class="input" name="centre">
                        <option value="arras">Arras</option>
                        <option value="lille">Lille</option>
                        <option value="bordeaux">Bordeaux</option>
                        <option value="lyon">Lyon</option>
                    </select>
                    <label for="email">E-Mail :</label>
                    <input class="input" type="email" placeholder="Votre e-mail" id="email" name="email" />
                    <label for="mdp">Mot de passe :</label>
                    <input class="input" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                    <!-- Button for sign up -->
                    <input id="signup" type="submit" name="forminscritpion" value="Sign up">
                </form>
            </div>
            <!-- Connexion bloc -->
            <div id="connexion">                   
                <h3>Connexion</h3>
                <form id="con" method="POST" action="">
                    <table id="connect">
                        <tr>
                            <td><label for="email">E-Mail :</label></td>
                            <td><input class="input_login" type="email" placeholder="Votre e-mail" id="email" name="email" /></td>
                        </tr>
                        <tr>
                            <td><label for="mdp">Mot de passe :</label></td>
                            <td><input class="input_login" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" /></td>
                        </tr>  
                    </table> 
                    <!-- Button for sign up -->
                    <input id="btn_connect" type="submit" name="forminscritpion" value="Sign in">
                </form>
            </div>     
        </div>
    </div>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>