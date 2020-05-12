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

        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão.';
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

        function trocarMarcha(){
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé.';
        }

    }

    class Caminhao extends Veiculo {};

    $carro = new Carro('ABC4565', 'preto');
    $moto = new Moto('XCV7868', 'vermelho');
    $caminhao = new Caminhao('TYU4564', 'azul');

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();

?>