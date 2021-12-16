<?php
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task2</title>
</head>
<body>
  <?php if (isset($name)) : ?>
    Hello <?= $name; ?>!
  <?php endif; ?>

  <form>
    <input name="name"/>
    <input type="submit" value="SEND" />
  </form>
</body>
</html>