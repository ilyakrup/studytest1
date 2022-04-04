<?php
if(!empty($_POST['mail']) and !empty($_POST['password'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $password = md5($password);
    $mysql = new mysqli('localhost', 'root', '', 'mybase');
    $result = $mysql->query("SELECT * FROM study WHERE mail = '$mail' AND password = '$password'");
    $users = $result->fetch_assoc();
    if (!empty($users)) {
        setcookie('study', $users['mail'], time() + 3600 * 24, "/");
        if(!empty($_COOKIE)) {
            header('Location: http://study/site.php');
            $mysql->close();
            exit();
        }
    } else {
        echo "Где-то ошибка";
    }
}