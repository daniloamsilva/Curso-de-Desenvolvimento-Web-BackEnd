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

        # Arrays sequências
        // $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
        $lista_frutas[] = 'Abacaxi';

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        echo '<hr>';

        echo '<pre>';
            print_r($lista_frutas[2]);
        echo '</pre>';
        echo '<hr>';

        # Arrays associativos
        /*$lista_frutas2 = array(
            'a' => 'Banana',
            'b' => 'Maça',
            'x' => 'Morango',
            'z' => 'Uva',
            '2' => 'Abacate'
        );*/
        $lista_frutas2 = [
            'a' => 'Banana',
            'b' => 'Maça',
            'x' => 'Morango',
            'z' => 'Uva',
            '2' => 'Abacate'
        ];
        $lista_frutas2['w'] = 'Abacaxi';

        echo '<pre>';
            print_r($lista_frutas2);
        echo '</pre>';
        echo '<hr>';

        echo '<pre>';
            print_r($lista_frutas2['b']);
        echo '</pre>';
        echo '<hr>';

    ?>

</body>
</html>