<?php
  //Варианты создания массивов
  $team = ['Bill', 'Mary', 'Mike'];
  $team2 = array('Chris', 'Anne', 'Pete');
  echo $team[1];
  echo "<hr>";
  echo $team2[1];
  echo "<hr>";
  //двумерный массив
  $oxo = [
    ['x', ' ', 'o'],
    ['o', 'o', 'x (выводимый элемент)'],
    ['x', 'o', ' ']
  ];
  echo $oxo[1][2]; //вывод 3его элемента 2ого элемента родительского массива
  echo "<hr>";
  $x = 100;
  $x += 20;
  echo $x;
  echo "<hr>";
  $y = 0;
  if ($y-- == 0)
    echo $y; //выведет -1
    echo "<hr>";
  //конкатенация
  $msgs = 100;
  echo "you have " . $msgs . " messages.";
  echo '<hr>';
  $info = 'Some text with $variable in it.'; //одинарные кавычки для полного соответствия (имя переменной игнорируется)
  echo $info;
  echo "<hr>";
  $count = 100;
  echo "$count persons have viewed your profile this week"; //двойные кавычки для вывода значения переменной внутри строки
  echo "<hr>";
  //экранирование
  //$text = 'We're the champions'; тут ошибка из-за кавычек
  $right = 'We\'re the champions';
  echo $right;
  $moreRight = "She wrote upon it, \"Return to sender\".";
  echo "<hr>";
  echo $moreRight;
  /*
    управляющие символы
    \t - табуляция
    \n - новая строка
    \r - возврат каретки
  */
  echo "<hr>";
  $wiki =  "Википедия  -\nэнциклопедия XXI века";
  $heading = "Дата\tИмя\tПлатеж";
  echo $wiki;
  echo "<hr>";
  echo $heading;
  $author = "Scott Adams";
  $out = <<<_END
    Normal people believe that if it ain't broke, don't fix it.
  Engineers believe that if it ain't broke, it doesn't have enough
  features yet.
  – $author.
  _END;
  echo "<hr>";
  echo $out;
  echo "<hr>";
$number = 12345 * 67890;
echo substr($number, 3, 1);
echo "<hr>";
$pi = "3.1415927";
$radius = 5;
echo $pi * $radius ** 2;
echo "<hr>";
$b = 5;
$b ? print "TRUE" : print "FALSE";
echo "<hr>";
function longdate($timestamp) {
  return date("l F jS Y", $timestamp);
}

echo longdate(time());
?>