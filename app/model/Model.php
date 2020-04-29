<?php
namespace App\Model;

use Config\Db;

class Model{

    public static function all()
    {
       $obj = new static;
       //referencia a classe que herdou 
          $db = Db::conexao();
       $select = "SELECT * FROM " . $obj->table;
       $stmt = $db->query($select);
       $result = $stmt->fetchAll();

       return $result;
    
       
    }
         
         public function save()
            {
         $atributos = get_object_vars($this);
         unset($atributos['table']);
     
         $col = "(";
         $val = "(";
         $aux = true;
         foreach ($atributos as $key => $value) {
           if($aux){
             $aux = false;
             $col .= "`$key`";
             $val .= ":$key";
           }else{
             $col .= ",`$key`";
             $val .= ",:$key";
           }
         }
         $col .= ")";
         $val .= ")";
     
         $insert = "insert into ".$this->table." ".$col." values ".$val;
     
         $conn = Db::conexao();
         $stmt = $conn->prepare($insert);
         foreach ($atributos as $key => $value) {
           $stmt->bindParam(':'.$key,$atributos[$key]);
         }
     
         $stmt->execute();
         return $conn->lastInsertId();
      }
   }
    
 



