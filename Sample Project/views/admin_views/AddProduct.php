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
    <head></head>
    <body>
        
        <form action="../../controllers/addProductControl.php" method="POST">
            Product ID:"
            <input type="text" name="id"> <br>

            Product Name:
            <input type="text" name="name"><br>

            Product Price:
            <input type="text" name="price"><br>

            Product Quantity:
            <input type="text" name="quantity"><br>


            <br><br>
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="reset" name="reset">
        </form>


    </body>
</html>