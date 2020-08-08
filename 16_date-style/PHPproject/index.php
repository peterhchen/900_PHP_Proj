<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    date_default_timezone_set('America/Los_Angeles');
    $dayofweekl = date("l");
    echo '$dayofweekl: ' . $dayofweekl . '<br>';
    $dayofweekw = date("w");
    echo '$dayofweekw: ' . $dayofweekw . '<br>';
    switch ($dayofweekw) {
        case 1:
            echo "<p>It is Monday</p>";
            break;
        case 2:
            echo "<p>It is Tuesday</p>";
             break;
        case 3:
            echo "<p>It is Wednesday</p>";
            break;
        case 4:
            echo "<p>It is Thursday</p>";
            break;
        case 5:
            echo "<p>It is Friday</p>";
            break;
        case 6:
            echo "<p>It is Saturday</p>";
            break;
        case 0:
            echo "<p>It is Sunday</p>";
            break;
    }
?>
</body>
</html>
