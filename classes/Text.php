<?php
  class Text {
    public $text;

    public function __construct($text){
      $this->text = $text;
      
      return $this;
    }

    public function print(){
      echo $this->text;
    }

    public function reverseIt(){
      $this->text = strrev($this->text);

      return $this;
    }
  }