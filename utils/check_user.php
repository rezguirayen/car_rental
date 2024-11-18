<?php 
    include "./db_connection.php";
    session_start();
    if($_POST) {
        extract($_POST);
        $username = trim($username);
        $password = trim($password);

        if (empty($username) || empty($password)) {
            $_SESSION['info'] = "Invalid Username or Password";
            header("location:../login.php");
            exit;
        }
        $sql = "SELECT * FROM `user` WHERE username = '$username'";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count==0) {
            $_SESSION['info'] = "User not found";
            header("location:../login.php");
            exit;
        }
        else {
            $user = mysqli_fetch_assoc($res);
            if (!password_verify($password, $user['password'])) {
                $_SESSION['info'] = "Incorrect Password";
                header("location:../login.php");
                exit;
            }

            $_SESSION['user'] = $user;
            $_SESSION['alert'] = "You are successfully logged in!";
            header("location:../index.php");
            exit;
        }
    }
?>