<?php
    include "./db_connection.php";
    session_start();
    if ($_POST) {
        extract($_POST);
        $sql = 'INSERT INTO `car` 
            (`name`, `model`, `gear_type`, `top_speed`, `engine`, `description`, `rent_price`, `stars_count`, `rating_count`, `brand_id`) VALUES
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
        ';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssdiii', $name, $model, $gear_type, $top_speed, $engine, $description, $rent_price, $stars_count, $rating_count, $brand_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $_SESSION['alert'] = "Car Added Successfully!"; 
            header("location: ../admin_cars.php");
            exit();
        } 
        else {
            echo "Error: " . $conn->error;
        }
    }
?>