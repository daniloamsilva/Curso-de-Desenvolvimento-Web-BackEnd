<?php
    namespace App\Controllers;

    class IndexController {

        private $view;

        public function __construct(){
            $this->view = new \stdClass();
        }

        public function index(){
            $this->view->dados = ['Sofá', 'Cadeira', 'Cama'];
            $this->render('index');
        }

        public function sobreNos(){
            $this->view->dados = ['Notebook', 'Smartphone'];    
            $this->render('sobreNos');
        }

        public function render($view){
            $classeAtual = get_class($this);

            $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);

            $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

            require_once '../App/Views/'. $classeAtual .'/'. $view .'.phtml';
        }

    }
?>