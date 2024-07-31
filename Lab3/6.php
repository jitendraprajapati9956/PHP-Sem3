<?php
$marks = array(
    "A" => 50,
    "B" => 46,
    "C" => 52,
    "D" => 19,
    "E" => 90
);

asort($marks);

echo "Array sorted by marks in ascending order:<br>";
foreach ($marks as $name => $mark) {
    echo "$name: $mark<br>";
}

echo "<br>";

krsort($marks);
echo "Array sorted by names in descending order:<br>";
foreach ($marks as $name => $mark) {
    echo "$name: $mark<br>";
}
?>
