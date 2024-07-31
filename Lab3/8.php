<?php
$country = array(
    "India" => "Delhi",
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Austria" => "Vienna",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "Latvia" => "Riga",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallinn",
    "Hungary" => "Budapest",
    "Poland" => "Warsaw"
);

// Sort the array by capital name (ascending order)
// We will use array_multisort to sort by the values (capitals)
// and maintain keys (countries)

// Obtain a list of capitals and countries, ordered by capitals
$capitals = array();
$countries = array();

foreach ($country as $key => $value) {
    $capitals[$key] = $value;
    $countries[$key] = $key;
}

// Sort the capitals array, maintaining the keys
asort($capitals);

// Display the sorted list

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Capitals</title>
   
</head>
<body>
    <h2>Country Capitals Sorted by Capital</h2>
    <table>
        <tr>
            <th>Country</th>
            <th>Capital</th>
        </tr>
        <?php foreach ($capitals as $country => $capital): ?>
        <tr>
            <td><?php echo htmlspecialchars($country); ?></td>
            <td><?php echo htmlspecialchars($capital); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
