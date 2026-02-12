<?php
header("Content-Type: application/json");

$response = [
    "status" => "success",
    "message" => "data loaded"
];

echo json_encode($response);
?>