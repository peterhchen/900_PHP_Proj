<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    echo 'Call predefined/Internal Function:';
    echo '<br><br>';
    echo 'strlen("Hi Peter"): ' . strlen("Hi Peter");
    echo '<br>';
    echo 'str_word_count("Hi Peter"): ' . str_word_count("Hi Peter");
    echo '<br>';
    echo 'strrev("Hi Peter"): ' . strrev("Hi Peter");
    echo '<br>';
    echo 'strpos("Hi Peter", "Peter"): ' . strpos("Hi Peter", "Peter");
    echo '<br>';
    echo 'str_replace("Peter", "Jason", Hi Peter"): ' . 
    str_replace("Peter", "Jason", "Hi Peter");
?>
</body>