<?php

    class Funcionario {

        public $nome = 'Pedro';
        public $telefone = '12 99999-9999';
        public $numFilhos = 2;

        function resumirCadFunco() {
            return "$this->nome tem o telefone $this->telefone e tem $this->numFilhos filhos.";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

    }

    $funcionario1 = new Funcionario();
    echo $funcionario1->resumirCadFunco();
    echo '<br>';
    $funcionario1->modificarNumFilhos(3);
    echo $funcionario1->resumirCadFunco();

?>