<?php
// Function to find if there exists a pair in the array with difference N
function findPairWithDifference($arr, $N) {
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

function findPairWithDifferenceLinear($arr, $N) {
    $hashMap = array();
    
    foreach ($arr as $num) {
        $hashMap[$num] = true; // Store each number in the hash map
    }
    
    foreach ($arr as $num) {
        $target1 = $num + $N; // Potential pair with difference N
        $target2 = $num - $N; // Potential pair with difference -N
        
        // Check if either target exists in the hash map and is not the same number
        if (isset($hashMap[$target1]) && $target1 != $num) {
            return true;
        }
        if (isset($hashMap[$target2]) && $target2 != $num) {
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

if (findPairWithDifference($arr, $N)) {
    echo "There exists a pair with difference $N in the array.";
} else {
    echo "No such pair found with difference $N in the array.";
}
echo "<br>";
echo "<h1>Approach 2: O(n) Time Complexity</h1>";

if (findPairWithDifferenceLinear($arr, $N)) {
    echo "There exists a pair with difference $N in the array.";
} else {
    echo "No such pair found with difference $N in the array.";
}
?>
