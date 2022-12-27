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
  ?>