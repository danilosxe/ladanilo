<?php

namespace App\Controllers;
use System\Core\Controller;
class Contato extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = 
        [
            'view' => 'contato',
            'css' => 'main'
        ];

        //var_dump($data);
        $this->load->view('theme', $data);
        //var_dump($this->load);

        //$contato_model->getDate();
        //$this->load[0]['vars']->getDate();
      
        
        

    }
}