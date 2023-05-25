<?php

namespace App\Controllers;
use System\Core\Controller;
class Home extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
    
        
        $data = 
        [
            'view' => 'home',
            'css' => 'main',
            'sqlite3' => 'amz'
        ];

        //var_dump($this);
        $this->load->view('theme', $data);
        var_dump($this);

        //$db = load_db();
        

    }
}