<?php
  // это обычный комментарий
  # это тоже обычный комментарий
  /*
  а это
  комментарий
  на несколько
  строк
  */
  // комментарии не могут быть вложены друг в друга!

  $digit = 1;
  $string = "Hello!";
  $array = array("One", "Two", "Three");
  print_r($array);

  $username = "M";

  echo "<br>" . "имя пользователя: " . $username;
  $current_user = $username;
  echo "<br>" . "текущий пользователь: " . $current_user;
  echo "<hr>";
  $count = 100;
  $count2 = ++$count;
  echo $count2 . "<br>";
  $team = ["Bill", "Mary", "Mike", "Chris", "Anne"];
  echo "<br>" . $team[2] . "<br>";
  print_r($team);
  echo "<br>";
  $fruits = array("apple", "pear", "orange", "banana", "peach");
  print_r($fruits);
  echo "<br>";
  echo $fruits[3];
  echo "<br>";
  echo 6 + 8;
  echo "<br>";

  $y = 0;
  if ($y-- == 0) echo $y . "<br>";

  $x = 1;
  if (--$x == 0) echo $x;
  echo "<hr>";

  $msgs = "100+";
  echo "У вас " . $msgs . " сообщений";
  echo "<br>";
  $text = "Hello";
  $text .= " world!";
  echo $text;
  echo "<hr>";
  $number = 12345 * 67890;
  echo substr($number, 3, 1) . "<br>";
  echo "Это строка " . __LINE__ . " в файле " . __FILE__;
  echo "<br>";
  $b = 0;
  $b ? print "TRUE" : print "FALSE";
  echo "<br>";
  
  function longdate($timestamp) {
    return date("l F jS Y", $timestamp);
  }

  echo "today: " . longdate(time()) . "<br>";
  echo "17 days before: " . longdate(time() - 17 * 24 * 60 * 60) . "<br>";

  function longdate2($timestamp) {
    $temp = date("l F jS Y", $timestamp);
    return "Дата: $temp";
  }

  echo longdate2(time()) . "<br>";

  function test() {
    static $count = 0;
    echo $count;
    $count++;
  }

  test();
  echo "<br>";
  test();
  echo "<br>";
  test();
  echo "<br>";
  test();
  echo "<br>";
  print_r($GLOBALS);
  echo "<br>";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3</title>
</head>
<body>
  <? /*echo "<h3>hhhhhhhhhhh</h3>";*/ phpinfo();?>
</body>
</html>