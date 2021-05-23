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
    $query = "SELECT * FROM `content` WHERE `id`='$id'";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $page = mysqli_fetch_assoc($result);

    if ($page != null)
    {
        $webpage_name = $page['web_page'];
        $text_page = $page['text_page'];
        $URL = $page['URL'];
        $place_insert = $page['place_insert'];

        $content = "<form class='adding_form' method='POST'>
            <label for='web_page'><b>Webpage_name</b></label><br>
            <input name='web_page' value=".$webpage_name."><br><br>
            <label for='text_page'><b>Text_page</b></label><br>
            <textarea name='text_page'>".$text_page." </textarea><br><br>
            <label for='URL'><b>URL</b></label><br>
            <input name='URL' value=".$URL."><br><br>
            <label for='place_insert'><b>Place_insert</b></label><br>
            <input name='place_insert' value=".$place_insert."><br><br>
            <input name='edit_item' type='submit' value='Edit'>
        </form>";
    }
    else {
        $content = 'Page not found';
    }

    if ((isset($_POST['edit_item']))) {
        $webpage_name = $_POST['web_page'];
        $text_page = $_POST['text_page'];
        $URL = $_POST['URL'];
        $place_insert = $_POST['place_insert'];

        $query = "UPDATE `content` SET `web_page`='$webpage_name',`text_page`='$text_page',`URL`='$URL',`place_insert`='$place_insert' WHERE `id`=$id";

        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

        $content = "<form class='adding_form' method='POST'>
            <label for='web_page'><b>Webpage_name</b></label><br>
            <input name='web_page' value=".$webpage_name."><br><br>
            <label for='text_page'><b>Text_page</b></label><br>
            <textarea name='text_page'>".$text_page." </textarea><br><br>
            <label for='URL'><b>URL</b></label><br>
            <input name='URL' value=".$URL."><br><br>
            <label for='place_insert'><b>Place_insert</b></label><br>
            <input name='place_insert' value=".$place_insert."><br><br>
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