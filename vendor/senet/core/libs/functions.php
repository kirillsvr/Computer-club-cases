<?php

function debug($arr){
    echo '<pre>';
    print_r($arr);
    echo  '</pre>';
}

function redirect($http = false){
    if ($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
function gen_passord(){
    $password = '';
    $arr = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '-', '_'
    );
    for ($i = 0; $i < 9; $i++) {
        $password .= $arr[rand(0,count($arr) - 1)];
    }
    return $password;
}

function objectToArray($obj){
    $newProducts = [];
    foreach ($obj as $k => $product){
        $newProducts[$k] = $product->export();
    }
    return $newProducts;
}