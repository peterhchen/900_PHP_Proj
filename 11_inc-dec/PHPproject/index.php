<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    // Increment/Decrement Operators
    echo 'Increment/Decrement <br>';
    $x = 10;

    echo '$x: ' . $x;
    echo '<br>';

    echo '<br>Pre-Increment<br>';
    echo '++$x: ' . ++$x;
    echo '<br>';
    echo '$x: ' . $x;
    echo '<br>';

    echo '<br>Pre-Decrement<br>';
    echo '--$x: ' . --$x;
    echo '<br>';
    echo '$x: ' . $x;
    echo '<br>';

    echo '<br>Post-Increment<br>';
    echo '$x++: ' . $x++;
    echo '<br>';
    echo '$x: ' . $x;
    echo '<br>';

    echo '<br>Post-Decrement<br>';
    echo '$x--: ' . $x--;
    echo '<br>';
    echo '$x: ' . $x;
    echo '<br>';
?>
</body>