q<?php
// Create a 3x2 matrix as a multidimensional array
$matrix = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);

// Display the matrix
echo "<h3>Matrix:</h3>";
echo "<table>";
for ($row = 0; $row < 3; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 2; $col++) {
        echo "<td>" . $matrix[$row][$col] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Initialize matrices for addition, subtraction, and multiplication
$addMatrix = $matrix;
$subMatrix = $matrix;
$mulMatrix = array(
    array(0, 0),
    array(0, 0),
    array(0, 0)
);

// Constants for addition and subtraction
$addValue = 10;
$subValue = 5;

// Compute addition and subtraction
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 2; $col++) {
        $addMatrix[$row][$col] += $addValue;
        $subMatrix[$row][$col] -= $subValue;
    }
}

// Compute multiplication (each element by 2)
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 2; $col++) {
        $mulMatrix[$row][$col] = $matrix[$row][$col] * 2;
    }
}

function displayMatrix($title, $matrix) {
    echo "<h3>$title</h3>";
    echo "<table>";
    for ($row = 0; $row < 3; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 2; $col++) {
            echo "<td>" . $matrix[$row][$col] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        table {
            width: 30%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h3 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <?php
    displayMatrix("Matrix", $matrix);
    displayMatrix("Addition (each element + 10)", $addMatrix);
    displayMatrix("Subtraction (each element - 5)", $subMatrix);
    displayMatrix("Multiplication (each element * 2)", $mulMatrix);
    ?>
</body>
</html>
