<?php
session_start();
if ($_SESSION['user']) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
<?php require 'head.php';?>
<body>

    <form class="login__form" action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <style>
            h1 {
                font-size: 80px;
                text-transform: uppercase;
                text-align: center;
            }
        </style>
        <h1>Registration</h1>
        <div class="avatar__container">
            <img src="../images/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="form__container">
            <label for="user_name"><b>Name</b></label>
            <input class="input__modalF" type="text" placeholder="Enter your name" name="user_name" required>

            <label for="user_surname"><b>Surname</b></label>
            <input class="input__modalF" type="text" placeholder="Enter your surname" name="user_surname">

            
            <label for="user_login"><b>Login</b></label>
            <input class="input__modalF" type="text" placeholder="Enter your login" name="user_login" required>

            <label for="user_avatar"><b>Upload your avatar</b></label>
            <input class="input__modalF" type="file" name="user_avatar">
            
            <label for="user_password"><b>Password</b></label>
            <input class="input__modalF" type="password" placeholder="Enter your password" name="user_password" required>

            <input class="btn__modalF" type="submit" value="Register">

            <div style="text-align: center;">
                <span>Already have an account?
                <a href="index.php"> Sign in</a>
                </span>
            </div>     
            
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="p_error">' . $_SESSION['message'] . '</p>';
                    unset($_SESSION['message']);
                }
            ?>
            
        </div>
    </form>

</body>
</html>