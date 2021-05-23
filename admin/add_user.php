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

    $content = '<form class="adding_form" action="" method="POST" enctype="multipart/form-data">
        <input name="user_name" placeholder="Enter user name"><br><br>
        <input name="user_surname" placeholder="Enter user surname"><br><br>
        <input name="login" placeholder="Enter user login"><br><br>
        <input name="password" placeholder="Enter user password"><br><br>
        <input name="user_avatar" type="file">
        <input name="add_item" type="submit" value="Add">
    </form>';

    if ((isset($_POST['add_item']))) {
        $name = $_POST['user_name'];
        $surname = $_POST['user_surname'];
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        $file_path = 'uploads/'.time().$_FILES['user_avatar']['name'];
        move_uploaded_file($_FILES['user_avatar']['tmp_name'], '../'.$file_path);        

        $query = "INSERT INTO `users`(`name`, `surname`, `login`, `password`, `avatar`, `role`) VALUES ('$name','$surname', '$login', '$password', '$file_path', 'user')";

        mysqli_query($connect, $query) or die(mysqli_error($connect));

        header("Location: ". $_SERVER["REQUEST_URI"]);
    }

?>
    <?php echo $content ?>
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