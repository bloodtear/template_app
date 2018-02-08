<?php



defined('DB_USER') or define('DB_USER', "app_user");

// app
include_once(APP_PATH . "/app/helper.php");
//echo APP_PATH . "/app/User.class.php";
$r = include_once(APP_PATH . "/app/User.class.php");
$r2 = class_exists("User");
//echo $r;
//echo var_dump($r2);
// db	
include_once(APP_PATH . "/database/Db_user.class.php");






?>
