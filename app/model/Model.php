<?php
namespace App\Model;

use Config\Db;

class Model{

    public static function all()
    {
       $obj = new static;
       $table = $obj->table;
       //referencia a classe que herdou 



       $db = Db::conexao();
       $sql = "SELECT * FROM " . $table;
       $stmt = $db->query($sql);
    //    $stmt->bindParam(':tabela', $table);
    //    $stmt->execute();
    //    $result = $stmt->fetchAll();
       $result = $stmt->fetchAll();

       return $result;
    
       
    }

 
}


