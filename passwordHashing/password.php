<form action="password.php" method="POST">
    <input type="text" name="password">
    <button name="submit">Submit</button>
</form>

<?php
    $password = $_POST['password'];

    if (isset($_POST['submit'])) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

        echo $hashedPassword;
    } else {
        echo "error haha";
    }
?>