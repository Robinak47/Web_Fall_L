<?php
require_once("../models/productModel.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $product_ID=$_POST["id"];
    $product_Name=$_POST["name"];
    $product_Price=$_POST["price"];
    $product_Quantity=$_POST["quantity"];

    $flag=updateProduct($product_ID,$product_Name,$product_Price,$product_Quantity);
    if($flag)
    {
        header("Location:../views/admin_views/GetAllProducts.php?msg=updation Successful");
    }
    else
    {
        header("Location:../views/admin_views/GetAllProducts.php?msg=updation failed");
    }
}

?>