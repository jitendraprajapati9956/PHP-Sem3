<?php
$x = array(1, 2, 3, 4, 5);

// Delete an element (e.g., the element at index 3)
unset($x[3]);

// Normalize integer keys
$x = array_values($x);

// Display the arrays
echo "Original Array:<br>";
print_r($x);
echo "<br>";

// Sample Output
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

echo "Modified Array:<br>";
print_r($x);
?>
