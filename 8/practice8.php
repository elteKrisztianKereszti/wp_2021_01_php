<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice 8.</title>
</head>
<body>
    
  <?php

  $name = 'Krisztián';
  echo 'Hello world!<br/>';
  echo 'Hello ' . $name . '!<br/>';
  echo "Hello ${name}!<br/>";

  function fact($n) {
    if ($n == 1) {
      return $n;
    }
    return $n * fact($n-1);
  }

  // With loop  
  // function fact($n) {
  //   $result = 1;
  //   for ($i = 1; $i <= $n; $i++) {
  //     $result *= $i;
  //   }
  //   return $result;
  // }


  $num = 5;
  echo "fact(${num}) = " . fact($num) . '<br/>';

  // for($i = 1; $i <= 10; ++$i) {
  //   echo '<p style="font-size: ' . $i * 6 .'px">Hello World</p>';
  // }


  $student1 = array(
    'name' => 'Kocak Murat',
    'neptun' => 'FAKEN0',
    'yearOfBirth' => 1900,
    'sex' => 'male',
  );
  $student2 = array(
    'name' => 'Krisztián Kereszti',
    'neptun' => 'SHSVOS',
    'yearOfBirth' => 1667,
    'sex' => 'male',
  );
  $student3 = array(
    'name' => 'Ironman',
    'neptun' => '1R0NMN',
    'yearOfBirth' => 2000,
    'sex' => 'female',
  );
  $student4 = array(
    'name' => 'Black Widow',
    'neptun' => 'BL4CKW',
    'yearOfBirth' => 2001,
    'sex' => 'female',
  );

  $students = array(
    $student1,
    $student2,
    $student3,
    $student4
  );


  $minStudentIndex = 0;
  $minValue = $students[0]['yearOfBirth'];
  for ($i = 1; $i < count($students); ++$i) {
    if ($students[$i]['yearOfBirth'] < $minValue) {
      $minValue = $students[$i]['yearOfBirth'];
      $minStudentIndex = $i;
    }
  }

  $isGirlExists = false;
  for ($i = 0; !$isGirlExists && $i < count($students); ++$i) {
    $isGirlExists = $students[$i]['sex'] == 'female';
  }

  function countOfSex($students, $sex) {
    $c = 0;
    for ($i = 0; $i < count($students); ++$i) {
      if ($students[$i]['sex'] == $sex) {
        $c++;
      }
    }

    return $c;
  }


  $femaleNum = countOfSex($students, 'female');

  $width = 200;
  $unit = $width / count($students);

  $femaleWidth = $unit * $femaleNum;
  $maleWidth = $unit * (count($students) - $femaleNum);
?>

<style>
  table {
    border: 3px solid black;
  }
  td {
    border: 1px solid grey;
  }

  .male {
    height: 20px;
    background-color: #ff0000;
  }
  .female {
    height: 20px;
    background-color: #00ff00;
  }
</style>

<table>
  <tr>
    <td>Name</td>
    <td>Neptun</td>
    <td>Year</td>
    <td>sex</td>
  </tr>
  <?php foreach ($students as $student) : ?>
  <tr>
    <td><?= $student['name']; ?></td>
    <td><?= $student['neptun']; ?></td>
    <td><?= $student['yearOfBirth']; ?></td>
    <td><?= $student['sex']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<p>The oldest student is <?= $students[$minStudentIndex]['name'] ?></p>
<p>Girl is exists? <?= $isGirlExists ? 'Yes' : 'no' ?></p>
<?php 
  var_dump($students);
?>
<div class="male" style="width: <?= $maleWidth ?>px"></div>
<div class="female" style="width: <?= $femaleWidth ?>px"></div>

</body>
</html>
