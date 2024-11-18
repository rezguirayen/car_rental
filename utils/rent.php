<?php
    include "db_connection.php";
    
    if ($_POST) {
        session_start();
        
        if (!isset($_SESSION['user'])) {
            $_SESSION['info'] = "Please Login First";
            header("location:../login.php");
            exit();
        }

        if (!isset($_SESSION['car_id'])) {
            header("location:../cars.php");
            exit();
        }

        $user_id = $_SESSION['user']['id'];
        $car_id = $_SESSION['car_id'];

        extract($_POST);
        $sql = "INSERT INTO rent (from_address, to_address, begin_date, end_date, description, car_id, user_id)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssii', $from_address, $to_address, $begin_date, $end_date, $description, $car_id, $user_id);
        
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['alert'] = "Rent Added Successfully.. We Will Call You ASAP!"; 
            header("location: ../index.php");
            exit();
        } 
        else {
            echo "Error: " . $conn->error;
        }
    }
?>