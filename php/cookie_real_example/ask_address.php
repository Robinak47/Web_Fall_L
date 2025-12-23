<?php
    if(isset($_COOKIE['address']))
    {

    }

    else
    {
        $form="<form action='' method='post'>
        <label for='address'>Address:</label>"
        ."<input type='text' id='address' name='address'>"
        ."<input type='submit' value='Submit'>"
        ."</form>";
        $Address="";
        if(isset($_POST['address']))
        {$Address=$_POST['address'];}
        setcookie('address',$Address,time()+300000);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Address Form</title>
  </head>
  <body>
    <h1>Enter Your Address</h1>
    <?php
        if(isset($form)){
            echo $form;
        }?>
    <span id="add"><?php
        if(isset($_COOKIE['address'])){
            echo $_COOKIE['address'];
        }
        ?></span>
  </body>