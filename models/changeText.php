<?php
include_once "../configDB.php";
session_start();
if (!isset($_SESSION['user_login'])) {
    echo 'Пожалуйста авторизуйтесь';
    exit();
}

$text = filter_var($_POST['textarea'], FILTER_SANITIZE_STRING);
$id = trim($_POST['id']);


if (!empty($id)) {
    $result = $connect->query("UPDATE `issues` SET `text`='" . $text . "' , `adminEdited`='1' WHERE `id`= '" . $id . "'");
    header('Location: ../index.php');
    exit();
}