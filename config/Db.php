<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $url="https://economia.awesomeapi.com.br/json/all";
    $response =json_decode(file_get_contents($url));

    return $response;
  }
}
