<?php
try{
    $conn = new PDO('sqlite:amz.db');
}catch(PDOExeption $e){
  
    echo $e->getMessage();
}

?>