<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cálculo do imposto de renda</h1>

    <?php

        $salario_cidadao = 1905;

        function calcularEmpostoRenda($salario) {
            
            if ($salario <= 1903.98)
                return 'isento';
            else if ($salario <= 2826.65)
                return ($salario * 7.5) / 100;
            else if ($salario <= 3751.05)
                return ($salario * 15) / 100;
            else if ($salario <= 4664.68)
                return ($salario * 25.5) / 100;
            else
                return ($salario * 27.5) / 100;
            
        }

    ?>

    <p>Salário: <?= $salario_cidadao ?> </p>
    <p>Alíquota: <?= calcularEmpostoRenda($salario_cidadao) ?></p>

</body>
</html>