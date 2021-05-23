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
            $result = mysqli_query($connect, "DELETE FROM `users` WHERE `id_user`='$id'") or die(mysqli_error($connect));
            header("Location: ". $_SERVER["REQUEST_URI"]);
        }   

        $result = mysqli_query($connect, "SELECT * FROM `users`");

        for ($data = []; $user = mysqli_fetch_assoc($result); $data[] = $user);

        $content = '<table>
            <tr>
                <th>id_user</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Login</th>
                <th>Password</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>';

        foreach($data as $user) {
            $content .= "<tr>
                <td>{$user['id_user']}</td>
                <td>{$user['name']}</td>
                <td>{$user['surname']}</td>
                <td>{$user['login']}</td>
                <td>{$user['password']}</td>
                <td>{$user['role']}</td>
                <td><a href=\"/admin/edit_user.php?id={$user['id_user']}\">Edit</a></td>
                <td><a href=\"?delete={$user['id_user']}\">Delete</a></td>
                </tr>";
        }
        $content .= '<tr><a href="add_user.php">Add item</a></tr>';


        $content .= '</table>';
    ?>

    <?php require '../head.php'?>
<body>
    <?php require '../content/header.php'?>
    <?php require '../svg.php'?>
    <style>
    .users__table {
        margin: 100px 0px;        
    }

    .users__table table, td, th{
        font-size: 18px;
        padding: 10px;
    }
    </style>
    <div class="users__table">
        <?=$content?>
    </div>
    
    <?php require '../footer.php'?>
</body>
</html>