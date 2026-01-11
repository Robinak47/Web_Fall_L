<?php
require_once("../models/productModel.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $product_id=$_POST["pro_id"];
    $flag=deleteProduct($product_id);

    if($flag)
    {
        header("Location:../views/admin_views/GetAllProducts.php?msg=deletetion Successful");
    }
    else
    {
        header("Location:../views/admin_views/GetAllProducts.php?msg=deletetion failed");
    }


}

?>