<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    $host="localhost";
    $user="root";
    $password="";
    $db_name="sample_proj_L";
    $port=3306;

    function dbConnect()
    {
        global $host;
        global $user;
        global $password;
        global $db_name;
        global $port;
        $conn=mysqli_connect($host, $user, $password, $db_name, $port);

        if(!$conn)
        {
            //echo mysqli_connect_error();
        }

        else
        {
            //echo "connection established";
            return $conn;
        }


    }

    ?>