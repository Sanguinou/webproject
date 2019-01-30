@extends('layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDE Cesi - Profil</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/profile.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div id="profil_page">
        <h2>Profil</h2>
        <div id="profil_id">
            <img src="" alt="image_profil">
            <input type="submit" name="profil" value="Changer l'image">
        </div>
        <div id="profil_information">
            <h3>Info utilisateur</h3>
            <form>
                <table>
                    <tr>
                        <td>
                            <label for="email">E-mail :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Email correspondant au profil" id="email" name="email" disabled/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nom">Nom :</label>
                        </td>
                        <td>
                            <input type="file" id="nom" name="nom" />                    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prenom">Prenom :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre prénom" id="prenom" name="prenom" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="centre">Centre :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre centre" id="centre" name="centre" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mdp">Password :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input id="valid" type="submit" name="connect" value="Valider changements">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>

    
 $(document).ready(function(){
    $("#nom").change(function(){
            var fileName = $('#nom').val();
            var clean=fileName.split('\\').pop(); // clean from C:\fakepath OR C:\fake_path 
            alert('clean file name : '+ clean);
    });
 });
 </script>
    @endsection
</body>
    @section('footer')
        @parent
    @endsection
</html>