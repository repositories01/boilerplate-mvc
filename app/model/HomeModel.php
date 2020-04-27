<?php

namespace App\Model;

class HomeModel extends Model
{
   public static function apiMoedas()
   {
    $url = "https://economia.awesomeapi.com.br/all";
    $moedas = json_decode(file_get_contents($url),true);

    return $moedas;

   }
   
}
