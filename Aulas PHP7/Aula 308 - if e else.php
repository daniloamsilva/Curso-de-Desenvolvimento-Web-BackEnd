<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Testes de comparação entre 1 e 1:</h1>

    <?php
        
        # Instrução if

        # == igual
        echo '==';
        if (1 == 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # === identido
        echo '===';
        if (1 === 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # != diferente
        echo '!=';
        if (1 != 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';
        
        # <> diferente
        echo '<>';
        if (1 <> 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # !== não idêntico
        echo '!==';
        if (1 !== 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # < menor
        echo '<';
        if (1 < 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # > maior
        echo '>';
        if (1 > 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # <= menor igual
        echo '<=';
        if (1 <= 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';

        # >= maior igual
        echo '>=';
        if (1 >= 1) { echo 'Verdadeiro'; } else { echo 'Falso'; }
        echo '<br>';
        
    ?>

</body>
</html>