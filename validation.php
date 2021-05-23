<?php
    session_start();
// обрабатываем данные до вывода в браузер
if (isset($_POST['button'])) { // если была нажата кнопка "Отправить"
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $email_pattern = '/^[A-Z][A-Z0-9._%+-]+@[A-Z0-9-]+\.[A-Z]{2,4}$/i';
    $phone_pattern = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';

    if (preg_match($email_pattern, $email)) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
    }
    else if (!preg_match($email_pattern, $email)) {
        $_SESSION['email'] = "error";
        header('Location: index.php');
    }
    if (preg_match($phone_pattern, $phone)) {
        $_SESSION['phone'] = $phone;
        header('Location: index.php');
    }
    else if (!preg_match($phone_pattern, $phone)) {
        $_SESSION['phone'] = "error";
        header('Location: index.php');
    }
    if (preg_match($email_pattern, $email) && preg_match($phone_pattern, $phone)) {
        $_SESSION['valid_message'] = "ok";
        header('Location: index.php'); //делаем редирект для предотвращения повторной отправки данных по нажатию F5 (обновить)        
    }
}
?>