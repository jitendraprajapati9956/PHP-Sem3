<?php
echo "<h5>Create a php script which demonstrates the working and scope of static
variables. (hint create function having static variable)</h5>";
function countCalls() {
    static $counter = 0; 
    $counter++;
    echo "Function has been called $counter times.<br>";
}

countCalls();
countCalls();
countCalls();
?>
