<?php
    session_start();
    require '../vendor/connect.php';
    if (empty($_SESSION['user']) || $_SESSION['user']['role']=='user')
    {
        header("Location: ../index.php");
    }
?>

<?php    

        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $result = mysqli_query($connect, "DELETE FROM `images(watermark)` WHERE `id`='$id'") or die(mysqli_error($connect));
            header("Location: ". $_SERVER["REQUEST_URI"]);
        }   

        $result = mysqli_query($connect, "SELECT * FROM `images(watermark)`");

        for ($data = []; $img = mysqli_fetch_assoc($result); $data[] = $img);

        $content = '<table>
            <tr>
                <th>Id</th>
                <th>Image name</th>
                <th>Image URL</th>
                <th>Delete</th>
            </tr>';

        foreach($data as $img) {
            $content .= "<tr>
                <td>{$img['id']}</td>
                <td>{$img['img_name']}</td>
                <td>{$img['img_path']}</td>                
                <td><a href=\"?delete={$img['id']}\">Delete</a></td>
                </tr>";
        }
    
        $content .= '</table>';
    ?>

    <?php require '../head.php'?>
<body>
    <?php require '../content/header.php'?>
    <?php require '../svg.php'?>
    <style>
    .images__table {
        margin: 100px 0px;        
    }

    .images__table table, td, th{
        font-size: 18px;
        padding: 10px;
    }
    </style>
    <div class="images__table">
        <?=$content?>
    </div>
    
    <?php require '../footer.php'?>
</body>
</html>