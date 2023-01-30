<?php
  class User {
    public $name, $password;
    function saveUser() {
      echo "тут код, сохраняющий данные пользователя";
    }
  }

$object = new User();
print_r($object);
echo '<br>';

$object->name = 'Joe';
$object->password = 'mypass';
print_r($object);
echo '<br>';
$object->saveUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5.11</title>
</head>
<body>
  
</body>
</html>