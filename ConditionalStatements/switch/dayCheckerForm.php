<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dayCheckerForm.php" method="POST">
        <label for="">day</label><br>
        <input type="text" name="day"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>

<?php
    $day = $_POST["day"];

    switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday";
        echo "Almost weekend";
        break;
    default:
        echo "Regular day";
        break;
    }
?>