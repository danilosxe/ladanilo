<?php

spl_autoload_register(function($class){
   /* $prefix = "system\\";
    $baseDir = __DIR__."\\"  ;
    $len = strlen($prefix);
    //var_dump("len:".$len);

    //var_dump(strncmp($prefix, $class, $len));
    var_dump(
        "<br>".$class, 
        $prefix, 
        $baseDir
    );
    
    if(strncmp($prefix, $class, $len) !== 0){
        //return;
    }

    //$relativeClass = substr($class, $len);*/

    $file = str_replace("\\","/", $class).".php";
    //var_dump($file);

    if(file_exists($file)){
        include $file;
        echo "<br>".$file."<br>";
    }
});