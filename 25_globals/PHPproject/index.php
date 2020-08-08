<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
/* 
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$y = 5; // global scope
function func() {
    $y = 10;
    echo 'Access Local variable inside func $y: ' . $y . '<br>';
    echo 'Access global scope inside func $y: ' . $GLOBALS["y"] . '<br>';
}
func();
echo 'Global $y: ' . $y;
?>
</body>
</html>
