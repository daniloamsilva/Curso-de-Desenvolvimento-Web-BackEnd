<?php
    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Leonardo';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function deletar(){
            echo 'Deletar';
        }
    }

    interface CadastroInterface{
        public function deletar();
    }
?>