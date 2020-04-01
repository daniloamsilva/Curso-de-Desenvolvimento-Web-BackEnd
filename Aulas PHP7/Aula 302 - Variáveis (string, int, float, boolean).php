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
        
        // String
        $nome = 'Danilo Augusto';

        // Int
        $idade = 25;
        
        // Float
        $peso = 65.5;

        // Boolean
        $fumante_sn = false; // true = 1 / false = vazio
        
    ?>

    <h1>Dados Cadastrais</h1>

    <p>Nome : <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>