<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/postagens2', function () {
    echo 'Lista postagens';
});

$app->get('/usuarios[/{id}]', function ($request, $response) {
    $id = $request->getAttribute('id');
    echo 'Lista usuarios ou o ID: ' . $id;
});

$app->get('/postagens[/{ano}[/{mes}]]', function ($request, $response) {
    $ano = $request->getAttribute('ano');
    $mes = $request->getAttribute('mes');
    echo 'Lista postagens Ano: ' . $ano . ' Mês: ' . $mes;
});

$app->get('/lista/{itens:.*}', function ($request, $response) {
    $itens = $request->getAttribute('itens');
    var_dump(explode("/", $itens));
});

$app->get('/blog/postagens/{id}', function ($request, $response) {
    echo 'Listar postagens para um ID';
})->setName('blog');

$app->get('/meusite', function ($request, $response) {
    $retorno = $this->get('router')->pathFor('blog', ['id' => '5']);
    echo $retorno;
});

$app->group('/v1', function(){

    $this->get('/usuarios', function(){
        echo 'Listagem de usuarios';
    });

    $this->get('/postagens', function(){
        echo 'Listagem de postagens';
    });

});

$app->run();