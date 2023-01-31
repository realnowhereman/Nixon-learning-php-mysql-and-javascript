<?php
  class Dad {
    public function test() {
      echo '[Class Dad] Я твой отец <br>';
    }
  }

  class Son extends Dad {
    function test() {
      echo '[Class Son] Я Люк <br>';
    }

    public function test2() {
      parent::test();
    }
  }

  $object = new Son;
  $object->test();
  $object->test2();

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