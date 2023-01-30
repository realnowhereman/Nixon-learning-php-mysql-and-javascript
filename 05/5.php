<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5.14-15</title>
</head>
<body>
  <?php
    class User {
    public $name, $password;
    function get_password() {
      return $this->password;
    }
    }

  $object = new User;
  $object->password = "secret";

  echo $object->get_password() . "<hr>";

  $object2 = new User2;
  $object2 -> name = "Alice";

  echo $object2->name;

  class User2 {
    
  }


  ?>
</body>
</html>