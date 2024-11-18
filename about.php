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
            <span class="xxxl bold">ABOUT</span>
            <div class="h-flx gap-10">
                <i class="fa-solid fa-house red"></i>
                <a href="/" class="m bold">Home</a>
                <span class="l bold red">></span>
                <span class="m bold">About</span>
            </div>
        </div>
        <div class="h-flx gap-50 about-section">
            <div class="v-flx gap-20">
                <span class="l red">About Us</span>
                <span class="xl bold">We Are Committed To Provide Safe Ride Solutions</span>
                <span class="grey l-height-4">
                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudi- um lectorum. Mirum est
                    notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                    humanitatis per seacula quarta decima et quinta decima.
                </span>
                <span class="grey l-height-4">
                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.litterarum formas
                    humanitatis per seacula quarta decima et quinta decima
                </span>
                <div class="h-flx gap-20">
                    <i class="fa-solid fa-phone xxl red"></i>
                    <div class="v-flx gap-10">
                        <span class="red m">Need Any Help?</span>
                        <span class="m bold">(+216) 22 234 567</span>
                    </div>
                </div>
            </div>
            <div>
                <img src="./assets/bayouma.jpg">
            </div>
        </div>
        <div class="v-flx gap-50 center business-section">
            <div class="v-flx gap-20 center">
                <span class="xxl bold">We Are Proud Of Our Business.</span>
                <span class="xxl bold"><span class="red">Rent Car</span> Now!</span>
            </div>
            <img src="./assets/business.png">
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
        <?php
            include "./utils/our_members.php";
        ?>
    </main>
    <?php
        include "./utils/footer.php";
    ?>
</body>

</html>