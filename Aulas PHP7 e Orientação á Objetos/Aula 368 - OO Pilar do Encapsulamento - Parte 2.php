<?php

    class Pai {

        private $nome = 'Paulo';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';
        /*
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }
        */
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

    class Filho extends Pai {
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }
        /*
        public function getAtributo($atributo){
            return $this->$atributo;
        }

        public function setAtributo($atributo, $valor){
            $this->$atributo = $valor;
        }
        */
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    echo $filho->nome;
    $filho->nome = 'Jorge Silva';
    echo '<br>';
    echo $filho->nome;

    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    /*
    # Gera um erro porque estamos tentando acessar um atributo privado do objeto Pai.
    echo $filho->getAtributo('nome');
    # Um atributo nome é gerado de forma dinâmina para o objeto Filho.
    $filho->setAtributo('nome', 'Daniel');
    echo '<br>';
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    */

?>