<?php
require_once(__DIR__ . "/../models/productModel.php");


    function findProduct($product_id)
    {
        $products=searchProducts($product_id);
        return $products;
    }
    

?>