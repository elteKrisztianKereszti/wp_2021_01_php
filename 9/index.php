<?php
  // Process
  //Task2/a
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  }

  //Task2/b
  if (isset($_POST['nameFromForm'])) {
    $nameFromForm = $_POST['nameFromForm'];
  }

  //print_r($_SERVER);
  // Render
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?= "Hello world!" ?></p>
  <h1>Task 2.</h1>
  <h2>a)</h2>
  <?php if (isset($name)) : ?>
  <p>Hello <?= $name ?>!</p>
  <?php endif; ?>
  <h2>b)</h2>
  <form method="post">
    <input name="nameFromForm">
    <input type="submit" value="Let's go">
  </form>
  
  <?php if (isset($nameFromForm)) : ?>
  <p>Hello <?= $nameFromForm ?>!</p>
  <?php endif; ?>
</body>
</html>

