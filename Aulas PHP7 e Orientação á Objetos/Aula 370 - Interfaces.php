<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface {

        public function abrirPorta(){
            echo 'Abriu a porta da geladeira';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }

    }

    class TV implements EquipamentoEletronicoInterface {

        public function trocarCanal(){
            echo 'Trocou o canal da TV';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }

    }

    $geladeira = new Geladeira();
    $TV = new TV();

    // ----------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humana implements MamiferoInterface, TerrestreInterface {

        public function respirar(){
            echo 'Respirar';
        }

        public function andar(){
            echo 'Andar';
        }

        public function conversar(){
            echo 'Conversar';
        }

    }

    class Baleia implements MamiferoInterface, AquaticoInterface {

        public function respirar(){
            echo 'Respirar';
        }

        public function nadar(){
            echo 'Nadar';
        }

        public function esquichar(){
            echo 'Esguichar';
        }

    }

    // =============================================
    
    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function comer(){
            echo 'Comer';
        }

        public function voar(){
            echo 'Voar';
        }
    }

?>