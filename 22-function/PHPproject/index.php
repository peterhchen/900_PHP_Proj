<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// function()
$x = 100;
function newCalc($x) {
    $newNum = $x * 0.75;
    echo 'newCalc($x): ' . $newNum;
}

newCalc($x);

?>
</body>
</html>
