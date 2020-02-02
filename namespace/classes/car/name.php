<?php


namespace App\Car;
class Name {

  public function __construct($name){
    $this->$name = $name;
    return 'You have a Honda.';
  }
}