<?php

require_once ('functions.php');
require_once ('connect.php');


if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    foreach ($lotArray as $goods) {
        if($goods['id_lot']==$id){
            $content = include_template('lot.php', ['lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);
            $layout_content = include_template('layout.php', ['content' => $content, 'lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);

            print($layout_content);
        }
    }
    if(empty($lotArray['id_lot'][$id])){
        $content = include_template('lot.php', ['lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);
        $layout_content = include_template('layout.php', ['content' => $content, 'lotArray' => $lotArray, 'betArray' => $betArray, 'userArray' => $userAray, 'category' => $category]);

        print($layout_content);
    }
/*добавить 404 как появится то при обовлении будет 404*/
}
