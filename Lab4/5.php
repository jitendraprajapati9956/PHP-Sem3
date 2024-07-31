<?php
$sampleString = "Hello, World! This is a PHP string function demo.";

$quotedString = addcslashes($sampleString, 'W');
echo "addcslashes(): $quotedString<br>";

$escapedString = addslashes($sampleString);
echo "addslashes(): $escapedString<br>";

$binaryData = "Hello, World!";
$hexString = bin2hex($binaryData);
echo "bin2hex(): $hexString<br>";

$asciiValue = 65; 
$character = chr($asciiValue);
echo "chr(): $character<br>";


$chunkedString = chunk_split($sampleString, 5, '|');
echo "chunk_split():<br>$chunkedString<br>";

$charInfo = count_chars($sampleString, 1);
echo "count_chars():<br>";
print_r(array_map('chr', array_keys($charInfo)));
echo "<br>";

echo "echo(): $sampleString<br>";

$explodedArray = explode(" ", $sampleString);
echo "explode(): ";
print_r($explodedArray);
echo "<br>";

$implodedString = implode("-", $explodedArray);
echo "implode(): $implodedString<br>";

$joinedString = join(" ", $explodedArray);
echo "join(): $joinedString<br>";

$lowercasedString = lcfirst($sampleString);
echo "lcfirst(): $lowercasedString<br>";

$trimmedString = ltrim($sampleString, "Hello");
echo "ltrim(): $trimmedString<br>";

$md5Hash = md5($sampleString);
echo "md5(): $md5Hash<br>";

$number = 1234567.89;
$formattedNumber = number_format($number, 2, '.', ',');
echo "number_format(): $formattedNumber<br>";

$firstCharAscii = ord($sampleString[0]);
echo "ord(): $firstCharAscii<br>";

$queryString = "name=John&age=30";
parse_str($queryString, $outputArray);
echo "parse_str():<br>";
print_r($outputArray);
echo "<br>";

print("print(): $sampleString<br>");

$number = 42;
printf("printf(): The answer to the universe is %d", $number);

$rightTrimmedString = rtrim($sampleString, "demo.");
echo "rtrim(): $rightTrimmedString<br>";

setlocale(LC_ALL, "en_US");
echo "setlocale(): Locale set to en_US<br>";

$sha1Hash = sha1($sampleString);
echo "sha1(): $sha1Hash<br>";

$paddedString = str_pad($sampleString, 50, "_", STR_PAD_BOTH);
echo "str_pad(): $paddedString<br>";

$repeatedString = str_repeat("PHP ", 3);
echo "str_repeat(): $repeatedString<br>";

$replacedString = str_replace("World", "Universe", $sampleString);
echo "str_replace(): $replacedString<br>";

$shuffledString = str_shuffle($sampleString);
echo "str_shuffle(): $shuffledString<br>";

$stringArray = str_split($sampleString, 5);
echo "str_split(): ";
print_r($stringArray);
echo "<br>";

$wordCount = str_word_count($sampleString);
echo "str_word_count(): $wordCount<br>";

$compareResult = strcasecmp("apple", "APPLE");
echo "strcasecmp(): $compareResult<br>";

$foundString = strchr($sampleString, "This");
echo "strchr(): $foundString<br>";

$compareResult = strcmp("apple", "banana");
echo "strcmp(): $compareResult<br>";

$strippedString = strip_tags("<p>Hello</p> <b>World</b>");
echo "strip_tags(): $strippedString<br>";

$quotedString = "This is a single-quoted string: 'Hello, World!'";
$unquotedString = stripslashes($quotedString);
echo "stripslashes(): $unquotedString<br>";

$position = stripos($sampleString, "PHP");
echo "stripos(): Position of 'PHP' is $position<br>";

$substring = stristr($sampleString, "This");
echo "stristr(): $substring<br>";

$length = strlen($sampleString);
echo "strlen(): Length of the string is $length<br>";

$compareResult = strnatcasecmp("file11.txt", "file2.txt");
echo "strnatcasecmp(): $compareResult<br>";

$compareResult = strnatcmp("file11.txt", "file2.txt");
echo "strnatcmp(): $compareResult<br>";

$compareResult = strncasecmp("apple", "APPLE", 3);
echo "strncasecmp(): $compareResult<br>";

$compareResult = strncmp("apple", "banana", 3);
echo "strncmp(): $compareResult<br>";

$foundChars = strpbrk($sampleString, 'abc');
echo "strpbrk(): Characters found: $foundChars<br>";

$position = strpos($sampleString, "World");
echo "strpos(): Position of 'World' is $position<br>";

$lastOccurrence = strrchr($sampleString, 'i');
echo "strrchr(): $lastOccurrence<br>";

$reversedString = strrev($sampleString);
echo "strrev(): $reversedString<br>";

$position = strripos($sampleString, "This");
echo "strripos(): Position of 'This' is $position<br>";

$position = strrpos($sampleString, "World");
echo "strrpos(): Position of 'World' is $position<br>";

$substring = strstr($sampleString, "This");
echo "strstr(): $substring<br>";

$lowercaseString = strtolower($sampleString);
echo "strtolower(): $lowercaseString<br>";

$uppercaseString = strtoupper($sampleString);
echo "strtoupper(): $uppercaseString<br>";

$substring = substr($sampleString, 7, 5);
echo "substr(): $substring<br>";

$occurrences = substr_count($sampleString, "is");
echo "substr_count(): 'is' occurs $occurrences times<br>";

$replacedString = substr_replace($sampleString, "Greetings", 0, 5);
echo "substr_replace(): $replacedString<br>";

$trimmedString = trim($sampleString, "Hedmo.");
echo "trim(): $trimmedString<br>";

?>