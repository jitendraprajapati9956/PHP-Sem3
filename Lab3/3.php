<?php
$students = array(

    array(
        'Item' => 'Item 1',
        'price' => 1500,
        'quentity' => 400
    ),
    array(
        'Item' => 'Item 2',
        'price' => 2500,
        'quentity' => 200
    ),
    array(
        'Item' => 'Item 3',
        'price' => 3500,
        'quentity' => 500
    ),
    array(
        'Item' => 'Item 4',
        'price' => 3000,
        'quentity' => 3000
    ),
    array(
        'Item' => 'Item 5',
        'price' => 200,
        'quentity' => 5000
    ),
    array(
        'Item' => 'Item 6',
        'price' => 100,
        'quentity' => 12
    ),
    array(
        'Item' => 'Item 7',
        'price' => 250,
        'quentity' => 10
    ),
    
);
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
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
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
        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>MultiDimensional Array</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo htmlspecialchars($student['Item']); ?></td>
                <td><?php echo htmlspecialchars($student['price']); ?></td>
                <td><?php echo htmlspecialchars($student['quentity']); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
