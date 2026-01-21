
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="studentInfo.php" method="POST">
        <label for="">Name:</label><br>
        <input type="text" name="username" require><br><br>

    
        <label for="">Course:</label><br>
        <select name="course" require>
            <option value="">-- Select Course --</option>
            <option value="IT">Information Technology</option>
            <option value="CS">Computer Sceince</option>
            <option value="IS">Information System</option>
        </select><br><br>
        
        <label for="">Year Level:</label><br>
        <input type="radio" name="year" value="1st Year" required> 1st Year <br>
        <input type="radio" name="year" value="2nd Year"> 2nd Year <br>
        <input type="radio" name="year" value="3rd Year"> 3rd Year <br>
        <input type="radio" name="year" value="4th Year"> 4th Year <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    echo "<h3>Form data</h3>";
    echo "Name: {$name} <br>";
    echo "Course: {$course} <br>";
    echo "Year Level: {$year} <br>";
}
?>

</html>