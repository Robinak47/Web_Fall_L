<?php
   header("Content-Type: application/json");
    $name=$_POST["name"];
    $email=$_POST["email"];

    $assocArr=["name"=> $name, "email"=>$email, "greeting"=>"meow meow"];
    
    echo json_encode($assocArr);

?>