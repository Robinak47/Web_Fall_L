<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo $_POST['username'];
        echo "<br>";
        echo $_POST['email'];
    }

?>


<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>

    <form method="post" action="">
        <input type="text" name="username"><br>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </from>
</body>
</html>