<?php

/* Syntax TRAITS
    - "Trait" key word
    -  Class Name
    -  Braces ({})
    -  Class Code
*/


trait released
{
    public $year = 2021;
    protected $name;
    public function getName ()
    {
        return $this->name;
    }
    public function calcAge()
    {
        return 'Old';
    }
}










/**
 * Movie Class
 */
class Movie
{
    use released;
   protected $name;
   protected $director;
   protected $plot;
   

   public function __(string $name, string $director, string $plot)
   {
      $this-> name =$name;
      $this-> director =$director;
      $this-> plot =$plot;
      
   }
   
}

/**
 * Customer Class
 */
class Customer
{
    public $name;
    public $lastnamename;
    public $age;

    public function getName()
    {
        return $this ->name;
    }
}

/**
 * Cinema Class
 */

class Cinema     //Product Class
{
    use released;
    public $name;
    public $address;
    public $price;
 

   public function __construct ($name, $address,$price)   //constructor
   {
      $this -> name = $name;
      $this -> address = $address;
      $this -> price = $price;
      
   }
}
$customer = new Customer('lorem','lorem lorem', 25);
$cinema = new Cinema ('Odeon','Kingswest, West St, Brighton BN1 2RE, United Kingdom',12.50);

$customer -> getName();
$cinema -> getName();



$customer ->year;
$cinema ->year;