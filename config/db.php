<?php


namespace Config;

class Db
{
    public  static function conexao()

    {
      
        try{
            $pdo = new \PDO('mysql:host=localhost;dbname=cotacao', 'thiago', 'root');
            return $pdo;    
         

        }catch(PDOException $error){
            return $error->getMessage();

        }
      
    }
}