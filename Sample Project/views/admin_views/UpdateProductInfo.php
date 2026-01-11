<?php
    session_start();
    require_once("../../controllers/findProductControl.php");
    $product=findProduct($_GET["pro_id"]);
    
   
    

    if(isset($_SESSION['userId']) && isset($_SESSION['role']))
    {
        if($_SESSION['role']==1)
        {
            //require_once("../../controllers/findProductControl.php");
            
            //
            
            
            
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
        
        <form action="../../controllers/updateProductInfoControl.php" method="POST">
            Product ID:"
            <input type="text" name="id" value="<?php echo $product[0]['pId']; ?>" readonly> <br>

            Product Name:
            <input type="text" name="name" value="<?php echo $product[0]["pName"]; ?>"><br>

            Product Price:
            <input type="text" name="price" value="<?php echo $product[0]["pPrice"]; ?>"><br>

            Product Quantity:
            <input type="text" name="quantity" value="<?php echo $product[0]["pQuantity"]; ?>"><br>


            <br><br>
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="reset" name="reset">
        </form>


    </body>
</html>