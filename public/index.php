<?php

require '../init.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controller\HomeController;

$app = new App;

$app->get('/', HomeController::class . ':index');

$app->run();
