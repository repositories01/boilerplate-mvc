<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\HomeModel;

class HomeController
{


  public function index(Request $request, Response $response)
  {

    $this->dado = HomeModel::all();
    
   $pagina = include '../app/views/home.php';
   $response->getBody()->getContents($pagina);
  }
  

}
