@extends('layout')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site BDE - Panier</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/cart.css') }}"/>

</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')
    <div>
        <h2>panier</h2>
        <table id="panier">
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>quantité</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>
                    <p>Black tuxedo / cool wear</p>
                </td>
                <td>
                    <p>1000 €</p>
                </td>
                <td>
                    <input type="text" placeholder="2" id="quantité" name="quantité"/> 
                </td>
                <td>
                    <p>2.000 €</p>
                </td>    
            </tr>
            <tr>
                <td>
                    <p>Young and dynamic vest</p>
                </td>
                <td>
                    <p>10 €</p>
                </td>
                <td>
                    <input type="text" placeholder="2" id="quantité" name="quantité"/> 
                </td>
                <td>
                    <p>100 €</p>
                </td>
            </tr>
        </table>
        <div id="total_payement">
            <p>total : 2.100 €</p>
            <input id="payer" type="submit" name="payer" value="Payement">
        </div>
    </div>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection
</html>