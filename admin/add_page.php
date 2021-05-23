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

    $content = '<form class="adding_form" action="" method="POST">
        <input name="web_page" placeholder="Enter name of webpage"><br><br>
        <textarea name="text_page" placeholder="Enter text of webpage" cols="30" rows="10"></textarea><br><br>
        <input name="URL" placeholder="Enter URL of webpage"><br><br>
        <input name="place_insert" placeholder="Enter place of insert in webpage"><br><br>
        <input name="add_item" type="submit" value="Add">
    </form>';

    if ((isset($_POST['add_item']))) {
        $webpage_name = $_POST['web_page'];
        $text_page = $_POST['text_page'];
        $URL = $_POST['URL'];
        $place_insert = $_POST['place_insert'];

        $query = "INSERT INTO `content`(`web_page`, `text_page`, `URL`, `place_insert`) VALUES ('$webpage_name','$text_page', '$URL', '$place_insert')";

        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

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