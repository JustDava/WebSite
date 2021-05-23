<?php
    session_start();
    require '../vendor/connect.php';
    if (empty($_SESSION['user']) || $_SESSION['user']['role']=='user')
    {
        header("Location: ../index.php");
    }
?>

    <?php require '../head.php'?>
<body>
    <?php require '../content/header.php'?>
    <?php require '../svg.php'?>

    
    <?php   
    $id = $_GET['id'];
    $query = "SELECT * FROM `users` WHERE `id_user`='$id'";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $user = mysqli_fetch_assoc($result);

    if ($user != null)
    {
        $name = $user['name'];
        $surname = $user['surname'];
        $login = $user['login'];
        $password = $user['password'];        
        $role = $user['role'];

        $content = "<form class='adding_form' method='POST'>
            <label for='user_name'><b>User name</b></label><br>
            <input name='user_name' value=".$name."><br><br>
            <label for='user_surname'><b>User surname</b></label><br>
            <input name='user_surname' value=".$surname."><br><br>
            <label for='user_login'><b>User login</b></label><br>
            <input name='user_login' value=".$login."><br><br>
            <label for='user_password'><b>User password</b></label><br>
            <input name='user_password' value=".$password."><br><br>
            <label for='role'><b>Role</b></label><br>
            <input name='role' value=".$role."><br><br>
            <input name='edit_item' type='submit' value='Edit'>
        </form>";
    }
    else {
        $content = 'Page not found';
    }

    if ((isset($_POST['edit_item']))) {
        $name = $_POST['user_name'];
        $surname = $_POST['user_surname'];
        $login = $_POST['user_login'];
        $password = md5($_POST['user_password']);        
        $role = $_POST['role'];

        $query = "UPDATE `users` SET `name`='$name',`surname`='$surname',`login`='$login',`password`='$password',`role`='$role' WHERE `id_user` = '$id'";

        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

        $content = "<form class='adding_form' method='POST'>
            <label for='user_name'><b>User name</b></label><br>
            <input name='user_name' value=".$name."><br><br>
            <label for='user_surname'><b>User surname</b></label><br>
            <input name='user_surname' value=".$surname."><br><br>
            <label for='user_login'><b>User login</b></label><br>
            <input name='user_login' value=".$login."><br><br>
            <label for='user_password'><b>User password</b></label><br>
            <input name='user_password' value=".$password."><br><br>
            <label for='role'><b>Role</b></label><br>
            <input name='role' value=".$role."><br><br>
            <input name='edit_item' type='submit' value='Edit'>
        </form>";

    }

?>
    <?=$content ?>
    <!-- <form class="adding_form" action="" method="POST">
        <input name="web_page" placeholder="Enter name of webpage"><br><br>
        <textarea name="text_page" placeholder="Enter text of webpage" cols="30" rows="10"></textarea><br><br>
        <input name="URL" placeholder="Enter URL of webpage"><br><br>
        <input name="place_insert" placeholder="Enter place of insert in webpage"><br><br>
        <input type="submit" value="Add">
    </form> -->
    
    <?php require '../footer.php'?>
</body>
</html>