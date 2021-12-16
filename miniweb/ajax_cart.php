<?php
  session_start();

  $cart = [];
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  };

  echo json_encode($cart);
?>
