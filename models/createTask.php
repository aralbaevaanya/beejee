<?php
include_once "../configDB.php";

$userName = '\'' . filter_var($_POST['name'], FILTER_SANITIZE_STRING) . '\'';
$email = '\'' . filter_var($_POST['email'], FILTER_SANITIZE_STRING) . '\'';
$text = '\'' . filter_var($_POST['text'], FILTER_SANITIZE_STRING) . '\'';


$result = $connect->query("INSERT INTO `issues`(`user name`, `email`, `text`, `performed`) VALUES ($userName,$email,$text,0)");
echo '<center>
 
Спасибо за отправку вашего сообщения!
 
</center>';
