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
        $formas = ['b' => 'Quadrado','y' => 'Circulo','m' => 'Triângulo'];

        # is_array() - Verifica se o parâmetro é um array
        $retorno = is_array($cores);
        if ($retorno)
            echo 'É um array';
        else
            echo 'Não é um array';
        echo '<hr>';

        # array_keys() - Retorna todas as chaves de um array
        $chaves_array = array_keys($formas);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        echo '<hr>';

        # sort() - Ordena um array e reajusta seus índices
        echo '<pre>';
            print_r($cores);
        echo '</pre>';

        sort($cores);

        echo '<pre>';
            print_r($cores);
        echo '</pre>';
        echo '<hr>';

        # asort() - Ordena um array preservando os índices
        echo '<pre>';
            print_r($formas);
        echo '</pre>';

        asort($formas);

        echo '<pre>';
            print_r($formas);
        echo '</pre>';
        echo '<hr>';

        # count() - Conta a quantidade de elementos em um array
        echo $numero_items = count($cores);
        echo '<hr>';

        # array_merge() - Funde um ou mais arrays
        $array_fundido = array_merge($cores, $formas);
        echo '<pre>';
            print_r($array_fundido);
        echo '</pre>';
        echo '<hr>';

        # explode() - Divide uma string baseada em um delimitador
        $data = '28/10/2019';
        $array_data = explode('/', $data);
        echo '<pre>';
            print_r($array_data);
        echo '</pre>';

        echo $array_data[2] . '-' . $array_data[1] . '-' . $array_data[0];
        echo '<hr>';

        # implode() - Junta elementos de um array em uma string
        $string = implode(' , ', $array_fundido);
        echo $string;

    ?>

</body>
</html>