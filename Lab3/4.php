<?php
$originalArray = array(30, 50, 40);

$paddedArray = array_pad($originalArray, 5, 0);

echo "Original Array: ";
print_r($originalArray);

echo "<br>";

echo "Padded Array: ";
print_r($paddedArray);
?>
