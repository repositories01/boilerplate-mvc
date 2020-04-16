<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface;

class Controller
{
  public function view(String $view,ResponseInterface $response):ResponseInterface
  {
    $pagina = include '../app/views/'.$view.'.php';

    $response->getBody()->getContents($pagina);
    return $response;
  }
}
