<?php
chdir(dirname(__DIR__));

/*
* NOME DO DIRETORIO APP
* Variavel contem o nome do diretorio system
*/  
    $application_folder = 'app';

/*
* NOME DO DIRETORIO SYSTEM
* Variavel contem o nome do diretorio system
*/  
    $system_folder = 'system';

    //Path do diretorio system 
    define('BASEPATH', $system_folder);

    //Path do diretorio app 
    define('APPPATH', $application_folder);

require_once BASEPATH.'/core/Ladanilo.php';