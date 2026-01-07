<?php
$numbers = [1, 2, 3, 4, 5];

$odd = 0;
$even = 0;

foreach ($numbers as $number) {
    if (is_int($number) && $number % 2 != 0) {
        $odd += 1;
    } else {
        $even += 1;
    }
}

echo "Odd: {$odd} <br>";
echo "Even: {$even} <br>"; 
?>