<?php
echo "<h5>Create a PHP script to demonstrate possible ways for variable length arguments. Pass
integer and float values to a functions and calculate
○ sum of all arguments
○ product of all arguments
○ count of integer and real number arguments
○ count of lowercase character, uppercase character and special character</h5>";
// Function to calculate sum of all arguments
function calcSum(...$no) {
    $sum = 0;
    foreach ($no as $num) {
        $sum += $num;
    }
    return $sum;
    
}

// Function to calculate product of all arguments
function calcProduct(...$no) {
    $product = 1;
    foreach ($no as $num) {
        $product *= $num;
    }
    return $product;
}

// Function to count integer and real number arguments
function countintandreal(...$no) {
    $integerCount = 0;
    $realCount = 0;
    foreach ($no as $num) {
        if (is_float($num) || strpos((string)$num, '.') !== false) {
            $realCount++;
        } else {
            $integerCount++;
        }
    }
    return ["integers" => $integerCount, "reals" => $realCount];
}

// Function to count lowercase characters, uppercase characters, and special characters
function countlowercaseuppercasespecial(...$strings) {
    $lowercaseCount = 0;
    $uppercaseCount = 0;
    $specialCharCount = 0;
    foreach ($strings as $str) {
        for ($i = 0; $i < strlen($str); $i++) {
            if (ctype_lower($str[$i])) {
                $lowercaseCount++;
            } elseif (ctype_upper($str[$i])) {
                $uppercaseCount++;
            } elseif (!ctype_alnum($str[$i])) {
                $specialCharCount++;
            }
        }
    }
    return ["lowercase" => $lowercaseCount, "uppercase" => $uppercaseCount, "special" => $specialCharCount];
}

// Example usage
$sum = calcSum(1, 2.5, 3, 4.7, 5);
$product = calcProduct(1, 2.5, 3, 4.7, 5);
$countNumbers = countintandreal(1, 2.5, 3, 4.7, 5);
$countChars = countlowercaseuppercasespecial("Hello", "Jitendra@", "123", "abc", "DEF");

echo "Sum: " . $sum . "\n<br>";
echo "Product: " . $product . "\n<br>";
echo "Integer Count: " . $countNumbers["integers"] . ", Real Count: " . $countNumbers["reals"] . "\n<br>";
echo "Lowercase Count: " . $countChars["lowercase"] . ", Uppercase Count: " . $countChars["uppercase"] . ", Special Char Count: " . $countChars["special"] . "\n<br>";
?>
