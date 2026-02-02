<?php
if (empty($_GET['name'])) {
    echo "You need to enter a name";
} else {
    echo "hello {$_GET['name']}";
}
?>