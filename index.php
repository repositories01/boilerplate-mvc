<?php
require 'vendor/autoload.php';
require 'init.php';


$app = new \Slim\App([

    'settings' =>[]
]);

$app->get('/', function(){
$UserControler = new \App\Controller\UserControler;
$UserControler->index();
});

$app->get('/add', function(){
    $UserControler = new \App\Controller\UserControler;
    $UserControler->create();
});

$app->post('/add', function(){
    $UserControler = new \App\Controller\UserControler;
    $UserControler->store();
});

$app->get('/edit/{$id}', function($request){

   $id = $request->getAttribute('id');
    $UserControler = new \App\Controller\UserControler;
    $UserControler->edit($id);
});

$app->post('/edit', function(){

     $UserControler = new \App\Controller\UserControler;
     $UserControler->update();
 });

 $app->get('/remove/{$id}', function($request){
     $id = $request->getAttribute('id');

    $UserControler = new \App\Controller\UserControler;
    $UserControler->remove($id);
});

$app->run();






