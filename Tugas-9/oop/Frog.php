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

  class Frog extends Animal
  {
    public function __construct($name)
    {
      parent::__construct($name);
    }

    public function jump()
    {
      echo "hop hop\n";
    }
  }
  ?>

</body>

</html>