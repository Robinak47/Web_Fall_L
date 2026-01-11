<?php
session_start();
require_once("../models/userModel.php");
if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $hasErr=false;
    $idErr;
    $passErr;
    $userId=$_GET["userId"];
    $pass=$_GET["pass"];

    if(empty($userId) && empty($pass))
    {
        $hasErr=true;
        $idErr="user Id cannot be empty";
        $passErr="password cannot be empty";
        header("Location: ../views/login.php?idErr=".$idErr."&passErr=".$passErr);

    }

    else
    {
        $user=authUser($userId,$pass);
        if($user)
        {
            if($user['role']==1)
            {
                if($user['status']=="active")
                {
                    $_SESSION['userId']=$user['userId'];
                    $_SESSION['role']=$user['role'];
                    header("Location: ../views/admin_views/home.php");
                }

                else
                {
                    header("Location: ../views/login.php?genErr=id or password didn't match");
                }
                
                
            }

            if($user['role']==2)
            {
                $_SESSION['userId']=$user['userId'];
                $_SESSION['role']=$user['role'];
                header("Location: ../views/employee_views/home.php");
                
            }

            if($user['role']==3)
            {
                $_SESSION['userId']=$user['userId'];
                $_SESSION['role']=$user['role'];
                header("Location: ../views/client_views/home.php");
                
            }
        }

        else
        {
            header("Location: ../views/login.php?genErr=id or password didn't match");

        }
    }
}

?>