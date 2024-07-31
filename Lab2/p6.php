<?php
echo "<h5> Create a php script which performs string operations.
</h5>";
    $str1 = "Hello";
    $str2 = "DDU";

    var_dump($str1);
    echo "<br>";
    var_dump($str2);
    echo "<br>";
    echo "<br>";
    
    $con = $str1.$str2;

    $str1 .= $str2;

    echo "<b>Concatenation::<b>$con";
    echo "<br>";
    echo "<b>Concatenation & Assighment::$str1<b>";

    

?>
