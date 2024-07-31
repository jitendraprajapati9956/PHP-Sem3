<?php
$myArray = array(10, 20, 30, 40, 50);

$searchValue = 30;

if (in_array($searchValue, $myArray)) {

    $index = array_search($searchValue, $myArray);

    echo "Value $searchValue is present at index $index.";
} 
else {
    echo "Value $searchValue is not present in the array.";
}
?>
