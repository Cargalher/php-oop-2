<?php 

class Product     //Product Class
{
 public $name;
 public $features;
 public $price;
 



   public function __construct ($name, $features,$price)   //constructor
   {
      $this -> name = $name;
      $this -> features = $features;
      $this -> price = $price;
      
   }

   public function printProduct ()
   {
      
      return 'Product information: ' . $this -> features;
   }

}
class Phone extends Product
{
  function __construct ($name, $features,$price, $model, $conectivity)
   {
      parent::__construct ($name, $features,$price);
      $this -> model = $model;
      $this -> connectivity = $conectivity;
   }
}
// product Instance
$phone = new Product ('Galaxy S21', 'Edge Display, 4K Video Recording, Wireless Charging, Fingerprint Scanner, Multi-SIM',899.99);
// var_dump($phone);




$watch = new Product ('Garmin Forerunner', 'From open water swims to long training rides, this watch is up to the challenge. Its high-performance silicone band and durable Corning® Gorilla® Glass DX lens can handle just about anything.', 600.99);
// var_dump($watch -> name);
// var_dump($watch -> features);
// var_dump($watch -> price);

class Customer extends Product
{
   function __construct ($name, $features,$price, $qty,  $idname, $creditCard, $discount)
   {
      parent::__construct ($name, $features,$price, $qty);
      $this ->idname = $idname;
      $this ->creditCard = $creditCard;
      $this -> discount = $discount;
   }

}

