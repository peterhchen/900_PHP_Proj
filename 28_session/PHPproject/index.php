<?php
    // Start the session
    session_start()
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the index.php</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>index.php</h3>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php
/* $_SESSION */
//$_SESSION['username'] = null;
echo '$_SESSION["username"]: ' . $_SESSION['username'] . '<br>';
if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
    echo "You are logged in!";
}
?>
</body>
</html>
