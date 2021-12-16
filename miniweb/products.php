<?php
  include('helpers/fio.php');
  
  $cat = $_GET['cat'];

  $data = load_file('data/data.json');

  $products = $data[$cat];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - <?= $cat ?></title>
</head>
<body>
  <a href="index.php">Back to main</a>
  <h1>Products - <?= $cat ?></h1>
  <form method="post">
    <ul>
      <?php foreach ($products as $product) : ?>
      <li>
        <input type="checkbox" value="<?= $product ?>" name="products[]">
        <?= $product ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <input id="addToCart" type="submit" value="Add to Cart!">
  </form>
  
  <ul id="cart">
  </ul>
  <a href="order.php">Go to order page</a>
  <script type="text/javascript" src="cart.js"></script>
</body>
</html>
