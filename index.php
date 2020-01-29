<?php
  require('./classes/Mechanic.php');
  require('./classes/inventory.php');
  require('./classes/Car.php');
  require('./classes/Honda.php');
  

  $car1 = new Honda('civic', 2, 'green', '25,0000', new Inventory);
  $car1->statement();
  $car1->fixMyCar();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


</head>

<body>
</body>
</html>