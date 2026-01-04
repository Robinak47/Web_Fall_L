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


    function insertData()
    {
        $query="INSERT INTO car (id, name, model, speed) VALUES (4,'Ferrari','fr-220',130.9)";
        $conn=dbConnect();

        $data=mysqli_query($conn,$query);

        if($data)
        {
            echo "data inserted";
            var_dump($data);
            
        }

        else
        {
            echo mysqli_error($conn);
            var_dump($data);
        }

    }

    function deleteData()
    {
        $query="DELETE FROM car WHERE id=2";
        $conn=dbConnect();
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "data deleted";
            var_dump($data);
            echo "<br>".mysqli_affected_rows($conn);   
            
        }

        else
        {
            echo mysqli_error($conn);
            var_dump($data);
        }

    }


    function updateData()
    {
        $query="UPDATE car SET name='BMW', model='s7', speed=122.8 WHERE id=4";
        $conn=dbConnect();
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "data updated";
            echo "<br>";
            var_dump($data);
            echo "<br>".mysqli_affected_rows($conn);   
            
        }

        else
        {
            echo mysqli_error($conn);
            var_dump($data);
        }
    }


    function fetchData()
    {
        $query="SELECT * FROM car";
        $conn=dbConnect();
        $data=mysqli_query($conn,$query);
        if(mysqli_num_rows($data)>0)
        {
            while($rows=mysqli_fetch_assoc($data))
            {
                echo "<table border='1'><tr><th>id</th><th>name</th><th>model</th><th>speed</th></tr><tr><td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['model']."</td><td>".$rows['speed']."</td></tr></table>";
            }
        }
    }

    //insertData();
    //deleteData();
    //updateData();
    fetchData();






?>