<?php

namespace App\Models;

use System\Core\Model;

class Home_model extends Model
{
    public function __construct()
    {
       parent::__construct(); 
        //echo 'home model';
        $this->getDate();
    }

    public function getDate()
    {
        require BASEPATH.'/connect.php';
        $sqlSelect = 'SELECT nome, email FROM cadastro';
        $stmt = $conn->prepare($sqlSelect);
        //$stmt->bindValue(':nome', $key);
        $stmt->execute();
        $row = $stmt->fetchAll();
        //var_dump($row);
        $this->db = ['conn' => $row];
    }
}