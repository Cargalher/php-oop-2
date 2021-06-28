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
   public function getName ()
   {
      
      return '<strong>Product Name: </strong> ' . '<br>' . $this -> name;
   }
   public function printProduct ()
   {
      
      return '<strong>Product information: </strong> ' .'<br>' . $this -> features;
   }
   public function getPrice ()
   {
      
      return '<strong>Product price: </strong> ' . $this -> price;
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


