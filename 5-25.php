<?php
  class WildCat {
    public $fur;
    public function __construct() {
      $this->fur = 'TRUE';
    }
  }

  class Tiger extends WildCat {
    public $stripes;
    public function __construct() {
      parent::__construct();
      $this->stripes = 'TRUE';
    }
  }

  $object = new Tiger();
  echo 'Tigers have... <br>';
  echo 'Fur: ' . $object->fur . '<br>';
  echo 'Stripes: ' . $object->stripes . '<br>';


 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5-24</title>
</head>
<body>
  
</body>
</html>