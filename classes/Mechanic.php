<?php

abstract class Mechanic{
  public function fixMyCar(){
    echo "<h3>Fix My Damn {$this->getCarColor()} Car</h3>";
  }

  abstract public function getCarColor();

}
?>