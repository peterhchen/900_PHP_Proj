<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<form method="GET">
    <input type = "text" name="person">
    <button>SUBMIT</button>
</form>   
<?php
    if (empty($_GET['person'])) {
        $name = "";
    } else {
        $name = $_GET['person'];
    }
    echo "name: " . $name;
    // one line comment
    /* 
        multiple lines of comment.
        some other lines.
    */
?>
</body>
</html>