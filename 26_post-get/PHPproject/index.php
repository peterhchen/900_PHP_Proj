<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- 
    <form method="GET">
    The method GET tells out submit button what to do with the information.
    Right now, the GET meaning that information is going to pass it into the URL 
    and we can see the information inside a URL. 
    
    <form method="POST">
    If we use to POST. The information pass to URL 
    but we cannot see the information inside the URL.

    Right now, we use "GET", we can see the name and value in the URL command line.
  -->

<!-- <form method="POST">
    <input type="hidden" name="name" value="Peter">
    <button type="submit" name="Submit">PRESS ME!</button>
</form> -->
<form method="GET">
    <input type="hidden" name="name" value="Peter">
    <button type="submit" name="Submit">PRESS ME!</button>
</form>
<?php
/* 
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/
// $_POST and $_GET are super globals. 
// They are used to pass information from PHP into URL.
// We can use information on another page.

// if (isset($_POST['Submit'])) {
//     $name = $_POST['name'];
//     echo '$name:' . $name;
// }
if (isset($_GET['Submit'])) {
        $name = $_GET['name'];
        echo '$name:' . $name;
}
?>
</body>
</html>
