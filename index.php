<?php
  require("vendor/autoload.php");
  require("namespace/classes/car/name.php");
  require("namespace/classes/user/name.php");
  

  use App\Car\Name as car;
  use App\User\Name as user;

  $user = new user('John');
  $car = new car('Honda');

  var_dump($user);
  var_dump($car);
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">


</head>

<body>
</body>
</html>