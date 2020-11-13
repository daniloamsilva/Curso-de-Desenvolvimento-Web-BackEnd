<?php
    namespace App\Controllers;
    use MF\Controller\Action;

    class IndexController extends Action {

        public function index(){
            $this->view->dados = ['Sofá', 'Cadeira', 'Cama'];
            $this->render('index', 'layout1');
        }

        public function sobreNos(){
            $this->view->dados = ['Notebook', 'Smartphone'];    
            $this->render('sobreNos', 'layout2');
        }

    }
?>