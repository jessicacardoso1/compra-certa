<?php

    class Carrinho{
        
        private $cliente;
        private $itens;
        private $valor_total;

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

        /**
         * Get the value of itens
         */ 
        public function getItens()
        {
                return $this->itens;
        }

        /**
         * Set the value of itens
         *
         * @return  self
         */ 
        public function setItens($itens)
        {
                $this->itens = $itens;
        }

        /**
         * Get the value of valor_total
         */ 
        public function getValor_total()
        {
                return $this->valor_total;
        }

        /**
         * Set the value of valor_total
         *
         * @return  self
         */ 
        public function setValor_total($valor_total)
        {
                $this->valor_total = $valor_total;
        }
    }

?>