<!DOCTYPE html>
<html lang="en">

<?php
    include "./utils/head.php";
    session_start();
?>

<body>
    <?php
      include "./utils/header.php";
    ?>
    <main>
        <div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container ad-container l1">
                            <div class=" content v-flx gap-20">
                                <span class="xxl regular">For Rent $330 Per Day</span>
                                <span class="xxxl xbold l-space-3">Reserve Now & Get 50% Off</span>
                                <a href="/car.php?id=19">
                                    <button class="animated-btn">RESERVE NOW!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container ad-container l2">
                            <div class="content v-flx gap-20">
                                <span class="xxl regular">For Rent $280 Per Day</span>
                                <span class="xxxl xbold l-space-3">Reserve Now & Get 50% Off</span>
                                <a href="/car.php?id=2">
                                    <button class="animated-btn">RESERVE NOW!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container ad-container l3">
                            <div class="content v-flx gap-20">
                                <span class="xxl regular">For Rent $350 Per Day</span>
                                <span class="xxxl xbold l-space-3">Reserve Now & Get 50% Off</span>
                                <a href="/car.php?id=22">
                                    <button class="animated-btn">RESERVE NOW!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container ad-container l4">
                            <div class="content v-flx gap-20">
                                <span class="xxl regular">For Rent $260 Per Day</span>
                                <span class="xxxl xbold l-space-3">Reserve Now & Get 50% Off</span>
                                <a href="/car.php?id=16">
                                    <button class="animated-btn">RESERVE NOW!</button>
                                </a>
                            </div>
                        </div>
                    </div>
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
        <!-- about us section -->
        <div class="container about-us-container h-flx gap-20">
            <div class="v-flx gap-20">
                <span class="l bold red">About US</span>
                <span class="xl bold l-space-3">Welcome To Gauto</span>
                <span class="s light grey">
                    Since 1992 we have not only committed ourselves to delivering
                    exceptional repair and maintenance service to the worldwide
                    automotive owners.
                </span>
                <ul class="s bold grey grid gap-10">
                    <li class="h-flx gap-10">
                        <i class="fa-solid fa-square-check red"></i>
                        <span>We are a trusted name</span>
                    </li>
                    <li class="h-flx gap-10">
                        <i class="fa-solid fa-square-check red"></i>
                        <span>have a larger stock of vehicles</span>
                    </li>
                    <li class="h-flx gap-10">
                        <i class="fa-solid fa-square-check red"></i>
                        <span>we deal in have all brands</span>
                    </li>
                    <li class="h-flx gap-10">
                        <i class="fa-solid fa-square-check red"></i>
                        <span>we are at worldwide locations</span>
                    </li>
                </ul>
                <div class="h-flx gap-20">
                    <div>
                        <img src="./assets/signature.png" />
                    </div>
                    <div class="v-flx gap-10">
                        <span class="m xbold l-space-3">Hsan Ayari</span>
                        <span class="s light">President</span>
                    </div>
                </div>
            </div>
            <img src="./assets/car.png" alt="" />
        </div>
        <!-- our services -->
        <div class="container our-services-container v-flx center gap-20">
            <span class="l bold red">See Our</span>
            <span class="xl bold">Latest Services</span>
            <div class="swiper-container swiper-container2 cards">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_1.png" />
                                <span>01</span>
                            </div>
                            <span class="m bold">City Transfer</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_2.png" />
                                <span>02</span>
                            </div>
                            <span class="m bold">Air Transfer</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_3.png" />
                                <span>03</span>
                            </div>
                            <span class="m bold">Hospital Transfer</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_4.png" />
                                <span>04</span>
                            </div>
                            <span class="m bold">Wedding Ceremony</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_5.png" />
                                <span>05</span>
                            </div>
                            <span class="m bold">Whole City Tower</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card v-flx gap-10">
                            <div class="head">
                                <img src="./assets/service_6.png" />
                                <span>06</span>
                            </div>
                            <span class="m bold">Baggage Transport</span>
                            <span class="s grey l-height-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                iure quos ut expedita fuga, asperiores officia accusamus.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            var mySwiper = new Swiper(".swiper-container2", {
                direction: "horizontal",
                loop: true,
                slidesPerView: 5,
                spaceBetween: 10,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: ".swiper-pagination",
                    type: "bullets",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            </script>
        </div>
        <div class="work-section">
            <div>
                <div class="v-flx gap-20">
                    <div class="v-flx">
                        <span class="xxl bold l-space-3">Do You Want To Earn With Us?</span>
                        <span class="xxl bold l-space-3">So Don't Be Late</span>
                    </div>
                    <button class="animated-btn">Become A Driver</button>
                </div>
            </div>
            <img src="./assets/car2.png" alt="" />
            <div class="design-1"></div>
            <div class="design-2"></div>
        </div>
        <div class="container center v-flx gap-10 brands-container">
            <span class="xl bold red">Available Brands</span>
            <ul class="h-flx gap-20">
                <?php
                    include "./utils/db_connection.php";
                    
                    $sql = "SELECT * FROM brand";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $image = $row['image'];
                        echo "
                            <li>
                                <a href='/cars.php?brand={$id}'><img src='./media/{$image}'></a>
                            </li>";
                    }
                ?>
            </ul>
        </div>
        <?php
            include "./utils/our_members.php";
        ?>
        <div class="partners-section container v-flx center gap-50">
            <span class="xl bold">With Over <span class="red">150</span> Partners Locations</span>
            <span class="m regular l-height-4">
                Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate velit cillum dolore feu
                fugiat nulla excepteur sint occaecat sed ipsum cupidatat proident culpa exercitation ullamco laboris
                aliquik.
            </span>
            <div class="h-flx gap-20">
                <i class="fa-solid fa-phone icon"></i>
                <div class="v-flx gap-10">
                    <span class="red m bold">Need Any Help?</span>
                    <span class="m bold">(+216) 22 234 567</span>
                </div>
            </div>
        </div>
        <div class="blog-section container v-flx gap-20">
            <span class="m bold red">Latest</span>
            <span class="xl bold">Our Blog</span>
            <div class="blog-cards h-flx gap-20">
                <div class="blog-card">
                    <img src="./assets//blog_1.jpg">
                    <div class="blog-content v-flx">
                        <span class="m bold">If Your Car's Battery Down.</span>
                        <div class="infos h-flx s-between">
                            <span class="s grey">Apr 23, 10:36 am</span>
                            <div class="h-flx gap-20">
                                <div class="h-flx gap-5">
                                    <i class="fa-solid fa-eye red"></i>
                                    <span>330</span>
                                </div>
                                <div class="h-flx gap-5">
                                    <i class="fa-regular fa-comments red"></i>
                                    <span>330</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <img src="./assets//blog_2.jpg">
                    <div class="blog-content v-flx">
                        <span class="m bold">How Often Is A Taxi Used?</span>
                        <div class="infos h-flx s-between">
                            <span class="s grey">Apr 21, 4:23 pm</span>
                            <div class="h-flx gap-20">
                                <div class="h-flx gap-5">
                                    <i class="fa-solid fa-eye red"></i>
                                    <span>530</span>
                                </div>
                                <div class="h-flx gap-5">
                                    <i class="fa-regular fa-comments red"></i>
                                    <span>130</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <img src="./assets//blog_3.jpg">
                    <div class="blog-content v-flx">
                        <span class="m bold">The Best Ways To Pay Drivers</span>
                        <div class="infos h-flx s-between">
                            <span class="s grey">Apr 20, 8:36 am</span>
                            <div class="h-flx gap-20">
                                <div class="h-flx gap-5">
                                    <i class="fa-solid fa-eye red"></i>
                                    <span>330</span>
                                </div>
                                <div class="h-flx gap-5">
                                    <i class="fa-regular fa-comments red"></i>
                                    <span>20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "./utils/footer.php";
        include "./utils/alert.php";
    ?>
</body>

</html>