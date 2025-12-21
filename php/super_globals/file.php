<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        echo $_FILES['uploadFile']['name'];
        echo "<br>";
        echo $_FILES['uploadFile']['type'];
        echo "<br>";
        echo $_FILES['uploadFile']['size'];
        echo "<br>";
        echo $_FILES['uploadFile']['tmp_name'];
        echo "<br>";
        echo $_FILES['uploadFile']['error'];
        
    }

?>


<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="uploadFile"><br>
        <input type="submit" value="Submit">
    </from>
</body>
</html>