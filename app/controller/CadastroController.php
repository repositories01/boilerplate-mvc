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
    
   $home= include '../app/views/home.php';
   $response->getBody()->getContents($home);
  }
  
  
  public function salvar(Request $request, Response $response)
  {

    // $url = $request->getParsedBody();


     
    // $dado = new CadastroModel; 

    // $dado->nome = $url['nome'];


  //   return $response->withRedirect('/cadastro'); 
    
  //  $home= include '../app/views/home.php';
  //  $response->getBody()->getContents($home );
  }

}
