<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controllers\HomeController;

$app = new App;

$app->get('/', HomeController::class . ':index');

$app->run();
