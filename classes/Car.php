<?php

class Car {
  public $doors = 4;
  public $color = "black";
  public static $states = [
    'NY',
    'NJ',
    'PA',
    'DE'
  ];
  
  public function statement(){
	echo "{this->company} {$this->name} has {$this->doors} and the color is {$this->color}";	
  }

  protected static function drive(){
    foreach(self::$states as $state){
      echo "I've driven to ${state} <br>";
    }
  }
}
