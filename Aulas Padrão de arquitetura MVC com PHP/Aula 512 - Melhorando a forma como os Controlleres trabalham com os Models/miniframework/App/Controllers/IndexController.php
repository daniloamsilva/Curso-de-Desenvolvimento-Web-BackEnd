<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action {

        public function index(){

            $produto = Container::getModel('produto');

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos(){

            $info = Container::getModel('info');

            $informacoes = $info->getInfo();

            $this->view->dados = $informacoes;

            $this->render('sobreNos', 'layout1');
        }

    }
?>