<!DOCTYPE html>
<html lang="en">

<?php
    include "utils/head.php"
?>

<body>
    <?php 
        include "utils/header.php"
    ?>
    <div class="page-title">
        <span class="xxxl bold">AVAILABLE CARS</span>
        <div class="h-flx gap-10">
            <i class="fa-solid fa-house red"></i>
            <a href="/" class="m bold">Home</a>
            <span class="l bold red">></span>
            <span class="m bold">Available Cars</span>
        </div>
    </div>
    <div class="h-flx container gap-20 content">
        <div class="brands-navigator-container">
            <ul>
                <?php
                    include "./utils/db_connection.php";
                    $brand = $_GET['brand'];
                    if (!$brand) {
                        echo "<li><a href='cars.php' class='selected'>All Brands</a></li>";
                    }
                    else {
                        echo "<li><a href='cars.php'>All Brands</a></li>";
                    }
                    
                    $sql = 'SELECT * FROM brand';
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row["name"];
                        if ($brand == $id) {
                            echo "<li><a href='cars.php?brand={$id}' class='selected'>{$name}</a></li>";
                        }
                        else {
                            echo "<li><a href='cars.php?brand={$id}'>{$name}</a></li>";
                        }    
                    }
                ?>
            </ul>
        </div>
        <div class="products-cards-container">
            <?php
                include "./utils/db_connection.php";
                $sql = "SELECT * FROM car";
                if (isset($_GET['brand'])) {
                    $brand_id = $_GET['brand'];
                    $sql = $sql . " WHERE brand_id = {$brand_id}";
                }
                $sql = $sql . " ORDER BY rent_price DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='products-cards'>";
                    while($row = $result->fetch_assoc()) {
                        $image_sql = "SELECT * FROM car_image WHERE car_id = {$row['id']}";
                        $result_image = $conn->query($image_sql);
                        $row_image = $result_image->fetch_assoc();
                        $image = $row_image["image"];
                        $id = $row["id"];
                        $name = $row["name"];
                        $model = $row["model"];
                        $rent_price = $row["rent_price"];
                        $gear_type = $row["gear_type"];
                        $top_speed = $row["top_speed"];
                        echo "
                            <div class='product-card v-flx gap-20'>
                                <img src='../media/{$image}' />
                                <span class='m bold'>{$name}</span>
                                <span class='s bold'>$ {$rent_price} <span class='red'> / Day</span></span>
                                <div class='h-flx gap-10'> 
                                    <div class='h-flx gap-5'>
                                        <i class='fa-solid fa-car red'></i>
                                        <span class='xs light grey'>Model: {$model}</span>
                                    </div>
                                    <div class='h-flx gap-5'>
                                        <i class='fa-solid fa-gears red'></i>
                                        <span class='s light grey'>{$gear_type}</span>
                                    </div>
                                    <div class='h-flx gap-5'>
                                        <i class='fa-solid fa-gauge-high red'></i>
                                        <span class='s light grey'>{$top_speed} Km/h</span>
                                    </div>
                                </div>
                                <div class='btns'>
                                    <div class='btn-1'>
                                        <a href='car.php?id={$id}'>Rent Car</a>
                                    </div>
                                    <div class='btn-2'>
                                        <a href='car.php?id={$id}'>Details</a>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    echo "</div>";
                }
                else {
                    echo "0 results";
                }
            ?>
        </div>
    </div>
    <?php
        include "./utils/footer.php"
    ?>
</body>

</html>