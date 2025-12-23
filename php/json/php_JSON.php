<?php
    $objArray = array("name" => "John", "age" => 30, "city" => "New York");

    // Encode to JSON
    $jsonObj = json_encode($objArray);
    echo "JSON Encoded Object: " . $jsonObj . "<br>";


    // Decode from JSON
    $decodedObj = json_decode($jsonObj,true);
    echo "Decoded Name: " . $decodedObj['name'] . "<br>";
    echo "Decoded Age: " . $decodedObj['age'] . "<br>";

    echo "Decoded City: " . $decodedObj['city'] . "<br>";

?>