<?php

    class Veiculo {

        public $placa = null;
        public $cor = null;

        function __construct($placa, $cor){
            $this->__set('placa', $placa);
            $this->__set('cor', $cor);
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function acelerar(){
            echo 'Acelerar<br>';
        }

        function freiar(){
            echo 'Freiar<br>';
        }

    }

    class Carro extends Veiculo {
         
        public $teto_solar = true;

        function abrirTetoSolar(){
            echo 'Abriu teto solar<br>';
        }

        function alterarPosicaoVolante(){
            echo 'Alterou a posição do volante<br>';
        }

    }

    class Moto extends Veiculo {

        public $contra_peso_guidao = true;

        function empinar(){
            echo 'Empinar<br>';
        }

    }

    $carro = new Carro('ABC4565', 'preto');
    $moto = new Moto('XCV7868', 'vermelho');

    echo '<pre>';
    print_r($carro);
    echo '</pre>';
    echo '<br><br>';
    echo '<pre>';
    print_r($moto);
    echo '</pre>';

    echo '<hr>';
    $carro->abrirTetoSolar();
    $carro->acelerar();
    $carro->freiar();

    echo '<hr>';
    $moto->empinar();
    $moto->acelerar();
    $moto->freiar();


?>