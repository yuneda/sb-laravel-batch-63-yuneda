<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require_once 'animal.php';
  require_once 'Frog.php';
  require_once 'Ape.php';

  // Release 0
  $sheep = new Animal("shaun");
  echo "Name : {$sheep->name}<br>";
  echo "legs : {$sheep->legs}<br>";
  echo "cold blooded : {$sheep->cold_blooded}<br><br>";

  // Release 1
  $kodok = new Frog("buduk");
  echo "Name : {$kodok->name}<br>";
  echo "legs : {$kodok->legs}<br>";
  echo "cold blooded : {$kodok->cold_blooded}<br>";
  echo "Jump : ";
  $kodok->jump();
  echo "<br><br>";

  $sungokong = new Ape("kera sakti");
  echo "Name : {$sungokong->name}<br>";
  echo "legs : {$sungokong->legs}<br>";
  echo "cold blooded : {$sungokong->cold_blooded}<br>";
  echo "Yell : ";
  $sungokong->yell();
  echo "<br>";
  ?>


</body>

</html>