<?php
$ages = [12, 18, 25, 16, 30];

$adults = array_filter($ages, function ($age) {
    return $age >= 18;
});

print_r($adults);
?>
