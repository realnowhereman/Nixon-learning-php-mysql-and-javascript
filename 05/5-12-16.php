<?php
  class User {
    public $name, $password;

    public function getPassword() {
      return $this->password;
    }
  }
  
  class User2 {
    public $name, $password;

    public function __construct($name, $password) {
      $this->name = $name;
      $this->password = $password;
    }

    public function getPassword() {
      return $this->password;
    }
  }

$object1 = new User();
$object1->name = 'Alice';
$object2 = clone $object1;
$object2->name = 'Amy';

$object3 = new User();
$object3->name = 'Object3';
$object3->password = 'Obj3Pass';

echo 'object1 name = ' . $object1->name . '<br>';
echo 'object2 name = ' . $object2->name . '<br>';

echo $object3->name . '<br>';
echo $object3->password . '<br>';
echo $object3->getPassword() . '<br>';

$object4 = new User2('John', '12345');
echo $object4->name . '<br>';
echo $object4->password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5-12</title>
</head>
<body>
  
</body>
</html>