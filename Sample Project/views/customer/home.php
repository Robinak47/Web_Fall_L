<?php
 session_start();

 if(isset($_SESSION['userId']) && isset($_SESSION['role']))
 {
    if($_SESSION['role']==3)
    {

    }
    else
    {
        header("Location:../login.php");
    }
 }

 else
 {
    header("Location:../login.php");
 }

?>
<!doctype html>
<html>
    <head>

    </head>
    <body>
        <h1><?php echo "Welcome".$_SESSION['userId'] ?></h1>
    </body>
</html>
