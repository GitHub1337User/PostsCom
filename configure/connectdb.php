<?php 
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","root");
define("DB_NAME","db_post");
$mysql= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if($mysql->connect_error) exit("DB connect Error");
$mysql->set_charset("utf-8");
$mysql->close();
?>