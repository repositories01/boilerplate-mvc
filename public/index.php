<?php

require '../init.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\Controller\Home;

$app = new App;

$app->get('/', Home::class . ':index');
$app->run();
