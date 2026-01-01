<?php
$users = [
    ["username" => "admin", "password" => "1234"],
    ["username" => "user", "password" => "abcd"]
];

$inputUser = "admin";
$inputPass = "1234";

$loginSuccess = false;

foreach ($users as $user) {
    if($user["username"] == $inputUser && $user["password"] === $inputPass) {
        $loginSuccess = true;
        break;
    }
}

echo $loginSuccess ? "Login successfull" : "Invalid login";
?>