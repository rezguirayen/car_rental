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
            <span class="xxxl bold">LOGIN</span>
            <div class="h-flx gap-10">
                <i class="fa-solid fa-house red"></i>
                <a href="/" class="m bold">Home</a>
                <span class="l bold red">></span>
                <span class="m bold">Login</span>
            </div>
        </div>
        <div class="h-p-100 bg-white2">
            <?php
                session_start();
                if(isset($_SESSION['info'])) {
                    $info = $_SESSION['info'];
                    unset($_SESSION['info']);
                }
            
            echo "
                <form method='post' action='./utils/check_user.php' class='v-flx gap-30 frm auth-frm'>
                    <div class='center gap-10'>
                        <i class='fa-solid fa-key red xl'></i>
                        <span class='bold xl'>Login</span>
                    </div>
                    <div class='center'>
                        <span class='s red'>$info</span>
                    </div>
                    <div class='v-flx gap-20'>
                        <div class='h-flx auth-input'>
                            <i class='fa-solid fa-user'></i>
                            <input type='text' placeholder='User Name' name='username' required>
                        </div>
                        <div class='h-flx auth-input'>
                            <i class='fa-solid fa-lock'></i>
                            <input type='password' placeholder='Password' name='password' required>
                        </div>
                    </div>
                    <div class='center'>
                        <button class='animated-btn dark bnt'>LOGIN NOW</button>
                    </div>
                    <div class='line'></div>
                    <div class='center'>
                        <a href='./signup.php' class='link'>Do You Need An Account?</a>
                    </div>
                </form>";
            ?>
        </div>
    </main>

    <?php
        include "./utils/footer.php";
        include "./utils/alert.php";
    ?>
</body>

</html>