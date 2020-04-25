<?php

namespace App\Model;
use Config\Db;

class HomeModel
{
    public static function all()
    {
    
       $sql = "SELECT * FROM user";
       $db = Db::conexao();
       $stmt = $db->query($sql);
       $user = $stmt->fetchAll();

       return $user;
       
    }
}
