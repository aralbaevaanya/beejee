<?php
include_once "../configDB.php";

$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

if (!empty($login) && !empty($pwd)) {
    $result = $connect->query("SELECT * FROM `admins` WHERE `login`= '" . $login . "'");

    if ($result->num_rows == 1) {
        $user = $result->fetch_object();

        if (password_verify($pwd, $user->password)) {
            session_start();
            $_SESSION['user_login'] = $user->login;
            header('Location: ../index.php');
            exit();
        } else {
            echo 'Неверный пароль';
        }
    } else {
        echo "Неверный логин $login";
    }
} else {
    echo "Пожалуйста заполните все поля";
}