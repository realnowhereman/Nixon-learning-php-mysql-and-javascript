<?php
  echo "<h1>Hello Ch. 4!</h1>";
  $name = "M";
  $age = 35;

  echo "a: " . 73 . "<br>"; //числовой литерал
  echo "b: " . "Hello" . "<br>"; // строковый литерал
  echo "c: " . FALSE . "<br>"; // литерал константы
  echo $name . "<br>"; // строковая переменная
  echo $age . "<br>"; // числовая переменная
  $day_number = date('z');
  echo "<hr> Дней до нового года: " . $days_to_new_year = 365- $day_number;
  if ($days_to_new_year < 30) {
    echo "<h2>Скоро Новый год!</h2>";
  }
  else {
    echo "<h2>До Нового года еще месяц или больше</h2>";
  }

  echo "<hr>";
  echo "<br>";
  echo "<hr>";

  $a = 2;
  $b = 3;

  if ($a > $b) {
    echo "$a больше $b <br>";
  }
  if ($a < $b) {
    echo "$a меньше $b <br>";
  }
  if ($a <= $b) {
  echo "$a меньше или равно $b <br>";
  }
  if ($a >= $b) {
    echo "$a больше или равно $b <br>";
  }

  echo "<hr>";
  echo "<br>";
  echo "<hr>";
  $bank_balance = 100;
  $savings = 0;
  if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
  }
  elseif ($bank_balance > 200) {
    $savings += 100;
    $bank_balance -= 100;
  }
  else {
    $savings += 50;
    $bank_balance -= 50;
  }

  echo "<hr>";
  echo "<br>";
  echo "<hr>";

  // switch ($page) {
  //   case "Home":
  //     echo "вы выбрали Home";
  //     break;
  //   case "About":
  //     echo "вы выбрали About";
  //     break;
  //   case "News":
  //     echo "вы выбрали News";
  //     break;
  //   case "Login":
  //     echo "вы выбрали Login";
  //     break;
  //   case "Links":
  //     echo "вы выбрали Links";
  //     break;
  //   default:
  //     echo "Нераспознанный выбор";
  //     break;
  // }

  $fuel = 2;
  echo $fuel <= 1 ? "Требуется дозаправка" : "Топлива еще достаточно";

  echo "<hr>";
  $count = 1;
  while ($count < 10) {
    echo " число $count, умноженное на 7, равно " . $count * 7 . "<br>";
    ++$count;
  }

  echo "<hr>";

  //do while
  $count = 1;
  do {
    echo "число $count, умноженное на 7, равно " . $count * 7 . "<br>";
  }
  while (++$count < 10);

  echo "<hr>";
  //for
  for ($count = 1; $count < 10; ++$count) {
    echo "число $count, умноженное на 7, равно " . $count * 7 . "<br>";
  }

  echo "<hr>";
  echo "<br>";
  echo "<hr>";

  $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
  $text = <<<_END
  Line 1
  Line 2
  Line 3
  _END;

  fwrite($fh, $text) or die("Could not write to file");
  fclose($fh);
  echo "file 'testfile.txt' written successfully";

  echo "<hr>";
  echo "<br>";
  echo "<hr>";

  $fp = fopen("text.txt", 'wb') or die ("Failed to create file"); //открывается файл (создается) и указатель на него возвращается переменной $fp
  $data = <<<_END
  text1
  text2
  text3\n\n
  _END;
  for ($j = 0; $j < 10; ++$j) {
    $written = fwrite ($fp, $data);
    if (!$written) {
      fclose($fp);
    }
  }

  $j = 11;
  while ($j > -10) {
    $j--;
    if ($j == 0) {
      echo "на ноль делить нельзя! <br>";
      continue;
    }
    echo (10 / $j) . "<br>";
  }

  echo "<hr>";
  echo "<br>";
  echo "<hr>";

  $a = 56;
  $b = 12;
  $c = $a / $b;
  $d = (int) ($a / $b); // принудительное преобразование в целое число
  $e = round($a / $b); // округление
  $f = intval($a / $b); // возвращает целое значение (часть)
  echo $c . "<br>" . $d . "<br>" . $e . "<br>" . $f;

  echo "<hr>";
  echo "<br>";
  echo "<hr>";
?>