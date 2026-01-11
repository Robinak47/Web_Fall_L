<?php
    session_start();
    if(isset($_SESSION['userId']) && isset($_SESSION['role']))
    {
        if($_SESSION['role']==1)
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
    <script src="js/script.js" defer></script>
    </head>
    <body>
        <h1><?php echo "Welcome Admin. Your Id is: ".$_SESSION['userId'];?></h1>
        <a href="../logout.php">logout<a>
        
        <button id="getAllProduct">Get All Product</button>
        <button id="addPro" onClick=' window.location.href="AddProduct.php"'>Insert Product</button>
    </body>
</html>