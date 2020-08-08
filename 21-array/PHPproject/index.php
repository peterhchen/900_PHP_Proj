<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    // Array
    $array = array ("Peter", "Jason", "Jonathan", "Irene", "Jessica", "Jasmine");
    for ($i = 0; $i < sizeof ($array); $i++) {
        echo "array[" . $i . "]: " . $array[$i] . "<br>";
    }
?>
</body>
</html>
