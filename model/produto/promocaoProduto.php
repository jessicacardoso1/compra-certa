<?php
    class PromocaoProduto{
        private produto;
        private novoValor;

         //getters and setters

    
    public function getProduto()
    {
        return $this->Produto;
    }

    public function setProduto($Produto)
    {
        $this->Produto = $Produto;

        return $this;
    }

    public function getNovoValor()
    {
        return $this->novoValor;
    }
    public function setNovoValor($novoValor)
    {
        $this->novoValor = $novoValor;

        return $this;
    }

        
    }
?>
