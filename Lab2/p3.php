<!-- Create a php script which changes the data types using appropriate values. And display
the new data types (integer to string , string to integer, Boolean to integer, integer to
float, float to integer) -->
<?php
    $num = 11;
    $num3 = 3.14;
    $str = "7048";
    $boole = true;
    echo "<br>"; 

    $str1 = strval($num);
    echo "int to Strig:$str1";
    echo "<br>";
    $strToint = intval($str);
    echo "String to int:$strToint";
    echo "<br>";
    $boolToint = intval($boole);
    echo "Boolean to int:$boolToint";
    echo "<br>";
    $intTofloat = floatval($num);
    echo "int to float:$intTofloat";
    echo "<br>";
    $floatToint = intval($num3);
    echo "float to int:$floatToint";
    echo "<br>";
    
?>