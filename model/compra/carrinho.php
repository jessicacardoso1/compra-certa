<?php

    namespace compra_certa\model\produto;

    class Carrinho{
        
        private $cliente;
        private $itens = array();

        public function __construct(){
            $this->restaura();
        }

        public function __destruct(){
            $_SESSION['carrinho'] = serialize($this->itens);
        }

        public function inserirItem($_item){
            if(!$this->itemEstaNoCarrinho($_item))
                $this->itens[] = $_item;
                #array_push($this->itens, $_item);
            else{
                $indice_item = $this->getIndiceItem($_item);

                $this->alterarQuantidade($this->itens[$indice_item], $this->itens[$indice_item]->getQuantidade() + 1);
            }
        }

        public function alterarQuantidade($_item, $_quantidade){
            if($this->itemEstaNoCarrinho($_item)){
                $indice_item = $this->getIndiceItem($_item);

                $this->itens[$indice_item]->setQuantidade($_quantidade);
            }
        }

        public function excluirItem($_item){
            if($this->itemEstaNoCarrinho($_item)){
                $indice_item = $this->getIndiceItem($_item);

                unset($this->itens[$indice_item]);
            }
        }

        public function getQntProdutos(){
            $qnt = 0;
            for($i = 0; $i < count($this->itens); $i++)
                $qnt += $this->itens[$i]->getQuantidade();
            
            return $qnt;
        }

        public function getTotal(){
            $sum = 0;
            for($i = 0; $i < count($this->itens); $i++)
                $sum += $this->itens[$i]->subTotal();
            
            return $sum;
        }

        public function itemEstaNoCarrinho($_item){
            $check = false;
            for($i = 0; $i < count($this->itens); $i++)
                if($this->itens[$i]->getProduto()->getCodigo() == $_item->getProduto()->getCodigo())
                    $check = true;

            return $check;
        }

        public function getIndiceItem($_item){
            $codigo_item = $_item->getProduto()->getCodigo();

            $i = 0;
            for(; $codigo_item != $this->itens[$i]->getProduto()->getCodigo(); $i++);

            return $i;
        }

        public function restaura(){
            if(isset($_SESSION['carrinho']))
                $this->itens = unserialize($_SESSION['carrinho']);
            else
              return array(); 
        }

        /*
        public function salvarDepois(){

        }

        public function finalizarCompra(){
            
        }
        */


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

    }
    
?>