<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class Animal
  {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name)
    {
      $this->name = $name;
      $this->legs = 4; // Default value
      $this->cold_blooded = "no"; // Default value
    }

    // Getter methods (optional)
    public function get_name()
    {
      return $this->name;
    }

    public function get_legs()
    {
      return $this->legs;
    }

    public function get_cold_blooded()
    {
      return $this->cold_blooded;
    }
  }
  ?>

</body>

</html>