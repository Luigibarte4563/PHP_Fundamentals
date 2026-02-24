<?php
function customError($message) {
    echo "Custom Error: $message";
}

if (!file_exists("data.txt")) {
    customError("File not found");
} else {
    echo "File is found";
}
?>