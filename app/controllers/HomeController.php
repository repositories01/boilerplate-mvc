<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Cotacao;

class HomeController extends Controller
{


  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {
    
      return $this->view('home',$response);
  }


}
