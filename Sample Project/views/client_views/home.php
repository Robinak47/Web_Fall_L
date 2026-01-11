<?php
    session_start();
    if(isset($_SESSION['userId']) && isset($_SESSION['role']))
    {
        if($_SESSION['role']==3)
        {

        }


        else
        {
            header("Location: ../login.php");
        }
    }

    else
    {
        header("Location: ../login.php");
    }

?>

<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1><?php echo "Welcome Client. Your Id is: ".$_SESSION['userId'];?></h1>
        <a href="../logout.php">logout<a>
    </body>
</html>