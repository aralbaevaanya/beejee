<?php
require_once 'views/sortingPart.php';
require_once 'views/IssueViewAdmin.php';

$page = $_GET['page'] ? $_GET['page'] : 1;

$issues = new Issues($page);
$view = new IssueViewAdmin($issues);
$view->output();

