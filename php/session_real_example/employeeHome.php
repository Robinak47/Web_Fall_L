<?php
    session_start();

   if($_SESSION['userName'] != 'employee'){
        header("Location: login.php");
        
    }
    echo "welcome ". $_SESSION['userName'];

?>