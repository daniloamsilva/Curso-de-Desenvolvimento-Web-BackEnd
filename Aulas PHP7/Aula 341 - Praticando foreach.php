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
        
        $funcionarios = [
            $funcionario1 = ['nome' => 'João', 'salario' => 2200],
            $funcionario2 = ['nome' => 'Maria', 'salario' => 3600],
            $funcionario3 = ['nome' => 'Júlia', 'salario' => 2500]
        ];

        foreach($funcionarios as $funcionario){
            foreach($funcionario as $idx => $valor){
                echo $idx . ': ' . $valor . '<br>';
            }
            echo '<hr>';
        }

    ?>

</body>
</html>