<?php

    class Pai {

        private $nome = 'Paulo';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function setNome($nome){
            if (strlen($nome) >= 3) {
                $this->nome = $nome;
            }else {
                echo 'O nome deve conter pelo menos 3 digitos.';
            }
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi!';
        }

        public function executarAcao(){
            $this->executarMania();
            echo '<br>';
            $this->responder();
        }

    }

    $pai = new Pai();
    # Utilizando o __get automático
    echo $pai->nome;
    echo '<br>';

    # Setando um nome com mais de 3 digitos
    $pai->setNome('Daniel');
    echo $pai->nome;
    echo '<br>';

    # Setando um nome com menos de 3 digitos
    $pai->setNome('Du');
    echo '<br>';

    # Utilzando o método executarAcao() que dispara métodos private e protected
    $pai->executarAcao();

?>