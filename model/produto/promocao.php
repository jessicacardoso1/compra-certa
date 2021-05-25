<?php
    class promocao{
        private produtos;
        private nome;
    }

    public function getProdutos()
    {
        return $this->Produto;
    }

    public function setProdutos($Produtos)
    {
        $this->Produtos = $Produtos;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
?>