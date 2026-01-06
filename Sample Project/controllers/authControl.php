<?php
session_start();
require_once("../models/userModel.php");
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $has_Err=false;
    $idErr="";
    $passErr="";
    $userId=$_GET["userId"];
    $pass=$_GET["pass"];

    if(empty($userId) && empty($pass))
    {
        $has_Err=true;
        $idErr="user ID cannot be empty";
        $passErr="pass word cannot be empty";
        header("Location:../views/login.php?idErr=".$idErr."&passErr=".$passErr);

    }

    else
    {
         $user=authUser($userId, $pass);
         
         if($user)
         {
            if($user["role"]==1)
            {
                if($user["status"]=="active")
                {
                    $_SESSION['userId']=$user['userId'];
                    $_SESSION['role']=$user['role'];

                    header("Location:../views/admin/home.php");
                }

                else
                {
                    $genErr="Id or password not found";
                header("Location:../views/login.php?genErr=".$genErr);
                }
                
            }

            if($user["role"]==2)
            {
                $_SESSION['userId']=$user['userId'];
                $_SESSION['role']=$user['role'];

                header("Location:../views/employee/home.php");
            }

            if($user["role"]==3)
            {
                $_SESSION['userId']=$user['userId'];
                $_SESSION['role']=$user['role'];

                header("Location:../views/customer/home.php");
            }

        

            

         }

         else
         {
            $genErr="Id or password not found";
            header("Location:../views/login.php?genErr=".$genErr);
         }
    }

}




?>