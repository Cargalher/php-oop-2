<?php
class PremiumCustomer extends Customer
{
    protected $isPremium = true;
    protected $discount;
    public function discount()
        {
            $this ->discount = 20;
            return $this ->discount;
        }
    public function isPremium ()
    {
        return $this ->isPremium;
    }
}