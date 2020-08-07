<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    // Comparison operator
    $x = "100";
    $y = 100;
    echo '$x: ' . $x; echo ' $y: ' . $y . '<br>';
    
    echo "== and != compare the data size only<br>";
    if ($x == $y) {
        echo '$x == $y: True<br>';
    } else {
        echo '$x == $y: False"<br>';
    }
    if ($x != $y) {
        echo '$x != $y: True<br>';
    } else {
        echo '$x != $y: False<br>';
    }

    echo "<br>=== and !== compare the data size and data type<br>";
    if ($x === $y) {
        echo '$x === $y: True<br>';
    } else {
        echo '$x === $y: False<br>';
    }

    if ($x !== $y) {
        echo '$x !== $y: True<br>';
    } else {
        echo '$x !== $y: False<br>';
    }

    echo "<br> > and < compares the data size<br>";
    if ($x > $y) {
        echo '$x > $y: True<br>';
    } else {
        echo '$x > $y False<br>';
    }
    if ($x < $y) {
        echo '$x < $y: True<br>';
    } else {
        echo '$x < $y False<br>';
    }
?>
</body>