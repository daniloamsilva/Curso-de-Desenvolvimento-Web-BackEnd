<?php

    class Pessoa {

        public $nome = null;

        function __construct($nome){
            echo 'Pessoa foi inicializada.';
            $this->__set('nome', $nome);
        }

        function __destruct(){
            echo 'Objeto foi destruido.';
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo.';
        }

    }

    $pessoa = new Pessoa('Maria');
    echo '<br> Nome: ' . $pessoa->__get('nome');
    echo '<br>' . $pessoa->correr();
    echo '<br>';
    unset($pessoa);

?>