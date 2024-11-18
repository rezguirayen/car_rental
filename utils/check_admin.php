<?php 
    include "./db_connection.php";
    session_start();
    if($_POST) {
        extract($_POST);
        $username = trim($username);
        $password = trim($password);

        if (empty($username) || empty($password)) {
            $_SESSION['alert'] = "Invalid Username or Password";
            header("location:../admin_login.php");
            exit;
        }

        $sql = "SELECT * FROM `admin` WHERE username = '$username'";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count==0) {
            $_SESSION['alert'] = "Admin not found";
            header("location:../admin_login.php");
            exit;
        }
        else {
            $admin = mysqli_fetch_assoc($res);
            if (!password_verify($password, $admin['password'])) {
                $_SESSION['alert'] = "Incorrect Password";
                header("location:../admin_login.php");
                exit;
            }

            $_SESSION['admin'] = $admin;
            $_SESSION['alert'] = "You are successfully logged in!";
            header("location:../admin_cars.php");
            exit;
        }
    }
?>