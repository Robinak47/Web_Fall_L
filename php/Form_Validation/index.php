<?php

    $name_err;
    $email_err;
    $age_err;
    $gender_err;
    $food_err;
    $country_err;
    $file_err;
    $has_err=false;

    $name;
    $email;
    $age;
    $gender;
    $food=[];
    $country;
    $file;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       if(empty($_POST['username']))
       {
            $name_err="please provide a valid user name";
            $has_err=true;
       }
       else
         {
                if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['username']))
                {
                    $name_err="Only letters and white space allowed";
                    $has_err=true;
                }
         }
       if(empty($_POST['email']))
       {
            $email_err="please provide a valid email";
            $has_err=true;
       }
       else
       {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $email_err="Invalid email format";
                $has_err=true;
            }
       }

       if(empty($_POST['age']))
       {
            $age_err="please provide a valid age";
            $has_err=true;
       }
       else
       {
            if(!is_numeric($_POST['age']) || $_POST['age']<1 || $_POST['age']>120)
            {
                $age_err="please provide a valid age between 1 and 120";
                $has_err=true;
            }
       }

       if(empty($_POST['gender']))
       {
            $gender_err="please select your gender";
            $has_err=true;
       }

       if(empty($_POST['food']))
       {
            $food_err="please select at least one food item";
            $has_err=true;
       }
       if(empty($_POST['country']))
        {
            $country_err="please select your country";
            $has_err=true;
        }

        if(empty($_FILES['myfile']['name']))
        {
            $file_err="please upload a valid file";
            $has_err=true;
        }
        else
        {
            
            
            $allowed_types=['image/jpeg', 'image/png', 'application/pdf'];
            if(!in_array($_FILES['myfile']['type'], $allowed_types))
            {
                $file_err="only jpeg, png and pdf files are allowed";
                $has_err=true;
            }

            $maxsize=2*1024*1024; //2MB
            if($_FILES['myfile']['size'] > $maxsize)
            {
                $file_err="file size should not exceed 2MB";
                $has_err=true;
            }
        }

        if(!$has_err){
            $name=$_POST['username'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $food=$_POST['food'];
            $country=$_POST['country'];
            echo "Name: ".$name."<br>";
            echo "Email: ".$email."<br>";
            echo "Age: ".$age."<br>";
            echo "Gender: ".$gender."<br>";
            echo "Food: ".implode(", ", $food)."<br>";
            echo "Country: ".$country."<br>";

            $upload_dir="uploads/";
            if(!is_dir($upload_dir)){
                mkdir($upload_dir);
            }
            $target_file=$upload_dir.basename($_FILES['myfile']['name']);
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_file)){
                echo "File uploaded successfully: ".$target_file."<br>";
            }
            else{
                echo "Error uploading file.<br>";
            }      
        }
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
        Username: <input type="text" name="username"><br>
        <span name="name_err" style="color:red"><?php if(isset($name_err)) {echo $name_err;} ?></span><br>
        Email: <input type="text" name="email"><br>
        <span name="email_err" style="color:red"><?php if(isset($email_err)) {echo $email_err;} ?></span><br>
        age: <input type="text" name="age"><br>
        <span name="age_err" style="color:red"><?php if(isset($age_err)) {echo $age_err;} ?></span><br>
        Gender: 
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <br>
        <span name="gender_err" style="color:red"><?php if(isset($gender_err)) {echo $gender_err;} ?></span><br>
        Fab Food:
        <input type="checkbox" name="food[]" value="pizza"> Pizza
        <input type="checkbox" name="food[]" value="burger"> Burger
        <input type="checkbox" name="food[]" value="pasta"> Pasta
        <br>
        <span name="food_err" style="color:red"><?php if(isset($food_err)) {echo $food_err;} ?></span><br>
        Country:
        <select name="country"> 
            <option value="">Select Country</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="canada">Canada</option>
        </select>
        <br>
        <span name="country_err" style="color:red"><?php if(isset($country_err)) {echo $country_err;} ?></span><br>
        <input type="file" name="myfile"><br>
        <span name="file_err" style="color:red"><?php if(isset($file_err)) {echo $file_err;} ?></span><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>