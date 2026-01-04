<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db_name="myDB";
    $port=3306;

    function dbConnect()
    {
        global $host;
        global $user;
        global $pass;
        global $db_name;
        global $port;
        $conn=mysqli_connect($host, $user, $pass, $db_name, $port);

        if(!$conn)
        {
            echo mysqli_error($conn);
        }

        else
        {
            echo "connection established";
            return $conn;
        }


    }

    ?>