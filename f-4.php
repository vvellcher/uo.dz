<?php
$discount = 50;

function applyDiscount($price) {
    global $discount;
    $finalPrice = $price - $discount;
    return $finalPrice;
}

echo applyDiscount(500);
?>