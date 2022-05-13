<?php

require_once ('functions.php');

$page = include_template('index.php',['catArray'=>$catArray, 'cat'=>$cat]);
$layout_content = include_template('layout.php', ['page'=>$page, 'catArray'=>$catArray,'title'=>'Главная страница','is_auth'=>$is_auth,'user_name'=>$user_name]);
print($layout_content);

?>
