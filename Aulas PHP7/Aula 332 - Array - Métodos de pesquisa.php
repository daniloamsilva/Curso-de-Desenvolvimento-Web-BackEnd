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

        # Array simples
        $cores = ['Vermelho', 'Amarelo', 'Preto', 'Branco'];
        $formas = ['Quadrado', 'Circulo', 'Triângulo'];

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

        # Método in_array();
        $existe_cor = in_array('Vermelho', $cores); // true = 1 ,  false = vazio
        if ($existe_cor) {
            echo 'Sim, o valor pesquisado existe no array.';
        }else {
            echo 'Não, o valor pesquisado não existe no array.';
        }
        echo '<br>';

        $existe_fruta = in_array('Abacaxi', $listadecoisas['frutas']); // true = 1 ,  false = vazio
        if ($existe_fruta) {
            echo 'Sim, o valor pesquisado existe no array.';
        }else {
            echo 'Não, o valor pesquisado não existe no array.';
        }
        echo '<br>';

        # Método array_search();
        $existe_forma = array_search('Retângulo', $formas); // Retorna o indice do item ou nulo
        if ($existe_forma != null) {
            echo 'Sim, o valor pesquisado existe no array.';
        }else {
            echo 'Não, o valor pesquisado não existe no array.';
        }
        echo '<br>';

        $existe_pessoa = array_search('João', $listadecoisas['pessoas']);
        if ($existe_pessoa != null) {
            echo 'Sim, o valor pesquisado existe no array.';
        }else {
            echo 'Não, o valor pesquisado não existe no array.';
        }
        echo '<br>';

    ?>

</body>
</html>