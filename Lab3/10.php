<?php
echo "<h5>Given an unsorted ARRAY and a number N, write a PHP script to find if there exists a
pair of elements in the array whose difference is equal to N. [Note: Solution has multiple
approach with time complexity O(nLogn) and time complexity O(n)</h5>";
// Function to find if there exists a pair in the array with difference N
function onlogn($arr, $N) {
    // Sort the array
    sort($arr);
    
    $n = count($arr);
    $i = 0;
    $j = 1;
    
    while ($i < $n && $j < $n) {
        if ($i != $j && $arr[$j] - $arr[$i] == $N) {
            return true; // Found the pair
        } elseif ($arr[$j] - $arr[$i] < $N) {
            $j++; // Increment j to increase the difference
        } else {
            $i++; // Increment i to decrease the difference
        }
    }
    
    return false; // No such pair found
}

function on($arr, $N) {
    $logn = array();
    
    foreach ($arr as $num) {
        $logn[$num] = true; // Store each number in the hash map
    }
    
    foreach ($arr as $num) {
        $one = $num + $N; // Potential pair with difference N
        $two = $num - $N; // Potential pair with difference -N
        
        // Check if either target exists in the hash map and is not the same number
        if (isset($logn[$one]) && $one != $num) {
            return true;
        }
        if (isset($logn[$two]) && $two != $num) {
            return true;
        }
    }
    
    return false; // No such pair found
}

// Example usage:
$arr = array(5, 9, 3, 1, 7);
$N = 2;

echo "<h1>Approach 1: O(nLogn) Time Complexity</h1>";
echo "Array: ";
print_r($arr); // Print the array using print_r or var_dump for proper display
echo "<br>";
echo "N: $N";
echo "<br>";

if (onlogn($arr, $N)) {
    echo "There exists a pair with difference $N in the array.";
} else {
    echo "No such pair found with difference $N in the array.";
}
echo "<br>";
echo "<h1>Approach 2: O(n) Time Complexity</h1>";

if (on($arr, $N)) {
    echo "There exists a pair with difference $N in the array.";
} else {
    echo "No such pair found with difference $N in the array.";
}
?>
