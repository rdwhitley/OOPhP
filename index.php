<?php
  require("vendor/autoload.php");
  

  $car1 = new Honda('civic', 2, 'green', '25,0000', new Inventory);
  $car1->statement();
  $car1->fixMyCar();

  $text = new Text('I"m listening to SOCA');
  $text->reverseIt()->print();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


</head>

<body>
</body>
</html>