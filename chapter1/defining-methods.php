<?php

// 1. Create a Basket class
class Basket
{
    // 2. Add itemsTotal and shippingCost public properties
    public $itemTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal()
    {
        $subTotal = $this->itemTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

// 3. Instantiate a Basket using the new keyword
$basket = new Basket();
// 4. Set values for both properties
$basket->itemTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;
// 5. Use var_dump() and check your work in the browser
//var_dump($basket);
// (localhost:8000/defining-methods.php)

var_dump($basket->calculateSubTotal());