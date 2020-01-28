<?php

  include('./classes/Honda.php');
  require('./classes/inventory.php');

  $car1 = new Honda('civic', 2, 'green', '25,0000', new Inventory);
  $car1->statement();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


</head>

<body>
</body>
</html>