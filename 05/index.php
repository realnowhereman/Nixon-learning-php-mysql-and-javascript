<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    //Ch-05
    echo date("l") . "<br>";
    // echo phpinfo();
    echo strrev(".dlrow olleH") . "<br>";
  echo str_repeat("Hip", 2) . "<br>";
  echo strtoupper("hooray!");
  echo "<hr><a href=\"https://stackoverflow.com/questions/60678203/is-it-possible-to-use-live-server-for-php-with-autoreload-on-save\" target=\"_blank\">php server autoreload</a><hr>";

  $lowered = mb_strtolower("ПреДложеНИе Для пРиМеРа.");
  $lowered2 = mb_strtolower("люБОЕ нУжное Вам количество Букв и Знаков Пунктуации");
  echo mb_strtolower("aNY # of Letters and Punctuation you WANT");
  echo "<br>";
  echo $lowered;
  echo "<br>";
  echo $lowered2;
  echo "<hr>";
  echo setlocale(LC_CTYPE, '');
  echo "<hr>";
  echo "<br>";
  echo '<hr>';
  print(5 - 8);
  echo "<br>";
  print(abs(5 - 8));

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  $temp = ucfirst(mb_strtolower("РаЗнЫе БуКвЫ."));
  echo $temp;

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  function fix_names($n1, $n2, $n3) {
  $n1 = ucfirst(mb_strtolower($n1));
  $n2 = ucfirst(mb_strtolower($n2));
  $n3 = ucfirst(mb_strtolower($n3));

  return $n1 . " " . $n2 . " " . $n3;
  }

  echo fix_names("wiLLiaM", "henry", "gatES");

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  function fix_names2($n1, $n2, $n3) {
  $n1 = ucfirst(mb_strtolower($n1));
  $n2 = ucfirst(mb_strtolower($n2));
  $n3 = ucfirst(mb_strtolower($n3));

  return [$n1, $n2, $n3];
  }

  $names2 = fix_names2("wiLLiaM", "henry", "gatES");
  echo $names2[0] . " " . $names2[1] . " " . $names2[2];

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";

  echo $a1 . " " . $a2 . " " . $a3 . "<br>";

  function fix_names3(&$n1, &$n2, &$n3) {
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
  }

  fix_names3($a1, $a2, $a3);
  echo $a1 . " " . $a2 . " " . $a3;

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";

  echo $a1 . " " . $a2 . " " . $a3 . "<br>";

  function fix_names4() {
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));
  }

  fix_names4();
  echo $a1 . " " . $a2 . " " . $a3;

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

  if (function_exists("array_combine")) {
    echo "Функция существует";
  }
  else {
    echo "Функция не существует, желательно создать ее самостоятельно";
  }

  print "<br>" . phpversion();

  echo "<hr>";
  echo "<br>";
  echo '<hr>';

echo '<h3>Objects, classes</h3>';

$object = new User;
print_r($object);

class User {
  public $name, $password;
  function save_user() {
    echo "Здесь код, сохраняющий данные пользователя <br>";
  }
}

$temp = new User('name', 'password');

echo "<hr>";
echo "<br>";
echo '<hr>';

$object2 = new User;
print_r($object2);
echo "<br>";
$object2 -> name = "Joe";
$object2 -> password = "mypass";
print_r($object2);
echo "<br>";
$object2 -> save_user();

$object3 = new User3();
$object3 -> name = "Alice";
$object4 = $object3;
$object4->name = "Amy";
echo "object3 name = " . $object3->name . "<br>";
echo "object4 name = " . $object3->name . "<hr>";

$object5 = new User3;
$object5->name = "Alice";
$object6 = clone $object5;
$object6->name = "Amy";
echo "object5 name = " . $object5 -> name . "<br>";
echo "object6 name = " . $object6 -> name . "<br>";

class User3 {
  public $name;
}

?>
</body>
</html>