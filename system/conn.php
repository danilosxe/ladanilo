<?php

class Conn
{
    public $danilo;
    function __construct()
    {
        
    }

    public function conne(){
        try{
            $conn = new PDO('sqlite:amz.db');
        }catch(PDOExeption $e){
          
            echo $e->getMessage();
        }
    }
}