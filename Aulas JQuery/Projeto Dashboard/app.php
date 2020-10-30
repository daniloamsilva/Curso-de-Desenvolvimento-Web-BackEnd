<?php

    // Classe dashboard
    class Dashboard {

        public $data_inicio;
        public $data_fim;
        public $numero_vendas;
        public $total_vendas;

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
            return $atributo;
        }

    }

    // Classe de conexão
    class Conexao {

        private $host = 'localhost';
        private $dbname = 'dashboard';
        private $user = 'root';
        private $pass = '';

        public function conectar() {
            try {
                
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                $conexao->exec('set charset set utf8');

                return $conexao;

            } catch (PDOException $e) {
                echo '<p>'. $e->getMessage() .'</p>';
            }
        }

    }

    // Classe model
    class Bd {

        private $conexao;
        private $dashboard;

        public function __construct(Conexao $conexao, Dashboard $dashboard) {
            $this->conexao = $conexao->conectar();
            $this->dashboard = $dashboard;
        }

        public function getNumeroVendas() {
            $query = 
                'SELECT COUNT(*) AS numero_vendas 
                FROM tb_vendas 
                WHERE data_venda BETWEEN :data_inicio AND :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
        }

        public function getTotalVendas() {
            $query = 
                'SELECT SUM(total) AS total_vendas 
                FROM tb_vendas 
                WHERE data_venda BETWEEN :data_inicio AND :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        }

    }

    $dashboard = new Dashboard();
    $dashboard->__set('data_inicio', '2018-10-01');
    $dashboard->__set('data_fim', '2018-10-31');

    $conexao = new Conexao();
    $bd = new Bd($conexao, $dashboard);

    $dashboard->__set('numero_vendas', $bd->getNumeroVendas());
    $dashboard->__set('total_vendas', $bd->getTotalVendas());

    print_r($dashboard);

?>