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
            if($this->itemEstaNoCarrinho($_item)){
                $indice_item = $this->getIndiceItem($_item);

                $qnt_cliente = $_item->getQuantidade();
                $qnt_atual = $this->itens[$indice_item]->getQuantidade();
                $this->itens[$indice_item]->setQuantidade($qnt_cliente + $qnt_atual);
            }
            else{
                $this->itens[] = $_item;
            }
        }

        public function excluirItem($_item){
            if($this->itemEstaNoCarrinho($_item)){
                $indice_item = $this->getIndiceItem($_item);

                /* 
                    solução antiga: unset() 
                    - funcionava entretando apenas via testes por linha de comando...
                    por algum motivo ao excluir o item na tela de carrinho que não
                    fosse de baixo pra cima (último indice do array para o primeiro),
                    o site crashava...
                    foi implementado a construção de um novo array sem o índice do item 
                    a ser excluido para evitar este bug utilizando o unset() para remover 
                    o indice do array $this->itens.
                */
                $new_array = array();
                for($i = 0; $i < count($this->itens); $i++)
                    if($i != $indice_item)
                        $new_array[] = $this->itens[$i];

                $this->itens = $new_array;
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