<?php
    session_start();

    // Check if the user is logged in and is an admin

    if($_SESSION['userName'] != 'admin'){
        header("Location: login.php");
        
    }
    echo "welcome ". $_SESSION['userName'];

?>