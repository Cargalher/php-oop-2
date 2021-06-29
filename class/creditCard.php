<?php

class CreditCard 
{
    protected $number;
    protected $expDate;
    protected $ccv;

    public function __construct($number,$expDate, $ccv)
    {
        $this-> number =$number;
        $this-> expDate =$expDate;
        $this-> ccv =$ccv;
    }
}
// new CreditCard(123455433, '12/22', 345)