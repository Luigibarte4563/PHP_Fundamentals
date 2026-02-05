<?php
function isAdult($age) {
    if ($age >= 18) {
        return true;
    }

    return false;
}

if (isAdult(18)) {
    echo "access granted";
} else {
    echo "you are not allowed";
}
?>