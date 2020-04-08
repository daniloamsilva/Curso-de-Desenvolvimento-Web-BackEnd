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
        $cliente_possui_cartão_loja = true; 
        $valor_compra = 350;
        
        $recebeu_desconto_frete = true;
        $valor_frete = 50;

        if ($cliente_possui_cartão_loja && $valor_compra >= 400) {
            $valor_frete = 0;
        } else if ($cliente_possui_cartão_loja && $valor_compra >= 300) {
            $valor_frete = 10;
        } else if ($cliente_possui_cartão_loja && $valor_compra >= 100) {
            $valor_frete = 25;
        } else {
            $recebeu_desconto_frete = false;
        }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?php
            if ($cliente_possui_cartão_loja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Receber desconto no frete? 
        <?php
            if ($recebeu_desconto_frete) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>