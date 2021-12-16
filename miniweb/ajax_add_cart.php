<?php
  if ($_POST) {
    session_start();

    $cart = [];
    if (isset($_SESSION['cart'])) {
      $cart = $_SESSION['cart'];
    };

    if ($_POST) {
      $cart = array_merge($cart, json_decode($_POST['products']));
      $_SESSION['cart'] = $cart;
    }
  }

  var_dump($_POST);
?>


