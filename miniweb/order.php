<?php
  include('helpers/fio.php');

  session_start();

  $cart = [];
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  };

  if (count($cart) == 0) {
    die("Invalid usage, cart is empty!");
  }

  if ($_POST) {
    if ($_POST['name'] || $_POST['address']) {
      $_POST['products'] = $_SESSION['cart'];
      $orders = load_file('data/orders.json');
      $orders[] = $_POST;
      save_file('data/orders.json', $orders);
      $_SESSION['cart'] = [];
      $cart = [];
      header('Location: success_order.php');
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
</head>
<body>
  <a href="index.php">Back to main</a>
  <form method="post">
    <p>Name: <input name="name"></p>
    <p>Address: <input name="address"></p>
    <ul>
      <?php foreach ($cart as $item) : ?>
      <li><?= $item ?></li>
      <?php endforeach; ?>
    </ul>
    <input type="submit" value="Order it!"/>
  </form>
</body>
</html>