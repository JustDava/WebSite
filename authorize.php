<?php
session_start();
?>

<div class="modal__form">
    <form class="login__form animate" action="vendor/signin.php" method="post">
        <div class="avatar__container">
            <span class="close" title="Close Modal" id="close__modal">×</span>
            <img src="../images/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="form__container">
            <label for="user_login"><b>Login</b></label>
            <input class="input__modalF" type="text" placeholder="Enter your login" name="user_login" required>

            <label for="user_password"><b>Password</b></label>
            <input class="input__modalF" type="password" placeholder="Enter your password" name="user_password" required>

            <input class="btn__modalF" type="submit" value="Sign in">

            <div style="text-align: center;">
                <span>Don't have an account yet?
                <a href="../registration.php"> Register</a>
                </span>
            </div>       
            
            <?php
                if ($_SESSION['login_message']) {
                    echo '<p class="p_error">' . $_SESSION['login_message'] . '</p>';
                    unset($_SESSION['login_message']);
                }
            ?>
        </div>

    </form>
</div>