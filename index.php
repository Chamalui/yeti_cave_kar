<?php

require_once ('functions.php');
require_once ('connect.php');

$page = include_template('index.php',['catArray'=>$catArray, 'lotArray'=>$lotArray]);
$layout_content = include_template('layout.php', ['page'=>$page, 'catArray'=>$catArray,'title'=>'Главная страница','is_auth'=>$is_auth,'user_name'=>$user_name, 'lotArray'=>$lotArray]);
print($layout_content);

?>
