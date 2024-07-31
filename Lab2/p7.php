<?php
echo "<h5> Create a php script which demonstrates the scope of local variables. {display
the appropriate error also in output by making changes into script)";

function demonstrateLocalScope() {
    $localVar = "I am a local variable::";
    echo "Inside the function::$localVar";
    echo "<br>";
}
echo "Outside the function::$localVar";

?>
