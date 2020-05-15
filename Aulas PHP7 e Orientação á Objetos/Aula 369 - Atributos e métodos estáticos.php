<?php

    class Exemplo {

        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        # Métodos estáticos não podem utilizar $this em sua implementação
        public static function metodo1(){
            // $this->atributo2 = 'Vai dar erro';
            echo 'Eu sou um método estático';
        }

        public function metodo2(){
            echo 'Eu sou um método normal';
        }

    }

    # Acessar um atributo estático
    echo Exemplo::$atributo1;
    echo '<br>';

    # Atributos estáticos não podem sem acessados pelo operador ->
    /*
    $exemplo = new Exemplo(); 
    $exemplo->atributo1;
    */

    # Executar um método estático
    Exemplo::metodo1();

?>