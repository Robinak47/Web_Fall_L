<?php

 require_once("dbConnect.php");
function insertData()
    {
        $query="INSERT INTO users (id, name, password, role) VALUES (1,'mr.meow','meow123','admin')";
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
        $query="DELETE FROM users WHERE id=1";
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
        $query="UPDATE users SET name='Tom', role='manager' WHERE id=1";
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
        $query="SELECT * FROM users";
        $conn=dbConnect();
        $data=mysqli_query($conn,$query);
        if(mysqli_num_rows($data)>0)
        {
            while($rows=mysqli_fetch_assoc($data))
            {
                echo "<table border='1'><tr><th>id</th><th>name</th><th>password</th><th>role</th></tr><tr><td>".$rows['id']."</td><td>".$rows['name']."</td><td>".$rows['password']."</td><td>".$rows['role']."</td></tr></table>";
            }
        }
    }

    function authUser($userId, $pass)
    {
        $query = "SELECT * FROM users WHERE userId='$userId' AND password='$pass'";
        $conn=dbConnect();
        $data=mysqli_query($conn,$query);
        $users;
        if(mysqli_num_rows($data)>0)
        {
            while($rows=mysqli_fetch_assoc($data))
            {
                $users=$rows;
            }
        }

        return $users;
    }



    

?>