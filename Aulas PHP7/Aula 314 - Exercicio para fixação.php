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
        $idade = 25;
        $peso = 65.8;
        $pode_doar_sangue = false;

        if ($idade >= 16 && $idade <= 69 && $peso >= 50)
            $pode_doar_sangue = true
    ?>

    <h1>Posso doar sangue?</h1>

    <p>Idade: <?= $idade ?> anos</p>
    <p>Peso: <?= $peso ?> Kg</p>

    <?= $pode_doar_sangue ? 'Atende aos requisitos.' : 'Não atende aos requisitos.'; ?>

</body>
</html>