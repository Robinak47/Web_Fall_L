<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $host="localhost";
    $user="root";
    $password="";
    $dbName="sample_proj_C";
    $port=3306;

    function dbConnect()
    {
        global $host;
        global $user;
        global $password;
        global $dbName;
        global $port;
        $conn=mysqli_connect($host, $user, $password, $dbName, $port);

        if(!$conn)
        {
            echo mysqli_connect_error();
            //echo "not connected";
        }

        else
        {
            //echo "connection succefully establishe<br>";
            
            return $conn;
        }
    }

    

    

?>