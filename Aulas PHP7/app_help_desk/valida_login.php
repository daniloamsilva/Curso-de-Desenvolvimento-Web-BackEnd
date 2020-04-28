<?php
    session_start();

    # Variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    # Usuários do sistema
    $usuario_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd']
    ];

    foreach($usuario_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
    }
?>