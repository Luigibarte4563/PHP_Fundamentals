<?php
function isStrongPassword($password) {
    if (strlen($password) < 8) {
        return false;
    }
    return true;
}

if(isStrongPassword("haha")) {
    echo "Strong Password";
} else {
    echo "Weak Password";
}
?>