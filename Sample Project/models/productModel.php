<?php
require_once("dbConnect.php");

function insertProduct($pId, $pName, $pPrice, $pQuantity)
{
    $conn = dbConnect();
    $query = "INSERT INTO product (pId, pName, pPrice, pQuantity)
              VALUES ($pId, '$pName', $pPrice, $pQuantity)";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn) > 0;
}

function updateProduct($pId, $pName, $pPrice, $pQuantity)
{
    $conn = dbConnect();
    $query = "UPDATE product 
              SET pName='$pName', pPrice=$pPrice, pQuantity=$pQuantity 
              WHERE pId=$pId";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn) > 0;
}

function deleteProduct($pId)
{
    $conn = dbConnect();
    $query = "DELETE FROM product WHERE pId=$pId";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn) > 0;
}

function getAllProductsFromDB()
{
    $conn = dbConnect();
    $query = "SELECT * FROM product";
    $data = mysqli_query($conn, $query);

    $product = [];

    if (mysqli_num_rows($data) > 0) {
        while ($rows = mysqli_fetch_assoc($data)) {
            $product[]= $rows;
        }
    }

    return $product;
}

function searchProducts($pId)
{
    $conn = dbConnect();
    $query = "SELECT * FROM product WHERE pId=$pId";
    $data = mysqli_query($conn, $query);

    $product = [];

    if (mysqli_num_rows($data) > 0) {
        while ($rows = mysqli_fetch_assoc($data)) {
            $product[]= $rows;
        }
    return $product;
}
}


?>
