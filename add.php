<?php
require_once ('functions.php');
require_once ('connect.php');

/*$connect = new mysqli('127.0.0.1', 'root', '', 'yeticavekar');*/

$content = include_template('add.php',['catArray'=>$catArray, 'lotArray'=>$lotArray]);
$layout_content = include_template('layout.php', ['page'=>$content, 'catArray'=>$catArray,'title'=>'Главная страница','is_auth'=>$is_auth,'user_name'=>$user_name, 'lotArray'=>$lotArray]);
print($layout_content);
?>
