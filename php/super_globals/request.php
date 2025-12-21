<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $val=htmlspecialchars($_REQUEST["username"], ENT_QUOTES, 'UTF-8');

        if(isset($_REQUEST['username']))
        {
            echo  $val;
         echo "<br>";
        }
        
        if(isset($_REQUEST['email']))
        {
            echo $_REQUEST['email'];
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

    <form method="post" action="">
        <input type="text" name="username"><br>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </from>
</body>
</html>