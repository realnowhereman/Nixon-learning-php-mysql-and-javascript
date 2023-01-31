<?php
  class Test {
    static $staticProperty = 'это статическое св-во';
  public $pubProp = 'this is public prop';

    public function getSp() {
      return self::$staticProperty;
    }
  }

  class User {
    public $name, $password;
    public function saveUser() {
      echo 'here is code to save user';
    }
  }

  class Subscriber extends User {
    public $phone, $email;

    public function display() {
      echo 'Name: ' . $this->name . '<br>';
      echo 'Pass: ' . $this->password . '<br>';
      echo 'Phone: ' . $this->phone . '<br>';
      echo 'Email: ' . $this->email . '<br>';
    }
  }

  $temp = new Test();

echo 'Test A: ' . Test::$staticProperty. '<br>';
echo 'Test B: ' . $temp->getSp() . '<br>';
echo 'Test C: ' . $temp->pubProp . '<br>';
// echo 'Test D: ' . $temp->staticProperty . '<br>'; выдаст ошибку из-за невозможности обращаться к статическому св-ву в объекте
echo '<hr>';

$object = new Subscriber();
$object->name = 'Fred';
$object->password = 'pword';
$object->phone = '012 345 6789';
$object->email = 'fred@bloggs.com';
$object->display();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5-22</title>
</head>
<body>
  
</body>
</html>