<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
    if (empty($_GET['person'])) {
        $name = "";
    } else {
        $name = $_GET['person'];
    }
    echo "name: " . $name;
?>
</body>
</html>