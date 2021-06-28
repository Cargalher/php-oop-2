<?php 

class Product     //Product Class
{
 public $name;
 public $features;
 public $price;
 public $qty;



   public function __construct ($name, $features,$price, $qty = 1 )   //constructor
   {
      $this -> name = $name;
      $this -> features = $features;
      $this -> price = $price;
      $this -> qty = $qty;
   }

   public function inform ()
   {
      return 'Product information: ' . $this -> features;
   }

}
class Phone extends Product
{
  function __construct ($name, $features,$price, $qty, $model, $conectivity)
   {
      parent::__construct ($name, $features,$price, $qty);
      $this -> model = $model;
      $this -> connectivity = $conectivity;
   }
}
// product Instance
$smartphone = new Product ('Galaxy S21', 'Edge Display, 4K Video Recording, Wireless Charging, Fingerprint Scanner, Multi-SIM',899.99);
var_dump($smartphone);