`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="plus.php" method="POST">
        <label for="number1">Number 1</label>
        <input type="number" name="num1"><br>
        <label for="number2">Number 2</label>
        <input type="number" name="num2"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        // $total = $num1 + $num2;

        echo $num1 . " + " . $num2 . " = " . ($num1 + $num2);
        return;
    }

    echo "Your method is not POST";
?>`