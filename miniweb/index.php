<?php
  include('helpers/fio.php');
  session_start();

  $cart = [];
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  };

  $data = load_file('data/data.json');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MINI WebShop</title>
</head>
<body>
  <h1>M I N I W E B S H O P</h1>
  <h2>Categories</h2>
  <ul>
    <?php foreach($data as $key => $value) : ?>
      <li><a href="products.php?cat=<?= $key ?>"><?= $key ?></a></li>
    <?php endforeach; ?>
  </ul>

  <?php if (count($cart) > 0) : ?>
  <h2>Cart</h2>
  <ul>
    <?php foreach($cart as $item) : ?>
      <li><?= $item ?></li>
    <?php endforeach; ?>
  </ul>
  <a href="order.php">Go to order page</a>
  <?php endif; ?>

  <a href="orders.php">Orders</a>

</body>
</html>
