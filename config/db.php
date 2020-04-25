<?php


namespace Config;

class Db
{
    public  static function conexao()

    {
      
        try{
            $pdo = new \PDO('mysql:host=localhost;dbname=login', 'root', 'surfsempre0');
            return $pdo;
         

        }catch(PDOException $error){
            return $error->getMessage();

        }
      
    }
}