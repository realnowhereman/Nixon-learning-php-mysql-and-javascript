<?php
  $products = [
    'paper' => [
      'copier' => 'Copier & Multipurpose',
      'inkjet' => 'Inkjet Printer',
      'laser' => 'Laser Printer',
      'photo' => 'Photographic Paper'
    ],
      'pens' => [
        'ball' => 'Ball Point',
        'hilite' => 'Highlighters',
        'marker' => 'Markers'
      ],
    
      'misc' => [
        'tape' => 'Sticky Tape',
        'glue' => 'Adhesives',
        'clips' => 'Paperclips'
      ]
      ];

      echo '<pre>';

      foreach ($products as $section => $items) {
        foreach ($items as $key => $value) {
          echo "<b>$section:</b>\t<i>$key</i>\t($value)<br>";
        }
      }

      echo '</pre>';

      echo $products['misc']['glue'];

      $chessboard = [
        ['r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'],
        ['p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'],
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
        [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
        ['P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'],
        ['R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R']
      ];

      echo '<pre>';

      foreach ($chessboard as $row) {
        foreach ($row as $piece) {
          echo "<b>$piece</b> ";
        }
        echo '<br>';
      }

      echo '</pre>';

      echo $chessboard[7][3] . '<br>';

      echo (is_array($fred)) ? 'Это массив' : 'Это не массив <br>';
      echo (is_array($chessboard)) ? 'Это массив' : 'Это не массив';
      echo '<br>';

      echo count($chessboard);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>6-10</title>
</head>
<body>
  
</body>
</html>