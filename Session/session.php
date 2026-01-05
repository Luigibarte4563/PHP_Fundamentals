<?php
session_start();

$_SESSION['user'] = "Luigi";

echo "Session user: " . $_SESSION['user'];
?>