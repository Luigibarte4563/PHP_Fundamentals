<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #form{
            border: solid black 2px;
            text-align: center;
            width: 300px;
            border-radius: 10px;
        }       
        label {
            font-size: 20px;
            font-weight: bold;
        }
        #submit{
            background-color: rgb(0,0,0,0);
            
        }
        #functions{
            border: solid black 2px;
            text-align: center;
            width: 300px;
            border-radius: 10px;
            padding-bottom: 10px;
        }       
    </style>
</head>
<body>
    <form id="form" action="createForm.php" method="POST">
        <label for="">Add Name</label><br>
        <input type="text" name="name"><br>
        <input id="submit" type="submit" value="submit"><br>
    </form>
</body>
</html>

<div id="functions">
<?php
$names = ["luigi", "mert", "shrek", "free"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST['name'];

    if($newName == null) {
        echo "You submited blank form<br>";
        return;
    }
    
    $names[] = $newName;
}

echo "<br>New name: {$newName} ";
echo "<br><br>";

foreach ($names as $name) {
    echo "{$name} <br>";
}
?>
</div>