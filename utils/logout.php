<?php
    session_start();
    unset($_SESSION['user']);
    $_SESSION['alert'] = "You have successfully logged out!";
    header("location:../index.php");
?>