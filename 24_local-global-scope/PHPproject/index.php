<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$y = 5;
function fun() {
    $y = 10;
}
fun();
echo '$y: ' . $y;
?>
</body>
</html>
