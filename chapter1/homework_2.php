<?php

class Basket
{
    public $itemTotal;
    public $shippingCost;
    // 1. Add a public discount property.
    public $discount;

    public function calculateSubTotal()
    {
        // 2. Rewrite **calculateSubTotal()** so that discount is deducted.
        $subTotal = $this->itemTotal + $this->shippingCost - $this->discount;

        return $subTotal;
    }
}

$basket = new Basket();
$basket->itemTotal = 50;
$basket->shippingCost = 10;
// 3. Set a discount value of 30.
$basket->discount = 30;
// 4. Dump and check that the browser displays the correct subtotal.
var_dump($basket->calculateSubTotal());
// (localhost:8000/defining-methods.php)
