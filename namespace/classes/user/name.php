<?php

namespace App\User;
class Name {
  public function __construct($name){
    $this->$name = $name;
    return 'Your name is John.';
  }
}