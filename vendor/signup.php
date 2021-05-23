<?php 
    session_start();
    require_once 'connect.php';
    
    $name = $_POST['user_name'];
    $surname = $_POST['user_surname'];
    $login = $_POST['user_login'];
    $password = $_POST['user_password'];    

	$file_path = 'uploads/'.time().$_FILES['user_avatar']['name'];
	if  (!move_uploaded_file($_FILES['user_avatar']['tmp_name'], '../'.$file_path)) 
    {
        $_SESSION['message'] = 'Upload file error!';
        header('Location: ../registration.php');
    }

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id_user`, `name`, `surname`, `login`, `password`, `avatar`, `role`) VALUES (NULL, '$name', '$surname', '$login', '$password', '$file_path', 'user')");

    $_SESSION['user']['avatar'] = $file_path;
    $_SESSION['user']['role'] = 'user';

    header('Location: ../index.php');
?>