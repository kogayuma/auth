<?php

//mamp mysql接続
$user = 'root';//変更可
$password = 'root';//変更可
$db = 'base_data';//要変更
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DSN','mysql:host=localhost:8889;dbname=base_data;charset=utf8');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
?>
