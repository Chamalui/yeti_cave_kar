<?php

require_once ('functions.php');
require_once ('connect.php');

$link = mysqli_connect('127.0.0.1', 'root', '','yeticavekar');
mysqli_set_charset($link, utf8);



$select = 'SELECT * FROM category';

$cat = $link -> query($select);

$category = $cat -> fetch_all(MYSQLI_ASSOC);



$select = 'SELECT * FROM lots';

$lots = $link -> query($select);

$lots_array = $lots -> fetch_all(MYSQLI_ASSOC);



$select = 'SELECT * FROM bet';

$bet = $link -> query($select);

$bet_array = $bet -> fetch_all(MYSQLI_ASSOC);



$lot = include_template('lot.php', ['category' => $category, 'lots' => $lots, 'bet' => $bet]);
$layout_content = include_template('layout.php', ['page'=>$page, 'catArray'=>$catArray,'title'=>'Главная страница','is_auth'=>$is_auth,'user_name'=>$user_name, 'lotsArray'=>$lotsArray]);
print($lot);

?>
