<?php

require_once ('functions.php');
require_once ('connect.php');

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    print_r($id);
    foreach ($lotArray as $goods) {
        if($goods['id_lot']==$id){
            print_r($goods['id_lot']);
            $currentLot=$goods;
            /*$content = include_template('lot.php', ['currentLot' => $currentLot, 'userArray' => $userAray, 'catArray' => $catArray]);
            $layout_content = include_template('layout.php', ['page' => $content, 'currentLot' => $currentLot, 'betArray' => $betArray, 'userArray' => $userAray, 'catArray' => $catArray, 'title' => $currentLot['name'], 'is_auth' => $is_auth, 'user_name' => $user_name]);*/
        }
        /*print_r($currentLot);*/
    }
    /*if(empty($lotArray['id_lot'][$id])){
        $content = include_template('lot.php', ['lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);
        $layout_content = include_template('layout.php', ['content' => $content, 'lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);

        print($layout_content);
    }*/
/*добавить 404 как появится то при обовлении будет 404*/

}
if(!empty($lotArray['id_lot'][$id])){
    $content = include_template('error404.php', ['currentLot' => $currentLot, 'userArray' => $userAray, 'catArray' => $catArray]);
    $layout_content = include_template('layout.php', ['page' => $content, 'currentLot' => $currentLot, 'betArray' => $betArray, 'userArray' => $userAray, 'catArray' => $catArray, 'title' => $currentLot['name'], 'is_auth' => $is_auth, 'user_name' => $user_name]);
}else{
    $content = include_template('lot.php', ['currentLot' => $currentLot, 'userArray' => $userAray, 'catArray' => $catArray]);
    $layout_content = include_template('layout.php', ['page' => $content, 'currentLot' => $currentLot, 'betArray' => $betArray, 'userArray' => $userAray, 'catArray' => $catArray, 'title' => $currentLot['name'], 'is_auth' => $is_auth, 'user_name' => $user_name]);
}

print($layout_content);
