<?php

namespace App\Model;
use Config\Db;

class HomeModel
{
    public static function all()
    {
    
       $db = Db::conexao();
       $sql = "SELECT * FROM usuario";
       $stmt = $db->query($sql);
       $user = $stmt->fetchAll();

       return $user;
       
    }
}