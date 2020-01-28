<?php
  class Inventory{
    public function cartotal($company){
      $companies = [
        "BMW" => 240,
        "Honda" => 177
      ];

      return "There are $companies[$company] models of {$company} left.";
    }
  }