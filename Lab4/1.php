<?php
echo "<h5>Create a php script which passes two values and the choice of operation as
parameters of a function . Depending on the choice function should perform the
arithmetic operation on values.
</h5>";

function oper($value1, $value2, $operation) {
    switch ($operation) {
        case '+':
            return $value1 + $value2;
        case '-':
            return $value1 - $value2;
        case '*':
            return $value1 * $value2;
        case '/':
            if ($value2 != 0) {
                return $value1 / $value2;
            } else {
                return "Cannot divide by zero";
            }
        default:
            return "Invalid operation";
    }
}

$value1 = 10;
echo "<b>value1:</b>\n";
echo $value1;
echo "<br>";
$value2 = 5;
echo "<b>value2:</b>\n";
echo $value2;
echo "<br>";
echo "<b>Operation:</b>\n";
$operation = '-'; 
echo $operation ."<br>";
echo "<br>";
$result = oper($value1, $value2, $operation);
echo "Result: " . $result;
?>
