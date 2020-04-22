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
        
        # Array que irá guardar os números sorteados
        $numeros = [];

        # Laço for que inicia o sorteio
        while (count($numeros) < 6){

            # Um número é sorteado
            $numero_sorteado = rand(1, 60);

            # Veficamos se o número é repetido
            if (in_array($numero_sorteado, $numeros)) {
                 continue;
            }

            # Se o número não é repetido, adicionamos no array numeros
            $numeros[] = $numero_sorteado;

        }

        # Laço que apresenta os números na tela
        foreach ($numeros as $numero){

            echo ' | ' . $numero . ' | ';

        }

    ?>

</body>
</html>