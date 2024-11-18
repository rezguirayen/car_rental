<!DOCTYPE html>
<html lang="en">
<?php
    include "utils/head.php";
?>

<body>
    <?php
        include "utils/header.php";
        $car_id = $_GET['id'];
        if (!$car_id) {
            header("Location:./cars.php");
            exit();
        }
    ?>

    <div class="h-flx gap-50 product-details container">
        <div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    include "utils/db_connection.php";

                    $sql = "SELECT * FROM car_image WHERE car_id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $car_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc()) {
                        $image = $row['image'];
                        echo "
                            <div class='swiper-slide'>
                                <div>
                                    <img src='media/{$image}'>
                                </div>
                            </div>
                        ";
                    }                
                ?>
                </div>
            </div>
            <script>
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                speed: 700,
                autoplay: {
                    pauseOnMouseEnter: true,
                    delay: 3000
                },
            });
            </script>
        </div>
        <div class="v-flx gap-20">
            <?php
                include "utils/db_connection.php";
                
                session_start();
                $_SESSION['car_id'] = $car_id;

                $sql = "SELECT * FROM car WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $car_id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $car = $result->fetch_assoc();
                    $id = $car["id"];
                    $name = $car["name"];
                    $model = $car["model"];
                    $rent_price = $car["rent_price"];
                    $gear_type = $car["gear_type"];
                    $top_speed = $car["top_speed"];
                    $engine = $car["engine"];
                    $stars_count = $car["stars_count"];
                    $rating_count = $car["rating_count"];
                    $description = $car["description"];

                    echo "
                        <span class='rental'>Rental</span>
                        <span class='xl bold'>{$name}</span>
                        <div class='h-flx gap-10'>
                            <span class='l bold'>$ {$rent_price} <span class='red'> / Day </span></span>
                            <div class='h-flx gap-10'>
                                <div class='h-flx gap-5'>";

                    for ($i = 1; $i <= $stars_count; $i++) {
                        echo "<i class='fa-solid fa-star icon yellow'></i>";
                    }    
                    for ($i = $stars_count; $i < 5; $i++) {
                        echo "<i class='fa-solid fa-star icon grey'></i>";
                    }
                        
                    echo "
                                </div>
                                <span>({$rating_count} Rating)</span>
                            </div>
                        </div>
                        <span class='s light grey'>{$description}</span>
                        <ul class='v-flx gap-10'>
                            <li class='h-flx gap-10'>
                                <i class='fa-solid fa-car red'></i>
                                <span class='s light grey'>Model: {$model}</span>
                            </li>
                            <li class='h-flx gap-10'>
                                <i class='fa-solid fa-gears red'></i>
                                <span class='s light grey'>Gear: {$gear_type}</span>
                            </li>
                            <li class='h-flx gap-10'>
                                <i class='fa-solid fa-gauge-high red'></i>
                                <span class='s light grey'>Top Speed: {$top_speed} Km/h</span>
                            </li>
                            <li class='h-flx gap-10'> 
                                <i class='fa-solid fa-atom red'></i>
                                <span class='s light grey'>Engine: {$engine}</span>
                            </li>
                        </ul> 
                    ";
                }
            ?>
        </div>
    </div>
    <div class="container">
        <form method="POST" action="./utils/rent.php" class="frm">
            <div>
                <div class="section_title">
                    <h1>Booking Details</h1>
                </div>
                <div class="v-flx gap-10">
                    <div class="h-flx gap-10">
                        <input type="text" name="from_address" placeholder="From Address" required>
                        <input type="text" name="to_address" placeholder="To Address" required>
                    </div>
                    <div class="h-flx gap-10">
                        <input type="date" name="begin_date" placeholder="Begin Date" required>
                        <input type="date" name="end_date" placeholder="End Date" required>
                    </div>
                    <textarea placeholder="Write Here..." name="description" class="txt-area" required></textarea>
                </div>
                <?php
                    $car_id = $_GET['id'];
                    echo "<input type='number' name='car_id' class='hiden' value='{$car_id}'>"
                ?>
                <div class="btn-container">
                    <button class="animated-btn dark bnt">Reserve Now!</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        include "./utils/footer.php"
    ?>
</body>

</html>