<?php
    session_start();
    if (isset($_SESSION['alert'])) {
        $message = $_SESSION['alert'];
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['alert']);
    }
?>