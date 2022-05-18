<?php

require_once ('functions.php');
require_once ('connect.php');

$page = include_template('index.php',['catArray'=>$catArray, 'lotsArray'=>$lotArray]);
$layout_content = include_template('layout.php', ['page'=>$page, 'catArray'=>$catArray,'title'=>'Главная страница','is_auth'=>$is_auth,'user_name'=>$user_name, 'lotsArray'=>$lotsArray]);
print($layout_content);

?>
