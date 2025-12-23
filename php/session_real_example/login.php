<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Simple authentication check (for demonstration purposes only)
        if($username === 'admin' && $password === 'password') {

            $_SESSION['userName']="admin";
             header('Location: adminHome.php');
        } else {
            if($username === 'employee' && $password === 'password') {
                $_SESSION['userName']="employee";
                header('Location: employeeHome.php');
            } 
            
        }
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <h2>Login Page</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>