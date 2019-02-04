@extends('layout')
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site du BDE - produit</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/item.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="keywords" content="Site Web, BDE du CESI, Campus CESI, Arras, Projetweb"/>
</head>

    @section('navbar')
        @parent
    @endsection

<body>
    @section('content')



    <?php 
        $url_product="http://localhost:3000/api/products/".$id_product;
        if (isset($url_product)){
            $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
            $resp = $myClient -> request('GET',$url_product,['verify'=>false]);
            if ($resp -> getStatusCode() == 200){
                $body = $resp -> getBody();
                $products = json_decode($body);
                    if(isset($products) && sizeof($products)>0 ){                    
                        $url_pic_product='http://localhost:3000/api/pictures_product/'.$id_product;
                            if (isset($url_pic_product)){
                                $myClient = new GuzzleHttp\Client(['headers'=> ['User-Agent' => 'MyReader']]);
                                $resp = $myClient -> request('GET',$url_pic_product,['verify'=>false]);
                                if ($resp -> getStatusCode() == 200){
                                    $body = $resp -> getBody();
                                    $pic_products = json_decode($body);
                                    if(isset($pic_products) && sizeof($pic_products)>0 ){
                                            echo 
                                            ' <div id="item_name" class="center">
                                            <h2>'.$products[0]->product_name.'</h2>
                                            <p id="price">'.$products[0]->product_price.' €</p>
                                        </div>
                                        <div id="buy_item" class="gridProduct">
                                            <div>
                                                <img id="image_product" class="center" src="http://127.0.0.1:8000/image/'.$pic_products[0]->picture_product_name.'" width="500" height="500">
                                            </div>
                                            <div id="description_item" class="center">
                                                <p>'.$products[0]->product_desc.'</p>
                                            </div> 
                                        </div>
                                        <form class="products" id="addt'.$products[0]->id_product.'" action=http://127.0.0.1:8000/panier/  method="post">
                                            <input type="hidden" name="action" value="ajout">
                                            <input type="hidden" name="id_product" value="'.$products[0]->id_product.'"/>
                                            <input type="hidden" name="product_price" value="'.$products[0]->product_price.'">
                                            <input type="hidden" name="quantity" value="1">
                                            <input id="add_item" type="submit" name="buy" value="Add to cart">                                         
                                        </form>
                                             '; 
                                    };
                                };
                            };
                        };
                    };
                };  

    ?>
<script>
    $(document).ready(function(){
        $( ".products" ).submit(function(event) {
            var frm = $('#'+event.currentTarget.id);
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                dataType : 'html',
                success: function (data) {
                }
            });
        event.preventDefault();
        });
    });
</script>
    @endsection
</body>

    @section('footer')
        @parent
    @endsection

</html>