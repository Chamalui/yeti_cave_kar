<?php
$is_auth = rand(0, 1);

/*$catArray = [
    ["category" => "Доски и лыжи", "image" => "boards"],
    ["category" => "Крепления", "image" => "attachment"],
    ["category" => "Ботинки", "image" => "boots"],
    ["category" => "Одежда", "image" => "clothing"],
    ["category" => "Инструменты", "image" => "tools"],
    ["category" => "Разное", "image" => "other"]
];
$cat = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "category" => $catArray[0]["category"],
        "cost" => 10999,
        "img" => "img/lot-1.jpg"
    ],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => $catArray[0]["category"],
        "cost" => 15999,
        "img" => "img/lot-2.jpg"
    ],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => $catArray[1]["category"],
        "cost" => 8000,
        "img" => "img/lot-3.jpg"
    ],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => $catArray[2]["category"],
        "cost" => 10999,
        "img" => "img/lot-4.jpg"
    ],
    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => $catArray[3]["category"],
        "cost" => 7500,
        "img" => "img/lot-5.jpg"
    ],
    [
        "name" => "Маска Oakley Canopy",
        "category" => $catArray[5]["category"],
        "cost" => 5400,
        "img" => "img/lot-6.jpg"
    ]
];*/

function money_format($number){
    $number = ceil($number);
    if($number>1000){
        $result = number_format($number,0,","," ");
    } else{
        $result = $number;
    }
    return $result.'<b class="rub">p</b>';
}

function data_timer(){
    $now_time = new DateTime('now');
    $not_now_time = new DateTime('24:00');
    $time_interval = $now_time->diff($not_now_time);
    return $time_interval->format('%H:%i:%s');
}

function include_template($name,$data){
    $name = 'templates/'.$name;
    $result='';
    if(!file_exists($name)){
        return $result;
    }
    ob_start();
    extract($data);
    require ($name);
    $result = ob_get_clean();
    return $result;
}

$user_name = 'Alex'; // укажите здесь ваше имя
?>
