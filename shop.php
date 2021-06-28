<?php 

class Product     //Product Class
{
 public $name;
 public $desc;
 public $price;



 public function __construct (string $name, string $desc,string $price)
 {
    $this -> name = $name;
    $this -> desc = $desc;
    $this -> price = $price;
 }
}