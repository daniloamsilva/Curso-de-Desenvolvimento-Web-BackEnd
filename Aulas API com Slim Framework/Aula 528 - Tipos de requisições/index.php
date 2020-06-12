<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';

$app = new \Slim\App;

// Padrão PSR7
$app->get('/postagens', function (Request $request, Response $response) {
    
    // Escreve no corpo da resposta utilizando o padrão PSR7
    $response->getBody()->write('Lista de postagens');
    return $response;
});

$app->post('/usuarios/adiciona', function (Request $request, Response $response) {
    
    $post = $request->getParsedBody();

    // Salvar no banco de dados

    return $response->getBody()->write($post['nome']);

});

$app->put('/usuarios/atualiza', function (Request $request, Response $response) {
    
    $post = $request->getParsedBody();
    $nome = $post['nome'];

    // Atualizar no banco de dados

    return $response->getBody()->write('Sucesso ao atualizar: ' . $nome);

});

$app->delete('/usuarios/remove/{id}', function (Request $request, Response $response) {
    
    $id = $request->getAttribute('id');

    // Deletar no banco de dados

    return $response->getBody()->write('Sucesso ao deletar: ' . $id);

});

$app->run();
/*
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
*/