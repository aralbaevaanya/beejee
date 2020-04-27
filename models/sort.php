<?php
session_start();
include_once "../configDB.php";

$_SESSION['sortType'] = trim($_POST['sortType']);
$_SESSION['priority'] = trim($_POST['priority']);

header('Location: ../index.php');
exit();