<?php
    include "./utils/db_connection.php";
    session_start();
    if (!isset($_GET['id'])) {
        header("Location:./admin_cars.php");
        exit();
    }
    $sql = "DELETE FROM car WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        $_SESSION['alert'] = "Car Deleted Successfully!"; 
        header("location: ../admin_cars.php");
        exit();
    } 
    else {
        echo "Error: " . $conn->error;
    }
?>