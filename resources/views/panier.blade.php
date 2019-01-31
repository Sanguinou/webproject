@extends('layout')

<?php
session_start();
include_once("./fonction-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh'))){
   $erreur=true;
   }
   else{
   //récuperation des variables en POST ou GET
   $id_product = (isset($_POST['id_product'])? $_POST['id_product']:  (isset($_GET['id_product'])? $_GET['id_product']:null )) ;
   $product_price = (isset($_POST['product_price'])? $_POST['product_price']:  (isset($_GET['product_price'])? $_GET['product_price']:null )) ;
   $quantity = (isset($_POST['quantity'])? $_POST['quantity']:  (isset($_GET['quantity'])? $_GET['quantity']:null )) ;


   //On traite $quantity qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($quantity)){
      $QteArticle = array();
      $i=0;
      foreach ($quantity as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $quantity = intval($quantity);
    }
}


if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($id_product,$quantity,$product_price);
         break;

      Case "suppression":
         supprimerArticle($id_product);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['id_product'][$i],$QteArticle[$i]);
         }
         break;

      Default:
         break;
   }
}


echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>Votre panier</title>
</head>
<body>
<form method="post" action="panier">
<table style="width: 400px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr>
		<td>Libellé</td>
		<td>Quantité</td>
		<td>Prix Unitaire</td>
		<td>Action</td>
	</tr>


<?php
if (isset($_SESSION['panier']) && isset($_SESSION['panier']['id_product'])){
    if(count($_SESSION['panier']['id_product'])>0){
	    $nbArticles=count($_SESSION['panier']['id_product']);
	    for ($i=0 ;$i < $nbArticles ; $i++){
	        echo "<tr>";
	            echo "<td>".htmlspecialchars($_SESSION['panier']['id_product'][$i])."</ td>";
	            echo "<td><input type=\"text\" size=\"4\" name=\"quantity[]\" value=\"".htmlspecialchars($_SESSION['panier']['quantity'][$i])."\"/></td>";
	            echo "<td>".htmlspecialchars($_SESSION['panier']['product_price'][$i])."</td>";
	            echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&id_product=".rawurlencode($_SESSION['panier']['id_product'][$i]))."\">XX</a></td>";
	        echo "</tr>";
	    };
	    echo "<tr><td colspan=\"2\"> </td>";
	    echo "<td colspan=\"2\">";
	    echo "Total : ".MontantGlobal();
	    echo "</td></tr>";

	    echo "<tr><td colspan=\"4\">";
	    echo "<input type=\"submit\" value=\"Rafraichir\"/>";
	    echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

	    echo "</td></tr>";
	}else{
        echo "<tr><td>Votre panier est vide </ td></tr>";
        };
    };
?>
</table>
</form>
</body>
</html>