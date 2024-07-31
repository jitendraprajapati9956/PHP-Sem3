<?php
echo "<h5>Create a php script which checks whether the number is palindrome or not.
E.d 121 is a palindrome number.
</h5>";
function isPalindrome($number) {
    $numberString = strval($number);
    $reverseString = strrev($numberString);

    return $numberString === $reverseString;
}
$number1 = 121;
var_dump($number1);
echo "<br>";
echo "<br>";
echo "$number1 is " . (isPalindrome($number1) ? "a palindrome" : "not a palindrome");
?>
