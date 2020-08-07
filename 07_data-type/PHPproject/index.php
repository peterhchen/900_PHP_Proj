<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    // String
    $name = "Peter";
    $name1 = 'Peter';
    $name2 = 'string "Peter"';
    echo 'String';
    echo '<br>';
    echo '$name:' . $name;
    echo '<br>';
    echo '$name1: ' . $name1;
    echo '<br>';
    echo '$name2: '. $name2;
    // Integer
    $nameInt = 20;
    echo '<br><br>';
    echo 'Integer';
    echo '<br>';
    echo '$nameInt: ' . $nameInt;
    //FLoat
    $nameFloat = 20.5678; 
    echo '<br><br>';
    echo 'Float';
    echo '<br>';
    echo '$nameFloat: ' . $nameFloat;
    // Boolean
    $nameBool = true;
    echo '<br><br>';
    echo 'Boolean';
    echo '<br>';
    echo '$nameBool: ' . $nameBool;
    // Array
    $names = array("Peter", "Jason", "Jonathan");
    echo '<br><br>';
    echo 'Array';
    echo '<br>';
    echo '$names:' . $names['0'] . ' ' . $names['1'] . ' '. $names['2'];
?>
</body>