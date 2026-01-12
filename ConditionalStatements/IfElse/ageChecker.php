<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ageChecker.php" method="POST">
        <label for="Age">Age</label><br>
        <input type="Age" name="age"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

$age = $_POST['age'];

if ($age >= 18) {
    echo "Legal Age";
} else {
    echo "Bata kapa";
}
?>