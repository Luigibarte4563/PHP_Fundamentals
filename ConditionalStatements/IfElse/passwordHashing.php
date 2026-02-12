<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="passwordHashing.php" method="post">
        <label for="Password">Password</label>
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>

<?php

$password = $_POST['password'];

$hashed = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("1234", $hashed)) {
    echo "Password Correct";
} else {
    echo "Wrong Password";
}
?>