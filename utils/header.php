<header>
    <div class="user-stats-section container">
        <?php
            session_start();
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                echo "
                    <div class='h-flx gap-20'>
                        <div class='h-flx gap-10 hv'>
                            <i class='fa-solid fa-right-from-bracket'></i>
                            <a href='./utils/logout.php'>Logout</a>
                        </div>
                        <div class='h-flx gap-10'>
                            <i class='fa-solid fa-user'></i>
                            <span>{$user['first_name']} {$user['last_name']}</span>
                        </div>
                    </div>
                ";
            } 
            else {
                echo "
                    <div class='h-flx gap-20'>
                        <div class='h-flx gap-10 hv'>
                            <i class='fa-solid fa-right-to-bracket'></i>
                            <a href='./login.php'>Login</a>
                        </div>
                        <div class='h-flx gap-10 hv'>
                            <i class='fa-solid fa-user'></i>
                            <a href='./signup.php'>Register</a>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>
    <div class="h-flx s-between top-header container">
        <a href="/">
            <img src="../assets/logo.png" />
        </a>
        <div class="h-flx gap-50">
            <div class="h-flx gap-10">
                <img src="./assets/world.png" />
                <div class="v-flx gap-5">
                    <span class="xbold xl">Manouba, Tunis</span>
                    <span class="xs light grey">Wed Elil City, Chebaw</span>
                </div>
            </div>
            <div class="h-flx gap-10">
                <img src="./assets/clock.png" />
                <div class="v-flx gap-5">
                    <span class="xbold xl">Monday to Friday</span>
                    <span class="xs light grey">9:00 am - 6:00 pm</span>
                </div>
            </div>
        </div>
        <div class="center call_container">
            <div class="h-flx gap-10">
                <i class="fa-solid fa-phone"></i>
                <span class="m bold">CALL US</span>
            </div>
        </div>
    </div>
    <nav class="bottom-header container">
        <ul class="h-flx s-between m bold">
            <li><a href="/">HOME</a></li>
            <li><a href="./about.php">ABOUT</a></li>
            <li><a href="./service.php">SERVICE</a></li>
            <li><a href="./cars.php">CARS</a></li>
            <li><a href="./gallery.php">GALLERY</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
        </ul>
    </nav>
</header>