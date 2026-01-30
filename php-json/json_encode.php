<?php

header("Content-Type: application/json");

$data = [
    "name" => "Luigi",
    "age" => 19,
    "program" => "BSIT"
];

$json = json_encode($data);

echo $json;
?>