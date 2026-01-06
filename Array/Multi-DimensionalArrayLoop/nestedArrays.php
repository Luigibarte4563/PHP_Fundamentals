<?php
$students = [
    ["name" => "Lowigi", "grade" => "98"],
    ["name" => "nam", "grade" => "100"]
];

foreach ($students as $student) {
    echo $student["name"] . ": " . $student["grade"] . "<br>"; 
}
?>