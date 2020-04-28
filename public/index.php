<?php

require '../init.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controller\HomeController;
use App\Controller\CadastroController;

// $app = new App;
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get('/', CadastroController::class . ':index');
// $app->get('/cadastro', CadastroController::class . ':index');
$app->post('/cadastro/tarefa', CadastroController::class . ':salvar');




$app->run();
