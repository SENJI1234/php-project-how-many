<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>

  <form action="" method="post">
    <label for="">quantity</label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
    
    </form>
    
  </body>
  </html>
  <?php
  if(isset($_POST["quantity"]) && is_numeric($_POST["quantity"])){
    $items = "pizza";
    $price = 5.50;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;


    echo "your order is {$quantity} {$items}s<br>";
    echo "your total is: {$total}";

  }else if(isset($_POST["quantity"])){
   echo "that is not a number";
  }
  ?>