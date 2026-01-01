<?php

$prices = [120, 10, 15, 20];
$total = 0;

foreach($prices as $price) {
    echo "Total {$total} + {$price} <br>";
    $total += $price;
}

echo "Total is: {$total}";
?>