<?php

    namespace A;

    class Cliente implements CadastroInterface {
        public $nome = 'Pedro';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo 'Salvar';
        }
    }

    interface CadastroInterface{
        public function salvar();
    }

    // ====================================================

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

    # ===============================================

    $cliente = new \A\Cliente();
    print_r($cliente);
    echo '<hr>';

    $cliente = new Cliente();
    print_r($cliente);
    echo '<hr>';

?>