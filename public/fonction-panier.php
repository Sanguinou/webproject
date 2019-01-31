<?php

function isVerrouille(){
    if (isset($_SESSION['verrou'])){
        return $_SESSION['verrou'];
    }
}
 
 
 
 function ajouterArticle($id_product,$quantity,$product_price){
 //Si le panier existe
    if (!isVerrouille())
    {
       $positionProduit = array_search($id_product,$_SESSION['panier']['id_product']); 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['quantity'][$positionProduit] += $quantity;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['id_product'],$id_product);
          array_push( $_SESSION['panier']['quantity'],$quantity);
          array_push( $_SESSION['panier']['product_price'],$product_price);
       }
    };
 };
 
 
 function modifierQTeArticle($id_product,$quantity){
    //Si le panier éxiste
    if (!isVerrouille())
    {
       //Si la quantité est positive on modifie sinon on supprime l'article
       if ($quantity > 0)
       {
          //Recharche du produit dans le panier
          $positionProduit = array_search($id_product,  $_SESSION['panier']['id_product']);
 
          if ($positionProduit !== false)
          {
             $_SESSION['panier']['quantity']['$positionProduit'] =  $quantity;
          }
       }
       else
       supprimerArticle($id_product);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }
 
 
 
 function supprimerArticle($id_product){
    //Si le panier existe
    if (!isVerrouille())
    {
       //Nous allons passer par un panier temporaire
       $tmp=array();
       $tmp['id_product'] = array();
       $tmp['quantity'] = array();
       $tmp['product_price'] = array();
       $tmp['verrou'] = $_SESSION['verrou'];
 
       for($i = 0; $i < count($_SESSION['panier']['id_product']); $i++)
       {
          if ($_SESSION['panier']['id_product'][$i] !== $id_product)
          {
             array_push( $tmp['id_product'],$_SESSION['panier']['id_product'][$i]);
             array_push( $tmp['quantity'],$_SESSION['panier']['quantity'][$i]);
             array_push( $tmp['product_price'],$_SESSION['panier']['product_price'][$i]);
          }
       }
       //On remplace le panier en session par notre panier temporaire à jour
       $_SESSION['panier'] =  $tmp;
       //On efface notre panier temporaire
       unset($tmp);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }
 
 
 
 function MontantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['id_product']); $i++)
    {
       $total += $_SESSION['panier']['quantity'][$i] * $_SESSION['panier']['product_price'][$i];
    }
    return $total;
 }
 
 
 function supprimePanier(){
    unset($_SESSION['panier']);
 }
 
 
 function compterArticles()
 {
    if (isset($_SESSION['panier']))
    return count($_SESSION['panier']['id_product']);
    else
    return 0;
 
 }
 
?>