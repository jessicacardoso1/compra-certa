<?php

    class Carrinho{
        
        private $cliente;
        private $itens = array();
        private $valor_total;

        public function __construct(){
            $this->cliente = $_SESSION['usuario_logado'];
        }

        public function inserirProduto(){

        }

        public function alterarQuantidade(){

        }

        public function excluirProduto(){

        }

        public function salvarDepois(){

        }

        public function finalizarCompra(){
            
        }

        public function getCliente()
        {
            return $this->cliente;
        }
        
        
        public function setCliente($cliente)
        {
            $this->cliente = $cliente;
        }

        public function getItens()
        {
            return $this->itens;
        }

        public function setItens($itens)
        {
            $this->itens = $itens;
        }

        public function getValor_total()
        {
            return $this->valor_total;
        }

        public function setValor_total($valor_total)
        {
            $this->valor_total = $valor_total;
        }
    }

?>