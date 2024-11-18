<!DOCTYPE html>
<html lang="en">

<?php
    include "./utils/head.php";
?>

<body>
    <?php
        include "./utils/header.php";
    ?>
    <main>
        <div class="page-title">
            <span class="xxxl bold"> GALLERY</span>
            <div class="h-flx gap-10">
                <i class="fa-solid fa-house red"></i>
                <a href="/" class="m bold">Home</a>
                <span class="l bold red">></span>
                <span class="m bold">Gallery</span>
            </div>
        </div>
        <div class="v-flx gap-50 center images-section container">
            <div class="images">
                <div class="image">
                    <img src="./assets/gallery_1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="./assets/gallery_2.jpg" alt="">
                </div>
                <div class="image">
                    <img src="./assets/gallery_3.jpg" alt="">
                </div>
                <div class="image">
                    <img src="./assets/gallery_4.jpg" alt="">
                </div>
                <div class="image">
                    <img src="./assets/blog_1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="./assets/blog_3.jpg" alt="">
                </div>
            </div>
            <button class=" animated-btn dark">More Pictures</button>
        </div>
    </main>
    <?php
        include "./utils/footer.php"
    ?>
</body>

</html>