<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        
        # Olá Maria, vi que sua cor preferida é amarelo e que gosta de andar de bicicleta.
        $nome = 'Maria';
        $cor = 'amarelo';
        $atividade_preferida = 'andar de bicicleta';

        # Aspas simples com operador .
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ' e que gosta de '. $atividade_preferida;

        echo '<br>';

        # Aspas duplas
        echo "Olá $nome, vi que sua cor preferida é $cor e que gosta de $atividade_preferida.";
        
    ?>

</body>
</html>