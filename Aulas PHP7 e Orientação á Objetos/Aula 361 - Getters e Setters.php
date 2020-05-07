<?php

    class Funcionario {

        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function resumirCadFunco() {
            return $this->getNome() . ' tem o telefone ' . $this->getTelefone() . 
            ' e tem ' . $this->getNumFilhos() . ' filhos.';
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

    }

    $funcionario1 = new Funcionario();
    $funcionario1->setNome('Maria');
    $funcionario1->setTelefone('12 99999-8888');
    $funcionario1->setNumFilhos(3);

    echo $funcionario1->resumirCadFunco();
    echo '<br>';
    $funcionario1->modificarNumFilhos(1);
    echo $funcionario1->resumirCadFunco();
    echo '<br>';

    $funcionario1 = new Funcionario();
    $funcionario1->setNome('José');
    $funcionario1->setTelefone('12 77777-8888');
    $funcionario1->setNumFilhos(2);

    echo $funcionario1->resumirCadFunco();
    echo '<br>';
    $funcionario1->modificarNumFilhos(5);
    echo $funcionario1->resumirCadFunco();
    echo '<br>';

?>