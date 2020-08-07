<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    // Logical Operator
    $x = 10;
    $y = 20;

    if ($x == $y or 1 == 1) {
        echo "$x == $y or 1 == 1: True<br>";
    }
    if ($x == $y ||  1 == 1) {
        echo "$x == $y || 1 == 1: True<br>";
    }
    if ($x == $y and 1 == 1) {
        echo "$x == $y and 1 == 1: True<br>";
    }
    if ($x == $y && 1 == 1) {
        echo "$x == $y && 1 == 1: True<br>";
    }

    if ($x == $y xor 1 == 1) {
        echo "$x == $y xor 1 == 1: True<br>";
    }
?>
</body>