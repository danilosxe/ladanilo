<?php
namespace App\Models;

use System\Core\Model;

class Contato_model extends Model
{
    public function __construct()
    {
       parent::__construct(); 
        //echo 'home model';
        //$this->getDate();
    }

    public function getDate()
    {
        //require_once BASEPATH.'/connect.php';
        //$this->db = ['conn' => $conn];
    }
}