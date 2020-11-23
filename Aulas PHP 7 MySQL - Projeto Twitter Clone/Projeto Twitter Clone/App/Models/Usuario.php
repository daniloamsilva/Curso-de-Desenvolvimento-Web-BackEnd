<?php

    namespace App\Models;
    use MF\Model\Model;

    class Usuario extends Model {
        
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        //salvar
        public function salvar(){
            $query = "INSERT INTO usuarios(nome, email, senha) VALUE(:nome, :email, :senha);";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome', $this->__get('nome'));
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->bindValue(':senha', $this->__get('senha'));
            $stmt->execute();

            return $this;
        }

        //validar cadastro para registro
        public function validarCadastro(){
            
            if( strlen($this->__get('nome')) < 3 ||
                strlen($this->__get('email')) < 3 ||
                strlen($this->__get('senha')) < 3 )
                return false;

            return true;
        }

        //recupera um usuario por email
        public function getUsuarioPorEmail(){
            $query = "SELECT nome, email FROM usuarios WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':email', $this->__get('email'));
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

    }

?>