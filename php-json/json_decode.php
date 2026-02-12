<?php
$json = '{"name":"Luigi","age":19,"program":"BSIT"}';

$array = json_decode($json, true);

echo $array['name'] . "<br>";
echo $array['age'] . "<br>";
echo $array['program'] . "<br>";
?>