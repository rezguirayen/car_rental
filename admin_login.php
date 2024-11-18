<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Admin Login</title>
</head>

<body>
    <form method='post' action='./utils/check_admin.php' class='v-flx gap-30 frm auth-frm'>
        <div class='center gap-10'>
            <i class='fa-solid fa-key red xl'></i>
            <span class='bold xl'>Login</span>
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
    </form>
    <?php
        include "./utils/alert.php";
    ?>
</body>

</html>