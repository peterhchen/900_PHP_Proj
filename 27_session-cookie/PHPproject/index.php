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
$_COOKIE
$_SESSION
*/
// current time + 86400 msec expired
setcookie("name", "Peter", time()+86400); 

$_SESSION['name'] = "Peter";
?>
</body>
</html>
