<?php
    include "./db_connection.php";
    session_start();
    if ($_POST) {
        extract($_POST);
        $is_correct = true;
        
        $first_name = trim($first_name);
        $last_name = trim($last_name);
        $email = trim($email);
        $phone = trim($phone);
        $username = trim($username);
        $password = trim($password);
        $confirm_password = trim($confirm_password);

        if (empty($first_name)) {
            $_SESSION['info_first_name'] = 'Please enter your username';
            $is_correct = false;
        }

        if (empty($last_name)) {
            $_SESSION['info_last_name'] = 'Please enter your lastname';
            $is_correct = false;
        }

        if (empty($email)) {
            $_SESSION['info_email'] = 'Please enter your email';
            $is_correct = false;
        }

        if (empty($phone)) {
            $_SESSION['info_phone'] = 'Please enter your phone';
            $is_correct = false;
        }

        if (empty($username)) {
            $_SESSION['info_username'] = 'Please enter username';
            $is_correct = false;
        }
        if (empty($password)) {
            $_SESSION['info_password'] = 'Please enter password';
            $is_correct = false;
        }
        if (empty($confirm_password)) {
            $_SESSION['info_confirm_password'] = 'Please enter password confirmation';
            $is_correct = false;
        }
        else if ($password != $confirm_password) {
            $_SESSION['info_confirm_password'] = 'Passwords dont match';
            $is_correct = false;
        }
        
        if ($is_correct) {
            $sql = "SELECT * FROM user where username = '$username'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count > 0) {
                $_SESSION['info_username'] = 'User already exists';
                header("location:../signup.php");
                exit;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO `user` 
                (`username`, `password`, `first_name`, `last_name`, `email`, `phone`) VALUES
                (?, ?, ?, ?, ?, ?);
            ';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssss', $username, $password, $first_name, $last_name, $email, $phone);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                $_SESSION['alert'] = "Account Added Successfully!"; 
                header("location: ../login.php");
                exit();
            } 
            else {
                echo "Error: " . $conn->error;
            }
        }
        else {
            header("location:../signup.php");
        }

    }
?>