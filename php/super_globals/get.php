<?php
    if($_SERVER['REQUEST_METHOD'] == "GET"){

        if(isset($_GET['username']))
        {
            echo $_GET['username'];
         echo "<br>";
        }
        
        if(isset($_GET['email']))
        {
            echo $_GET['email'];
        }
    }

?>


<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>

    <form method="get" action="">
        <input type="text" name="username"><br>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </from>
</body>
</html>