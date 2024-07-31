<?php
echo "<h5>Create a php script which creates a function having choice and string as
parameter and perform the following task on string based on choice. The
function should return the answer.
○ Reverse the string.
○ Count the length of the string
○ Display the first word of the string.
○ Display the last five words from the string.
○ Display characters from position 5 to 15 from the string</h5>";
function manipulateString($choice, $str) {
    switch ($choice) {
        case 'reverse':
            return strrev($str);
        case 'length':
            return strlen($str);
        case 'first_word':
            $words = explode(' ', $str);
            return $words[0];
        case 'last_five_words':
            $words = explode(' ', $str);
            $lastFiveWords = array_slice($words, -5);
            return implode(' ', $lastFiveWords);
        case 'substring':
            return substr($str, 4, 11);
        default:
            return "Invalid choice";
    }
}
echo "<h5>string function switch case</h5>";

$choice = 'last_five_words';
$str = "PHP is a server-side scripting language, so the 
        code written in the PHP file is executed on the server.";

echo "$choice <br> ";
echo "$str <br> ";

$result = manipulateString($choice, $str);
echo "<br>";
echo "<b>Result:</b> $result";

?>
