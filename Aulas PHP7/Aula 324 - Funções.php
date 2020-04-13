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

        function exibirBoasVindas() {
            echo 'Olá, seja muito bem vindo! <br>';
        }

        exibirBoasVindas();

        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(5, 15);

    ?>

</body>
</html>