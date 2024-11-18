<!DOCTYPE html>
<html lang='en'>

<?php
    include './utils/head.php';
?>

<body>
    <?php
      include './utils/header.php';
    ?>

    <main>
        <div class='page-title'>
            <span class='xxxl bold'>SIGN UP</span>
            <div class='h-flx gap-10'>
                <i class='fa-solid fa-house red'></i>
                <a href='/' class='m bold'>Home</a>
                <span class='l bold red'>></span>
                <span class='m bold'>Signup</span>
            </div>
        </div>
        <div class='h-p-100'>
            <?php
                session_start();
                if(isset($_SESSION['info_first_name'])) {
                    $info_first_name = $_SESSION['info_first_name'];
                    unset($_SESSION['info_first_name']);
                }
                if(isset($_SESSION['info_last_name'])) {
                    $info_last_name = $_SESSION['info_last_name'];
                    unset($_SESSION['info_last_name']);
                }
                if(isset($_SESSION['info_email'])) {
                    $info_email = $_SESSION['info_email'];
                    unset($_SESSION['info_email']);
                }
                if(isset($_SESSION['info_phone'])) {
                    $info_phone = $_SESSION['info_phone'];
                    unset($_SESSION['info_phone']);
                }
                if(isset($_SESSION['info_username'])) {
                    $info_username = $_SESSION['info_username'];
                    unset($_SESSION['info_username']);
                }
                if(isset($_SESSION['info_password'])) {
                    $info_password = $_SESSION['info_password'];
                    unset($_SESSION['info_password']);
                }
                if(isset($_SESSION['info_confirm_password'])) {
                    $info_confirm_password = $_SESSION['info_confirm_password'];
                    unset($_SESSION['info_confirm_password']);
                }
            
            echo "
                <form method='post' action='./utils/add_user.php' class='v-flx gap-30 frm auth-frm'>
                    <div class='center gap-10'>
                        <i class='fa-solid fa-key red xl'></i>
                        <span class='bold xl'>Sign Up</span>
                    </div>
                    <div class='v-flx gap-20'>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-user'></i>
                                <input type='text' placeholder='First Name' name='first_name' required>
                            </div>
                            <span class='xs red'>$info_first_name</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-user'></i>
                                <input type='text' placeholder='Last Name' name='last_name' required>
                            </div>
                            <span class='xs red'>$info_last_name</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-envelope'></i>
                                <input type='email' placeholder='Email' name='email' required>
                            </div>
                            <span class='xs red'>$info_email</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-phone'></i>
                                <input type='text' placeholder='Phone Number' name='phone' required>
                            </div>
                            <span class='xs red'>$info_phone</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-user'></i>
                                <input type='text' placeholder='User Name' name='username' required>
                            </div>
                            <span class='xs red'>$info_username</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-lock'></i>
                                <input type='password' placeholder='Password' name='password' required>
                            </div>
                            <span class='xs red'>$info_password</span>
                        </div>
                        <div class='v-flx gap-10'>
                            <div class='h-flx auth-input'>
                                <i class='fa-solid fa-lock'></i>
                                <input type='password' placeholder='Confirm Password' name='confirm_password' required>
                            </div>
                            <span class='xs red'>$info_confirm_password</span>
                        </div>
                    </div>
                    <div class='center'>
                        <button class='animated-btn dark bnt'>SIGNUP NOW</button>
                    </div>
                    <div class='line'></div>
                    <div class='center'>
                        <a href='./login.php' class='link'>Already Have An Account?</a>
                    </div>
                </form>";
            ?>
        </div>
    </main>

    <?php
        include './utils/footer.php'
    ?>
</body>

</html>