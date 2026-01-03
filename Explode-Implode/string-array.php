<?php
$text = "banana,strawberry,hotdog";

$array = explode(",", $text);
print_r($array);

echo "<br>";

echo implode(" | ", $array);
?>