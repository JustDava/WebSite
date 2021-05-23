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
            $result = mysqli_query($connect, "DELETE FROM `content` WHERE `id`='$id'") or die(mysqli_error($connect));
            header("Location: ". $_SERVER["REQUEST_URI"]);
        }    

        $result = mysqli_query($connect, "SELECT * FROM `content`");

        for ($data = []; $page = mysqli_fetch_assoc($result); $data[] = $page);

        $content = '<table>
            <tr>
                <th>Webpage_name</th>
                <th>URL</th>
                <th>Text</th>
                <th>Insert_place</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>';

        foreach($data as $page) {
            $content .= "<tr>
                <td>{$page['web_page']}</td>
                <td>{$page['URL']}</td>
                <td>{$page['text_page']}</td>
                <td>{$page['place_insert']}</td>
                <td><a href=\"/admin/edit_page.php?id={$page['id']}\">Edit</a></td>
                <td><a href=\"?delete={$page['id']}\">Delete</a></td>
                </tr>";
        }
        $content .= '<tr><a href="add_page.php">Add item</a></tr>';

        $content .= '</table>'; 

    ?>

    <?php require '../head.php'?>
<body>
    <?php require '../content/header.php'?>
    <?php require '../svg.php'?>
    <style>
    .pages__table {
        margin: 100px 0px;        
    }

    .pages__table table, td, th{
        font-size: 18px;
        padding: 10px;
    }
    </style>
    <div class="pages__table">
        <?=$content?>
    </div>
    
    <?php require '../footer.php'?>
</body>
</html>