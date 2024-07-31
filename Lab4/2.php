<?php
echo "<h5>Create a php script which passes the array into function as a parameter. The
function then counts the total number of odd, even and prime numbers.
</h5>";
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    
    return true;
}

function count_odd_even_prime($arr) {
    $oddCount = 0;
    $evenCount = 0;
    $primeCount = 0;
    
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $evenCount++;
        } else {
            $oddCount++;
        }
        
        if (is_prime($num)) {
            $primeCount++;
        }
    }
    
    echo "Total odd numbers: $oddCount\n<br>";
    echo "Total even numbers: $evenCount\n<br>";
    echo "Total prime numbers: $primeCount\n<br>";
}

$numbers = array(2, 3, 5, 6, 7, 9, 11, 12, 13, 17);

echo "<pre>";
print_r($numbers);
echo "</pre>";


count_odd_even_prime($numbers);

?>
