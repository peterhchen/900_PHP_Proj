<?php
    // Start the session
    session_start()
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the contact.php</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>contact.php</h3>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php

/* $_SESSION */
// Set session variables
$_SESSION['username'] = "peterhchen";
echo '$_SESSION["username"]: ' . $_SESSION['username'] . '<br>';
?>
</body>
</html>