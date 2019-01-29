<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BDE Cesi - Panier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{  asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <h1 class="title">panier</h1>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th style="text-align: center;">Qty</th>
          <th style="text-align: center;">Remove</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="cart-title">
                <p>Cornerstone Imprint Varsity Jacket - Small</p>                 
            </div>
          </td>
          <td>
            <p>$65.00</p>          
          </td>
          <td>
            <input type="text" size="4" name="updates[21295558066281]" id="updates_21295558066281" value="1" onfocus="this.select();" style="min-width: 0; max-width: 50px; text-align: center; margin: 0 auto 10px; "/>    
          </td>
          <td style="text-align: center">
            <p><a href="#" onclick="remove_item(21295558066281); return false;">X</a></p>
          </td>
          <td>
            <p>$65.00</p>
          </td>
        </tr>
      </tbody>
    </table>
</body>
</html>