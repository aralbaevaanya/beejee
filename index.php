<?php
session_start();
ini_set('display_errors', 1);
require_once 'core/IssuesView.php';
require_once 'models/Issues.php';
require_once 'configDB.php';
require_once 'views/head.php';

if (isset($_SESSION['user_login'])) {
    require_once 'controllers/adminController.php';
} else {
    require_once 'controllers/mainController.php';
}

