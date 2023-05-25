<?php

require BASEPATH."/autoload.php";
use app\controllers\Home;
$url = $_SERVER['REQUEST_URI'];
$url_path = parse_url($url, PHP_URL_PATH);
$url_path_array = explode("/", $url_path);
$dir_app_controller = 'app/controllers/'.ucfirst($url_path_array[1]).'.php';
$var_method = '';

include_once BASEPATH.'/core/Common.php';
//include_once BASEPATH.'/core/Controller.php';

function troller(){
    $c = new system\Core\controller();
    return $c;
}

//var_dump($url_path_array[1]);

if(empty($url_path_array[1]) || !file_exists($dir_app_controller)){
    //load_class('Home', 'controllers');
    //require_once 'app/Controllers/Home.php';
    $varClass = ucfirst($url_path_array[1]);
    $instance = new app\controllers\Home();
    $instance->index();
}


if(file_exists($dir_app_controller)){
    $instance['ins'] = '';
    @$var_method = $url_path_array[2];

    $varClass = "app\\controllers\\".ucfirst($url_path_array[1]);

    //se o arquivo existir o arquivo será chamado com require_once
    //require_once $dir_app_controller;

    //verifica se existe a classe e instancia 
    if(class_exists($varClass)){

    $var_class_path = "app\\Controllers\\".$varClass;
    //var_dump("aqui:".$var_class_path);
    $instance['ins'] = new $varClass();
    }

    //chama o metodo
    $ins = $instance['ins'];
    //var_dump($ins);
    if(is_callable(array($ins, $var_method))){
        
        $ins->$var_method();     
    }
    else{
        $ins->index();
    }

    

}

