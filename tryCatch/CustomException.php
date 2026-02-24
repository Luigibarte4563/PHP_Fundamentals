<?php
function devide($a, $b) {
    if($b == 0) {
        throw new Exception("Cannot devide by zero");
    }
    return $a / $b;
}

try {
    devide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>