<?php
    session_start();

    $_POST['titulo'] = str_replace('#', '-', $_POST['titulo']);
    $_POST['categoria'] = str_replace('#', '-', $_POST['categoria']);
    $_POST['descricao'] = str_replace('#', "-", $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;

    # Abrindo arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
    #Escrevendo o texto
    fwrite($arquivo, $texto);
    # Fechando o arquivo
    fclose($arquivo);

    header('location: abrir_chamado.php');
    
?>