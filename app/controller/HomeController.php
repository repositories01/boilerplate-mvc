<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Model\HomeModel;

class HomeController
{


  public function index(Request $request, Response $response)
  {

    $this->dados = HomeModel::all();
    
   $home= include '../app/views/home.php';
   $response->getBody()->getContents($home);
  }
  
  
  public function salvar(Request $request, Response $response)
  {
    $dados = $request->getParsedBody();
    $task = new HomeModel;

    $task->tarefas = $dados['tarefas'];
    $objtask = $task->save();

    return $response->withRedirect('/'); 
    
  //  $home= include '../app/views/home.php';
  //  $response->getBody()->getContents($home );
}

public function editar( Request $request, Response $response)
{
  $id = $request->getAttribute('id');

  $editar = HomeModel::find($id);


  $this->editar = $editar;


  $editar= include '../app/views/editar.php';
  $response->getBody()->getContents($editar );
}

public function atualizar(Request $request, Response $response)
{
  $dados = $request->getParsedBody();
  $id = $request->getAttribute('id');
  $atualizar = HomeModel::find($id);
  $atualizar->tarefas = $dados['tarefas'];
  $objAtualizar = $atualizar->save();

  return $response->withRedirect('/');
}

}
