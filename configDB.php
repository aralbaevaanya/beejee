<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'aralbaevaanya';
$db_user = 'anyaaralbaeva';
$db_pass = '123456Aa';
$charset = 'utf8';

$connect = new mysqli($host, $db_user, $db_pass, $db_name);
if ($connect->connect_error) {
    echo 'No';
    die("Connection failed: " . $connect->connect_error);
}