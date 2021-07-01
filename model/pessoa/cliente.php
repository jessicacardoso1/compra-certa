<?php

    namespace compra_certa\model\pessoa;
    use compra_certa\database\pessoa\ClienteDAO;

    class Cliente extends Pessoa{

        private $email;
        private $ativo;
        private $compras;
        private $enderecos;

        public function efetuarCadastro(){
            $dao = new ClienteDAO();
            
            return $dao->efetuarCadastro($this);
        }

        public function getNumTotalClientes(){
            $dao = new ClienteDAO();
            
            return $dao->getNumTotalClientes();
        }

        public function getNumTotalClientesAtivos(){
            $dao = new ClienteDAO();
            
            return $dao->getNumTotalClientesAtivos();
        }

        public function editarDados(){
            $dao = new ClienteDAO();

            $dao->editarDados($this);
        }

        public function getDadosUser(){
            $dao = new ClienteDAO();

            return $dao->getDadosUser($this);
        }

        public function clientesMaisCompram(){
            $dao = new ClienteDAO();

            return $dao->clientesMaisCompram();
        }

        // getters and setters
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function getAtivo(){
            return $this->ativo;
        }

        public function setAtivo($_ativo){
            $this->ativo = $_ativo;
        }

        public function getCompras(){
            return $this->compras;
        }

        public function setCompras($_compras){
            $this->compras = $_compras;
        }

        public function getEnderecos(){
            return $this->enderecos;
        }

        public function setEnderecos($_enderecos){
            $this->enderecos = $_enderecos;
        }

    }
    
?>