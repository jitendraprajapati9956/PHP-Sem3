<?php
echo "<h5>Create a php script for given conditions.
If age < 20 or age > 60 print message not valid
age
If age is between 20 to 35 , print message age is
in range of 20 to 35
If age is between 36 to 55 print message age is in
range of 36 to 55
Else print message age is more than 55
</h5>";
function checkAge($age) {
    if ($age < 20 || $age > 60) {
        echo "Not a valid age";
        echo "<br>";
    } elseif ($age >= 20 && $age <= 35) {
        echo "Age is in the range of 20 to 35";
        echo "<br>";
    } elseif ($age >= 36 && $age <= 55) {
        echo "Age is in the range of 36 to 55";
        echo "<br>";
    } else {
        echo "Age is more than 55";
        echo "<br>";
    }
}
$age1 = 18;
$age2 = 25;
$age3 = 40;
$age4 = 65;

var_dump($age1);
echo "<br>";
checkAge($age1);
echo "<br>";
var_dump($age2);
echo "<br>";
checkAge($age2); 
echo "<br>";
var_dump($age3);
echo "<br>";
checkAge($age3); 
echo "<br>";
var_dump($age4);
echo "<br>";
checkAge($age4); 
?>
