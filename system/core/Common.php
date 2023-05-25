<?php


function load_class($class, $directory, $param = NULL)
{
    //require_once BASEPATH."/{$directory}/{$class}.php";
    $c = "system\\core\\".$class;
    $load = new $c();
    return $load;
}


function common_view($template = '', $array = [], $param = false)
{   
    $loader = new System\Core\Loader();
    $loader->view($template, $array, $param);
}

function load_db($t)
{   
    $explodeModel = explode('/', $t);
    $result = count($explodeModel);
    $plate = ucfirst($explodeModel[$result -1]);
    
    $m = "app\\models\\".$plate.'_model';
    if(file_exists(APPPATH."/models/{$plate}_model.php"))
    {
        //require_once BASEPATH.'/core/Model.php';
        //$la_model = new LA_model();

        //require_once APPPATH."/models/{$plate}_model.php";
        $model = new $m();
        return $model;
    }else{
        echo "</br> não exite um model {$plate} </br>";
    }
}