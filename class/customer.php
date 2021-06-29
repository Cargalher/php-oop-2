<?php


class Customer
{
   protected $name;
   protected $lastname;
   protected $email;
   protected $username;
   protected $password;

   public function __(string $name, string $lastname, string $email, string $username, string $password)
   {
      $this-> name =$name;
      $this-> name =$lastname;
      $this-> name =$email;
      $this-> name =$username;
      $this-> name =$password;
   }
}
// class Customer extends Product{
//    public $standard;

//    public function setDiscount ($standard){
//       $this-> standard =$standard;
//    }
// }