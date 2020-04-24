<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
class Home

{
    public function index(ServerRequestInterface $request, ResponseInterface $response){
      $home = include "";

      $response->getBody()->getContents($home);
      return $response;
    
     }
    
}