<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\CadastroModel;

class CadastroController
{


  public function index(Request $request, Response $response)
  {

    $this->dados = CadastroModel::all();
    
   $cadastro= include '../app/views/cadastro.php';
   $response->getBody()->getContents($cadastro);
  }
  
  
  public function salvar(Request $request, Response $response)
  {

    
    
   $cadastro= include '../app/views/cadastro.php';
   $response->getBody()->getContents($cadastro);
  }

}
