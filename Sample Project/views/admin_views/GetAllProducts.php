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
        <span><?php if(isset($_GET["msg"])){echo $_GET["msg"];} ?></span>
        <h1> Product Information</h1>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>update</th>
                <th>Delete</th>

            </tr>
            <?php
            require_once("../../controllers/getAllProductControl.php");
            $products=getAllProduct();
            foreach($products as $product)
            {
                echo "<tr>
                        <td>".$product["pId"]."</td>
                        <td>".$product["pName"]."</td>
                        <td>".$product["pPrice"]."</td>
                        <td>".$product["pQuantity"]."</td>
                        <td><a href='UpdateProductInfo.php?pro_id=".$product['pId']."'>update</a></td>
                        <td>
                            <form action='../../controllers/removeProductControl.php' method='POST'>
                                <input type='hidden' name='pro_id' value={$product['pId']}>
                                <input type='submit' name='submit' value='delete'>
                            </form>
                        </td>

                    </tr>";
               
            }
            ?>
        </table>




    </body>
</html>

