<?php

class Bill
{
    public $dinner = 100;
    public $dessert = 40;
    public $soda   = 20;
    public $bill;
    //if made private , cannot be accessed by object outside class

    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
        // echo $this;
        return $this;
    }

    public function dessert($person)
    {
        $this->bill += $this->dessert * $person;
        return $this;
    }

    public function soda($person)
    {
        $this->bill += $this->soda * $person;
        return $bill;
    }
}

$bill = new Bill();
echo $bill->dinner(5)->dessert(5)->bill;
