<?php
  $paper[] = 'Copier';
  $paper[] = 'Inkjet';
  $paper[] = 'Laser';
  $paper[] = 'Photo';
  echo '<pre>';
  print_r($paper);
  echo '</pre>';
  echo '<br>';

  $paper2 = ['Photo', 'Laser', 'Inkjet', 'Copier'];

  $paper3 = array('Copier', 'Inkjet', 'Laser', 'Photo');


  echo '<pre>';
  print_r($paper2);
  echo '</pre>';

  for ($i = 0; $i < count($paper); $i++) {
    echo "$i: $paper[$i] <br>";
  }

  echo 'Элемент массива paper3: ' . $paper3[2] . '<br>';

  $paper4['copier'] = 'Copier & Multipurpose';
  $paper4['inkjet'] = 'Inkjet Printer';
  $paper4['laser'] = 'Laser Printer';
  $paper4['photo'] = 'Photographic Paper';

  echo '<pre>';
  print_r($paper4);
  echo '</pre>';

  echo $paper4['laser'];

  $paper5 = array(
    'copier' => 'Copier &Multipurpose',
    'inkjet' => 'Inkjet Printer',
    'laser' => 'Laser Printer',
    'photo' => 'Photographic Paper'
  );

  echo 'Элемент массива paper5: ' . $paper5['inkjet'] . '<br>';

  $i = 0;
  foreach ($paper2 as $item) {
    echo "$i: $item" . '<br>';
    $i++;
  }

  foreach ($paper5 as $item => $description) {
    echo "<b>$item:</b> <i>$description</i><br>";
  }
  
  list($a, $b) = ['Alice', 'Bob'];
  echo "a = $a <br> b = $b";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>6</title>
</head>
<body>
  
</body>
</html>