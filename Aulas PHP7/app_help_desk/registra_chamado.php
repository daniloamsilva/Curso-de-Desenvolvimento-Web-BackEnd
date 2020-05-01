<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $_POST['titulo'] = str_replace('#', '-', $_POST['titulo']);
    $_POST['categoria'] = str_replace('#', '-', $_POST['categoria']);
    $_POST['descricao'] = str_replace('#', "-", $_POST['descricao']);

    $texto = implode('#', $_POST) . PHP_EOL;

    # Abrindo arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    #Escrevendo o texto
    fwrite($arquivo, $texto);
    # Fechando o arquivo
    fclose($arquivo);

    header('location: abrir_chamado.php');
    
?>