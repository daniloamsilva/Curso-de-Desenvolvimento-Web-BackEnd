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

        # Array principal
        $listadecoisas = [];

        # Definição dos arrays dentro do array principal
        $listadecoisas['frutas'] = [
            '1' => 'Banana',
            '2' => 'Maçã',
            '3' => 'Morango',
            '4' => 'Uva'
        ];
        $listadecoisas['pessoas'] = array(
            '1' => 'João',
            '2' => 'José',
            '3' => 'Maria'
        );

        # Listagem dos itens dos arrays
        echo '<pre>';
            print_r($listadecoisas);
        echo '</pre>';
        echo '<hr>';

        # Listagem de um item expecifico de cada array
        echo $listadecoisas['frutas'][2];
        echo '<br>';
        echo $listadecoisas['pessoas'][1];

    ?>

</body>
</html>