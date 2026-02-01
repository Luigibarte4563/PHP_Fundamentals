<form action="process.php" method="GET" class="form">
    <label for="name">Name:</label><br>
    <input type="text" name="name" placeholder="enter your name here"><br>
    <label for="age">Age:</label><br>
    <input type="number" name="age" placeholder="enter your age here"><br>
    <button name="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'] ?? null;
        $age = $_POST['age'] ?? null;

        echo "hello {$name} you're age is {$age}";
    } else {
        echo "you need to enter the fields";
    }    
} else {
    echo "You're method is not POST you need to change to POST";
}
?>