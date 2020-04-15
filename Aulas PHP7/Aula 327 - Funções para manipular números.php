<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        $numero = 7.5;
        
        # Arredonda o número para cima
        echo ceil($numero) . '<br>';

        # Arredonda o número para baixo
        echo floor($numero) . '<br>';

        # Arredonda o número baseado nas casas decimais
        echo round($numero) . '<br>';

        # Gera um número aleatório
        echo rand(10, 20) . '<br>';

        # Retorna a raiz quadrada de um número
        echo sqrt(9) . '<br>';

    ?>

</body>
</html>