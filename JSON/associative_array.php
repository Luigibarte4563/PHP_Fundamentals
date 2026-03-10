<?php
$json_obj = '{"Peter" : 25, "Ben" : 21, "John" : 54}';

$arr = json_decode($json_obj, true);

echo $arr["Peter"] . "<br>";
echo $arr["Ben"] . "<br>";
echo $arr["John"];
?>