<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class IndexController extends Action {

        public function index(){
            //$this->view->dados = ['Sofá', 'Cadeira', 'Cama'];

            // instância da conexão
            $conn = Connection::getDb();

            // instância do modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos(){
            //$this->view->dados = ['Notebook', 'Smartphone'];

            // instância da conexão
            $conn = Connection::getDb();

            // instância do modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('sobreNos', 'layout2');
        }

    }
?>