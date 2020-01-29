<?php

  interface InventoryInterface{
    public function carsSold($numOfCars);
  }

  class Inventory implements InventoryInterface {
    public function cartotal($company){
      $companies = [
        "BMW" => 240,
        "Honda" => 177
      ];

      return "There are $companies[$company] models of {$company} left.";
    }

    public function carsSold($numOfCars){
      return "<h2>I've sold {$numOfCars} amount of cars</h2>";
    }
  }