<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['user_login'];
    $password = md5($_POST['user_password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {        
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id_user" => $user['id_user'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "avatar" => $user['avatar'],
            "role" => $user['role']
        ];

        header('Location: ../index.php');
    }
    else {
        $_SESSION['login_message'] = 'Incorrect login or password';
        header('Location: ../index.php');
    }
?>