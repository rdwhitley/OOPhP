<?php
require('Car.php');
class Honda extends Car {
  public $doors = 4;
  public $color = "black";
  public $company = 'Honda';

  public function __construct($name,$doors,$color,$price, Inventory $inventory){
    $this->name = $name;
    $this->doors = $doors;
    $this->color = $color;
    $this->price = $price; 
    $this->inventory = $inventory;
  }

  public function statement(){
    echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is {$this->color}</h1>";
    // $this->drive();
    echo $this->inventory->carTotal($this->company);
  }
}
