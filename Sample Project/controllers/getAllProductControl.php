<?php
session_start();
require_once(__DIR__ . "/../models/productModel.php");

function getAllProduct()
{
    $products=getAllProductsFromDB();

    return $products;
    
}

?>