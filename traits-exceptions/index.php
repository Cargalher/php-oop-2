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
    
}

trait ToDo
{
    public function watch()
    {
        return 'I am watching my favourite artist';
    }
    public function buy()
    {
        return 'I am buying the tickets';
    }
}


/**
 * MovieGenre Class
 */
class Concert
{
use Released, Todo;
}

$coldPlay = new Concert();
$coldPlay -> watch ();
$coldPlay-> buy ();
class MovieGenre
{
    public $genre;
    public function __construct(string $genre)
    {
        $this-> genre=$genre;
    }
}

/**
 * Movie Class
 */

class Movie extends MovieGenre
{
    use released, ToDo;
   protected $name;
   protected $director;
   protected $plot;
   

   public function __construct(string $name, string $director, string $plot)
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
    public function getName()
    {
        return $this ->name;
    }

   public function __construct ($name, $address,$price)   //constructor
   {
      $this -> name = $name;
      $this -> address = $address;
      $this -> price = $price;
      
   }
}
$movie = new Movie('Kill Bill','Quentin Tarantino', 'A former assassin, known simply as The Bride (Uma Thurman), wakes from a coma four years after her jealous ex-lover Bill (David Carradine) attempts to murder her on her wedding day. Fueled by an insatiable desire for revenge, she vows to get even with every person who contributed to the loss of her unborn child, her entire wedding party.');
$cinema = new Cinema ('Odeon','Kingswest, West St, Brighton BN1 2RE, United Kingdom',12.50);

$movie -> getName();
$cinema -> getName();

$movie ->watch();
$movie ->buy();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php $customer ->name();?></h2>
    <p>Lorem ipsum dolor sit amet.</p>
</body>
</html>