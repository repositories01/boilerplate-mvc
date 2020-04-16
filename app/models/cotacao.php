<?php
namespace App\Models;

use Config\Db;

class Cotacao
{
  static public function all()
  {

   $api = new Db();

   $cotacao =$api->conexao();

   return $cotacao;

   
   

 
  }
}
