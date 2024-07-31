<?php
$backgroundColor = "yellow";


?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Background Color</title>
</head>
<body>
<h5>Create the php script which changes the background color of the div tag
according to variable value.(hint div style=background-color:yellow;>)</h5>
    <div style="background-color: <?php echo $backgroundColor; ?>;">
        <h1>Heading</h1>
        <p>This is an example of changing the background color using PHP.</p>
    </div>
</body>
</html>
