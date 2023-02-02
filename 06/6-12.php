<?php
  $temp = explode(' ', 'это предложение из пяти слов');
  print_r($temp);

  echo '<br>';

  $temp = explode('***', 'это***предложение***со***звездочками');
  print_r($temp);
  echo '<br>';
  $temp2 = implode('***', $temp);
  echo $temp2 . '<br><br>';

  $fname = 'Doctor';
  $sname = 'Who';
  $planet = 'Gallifrey';
  $system = 'Gridlock';
  $constellation = 'Kasterborous';

  $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
  print_r($contact);

  echo '<br><br>';

  $j = 23;
  $temp = 'Hello';
  $address = '1 Old Street';
  $age = 61;

  print_r(compact(explode(' ', 'j temp address age')));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>6-12</title>
</head>
<body>
  
</body>
</html>