<?php

    namespace compra_certa\controller\produto;
    use compra_certa\controller\Controlador;

    class ControladorCarrinho extends Controlador{

        protected $carrinho;
        protected $item;
        protected $produto;

        public function __construct(){
            $this->carrinho = new \compra_certa\model\produto\Carrinho;
            $this->item = new \compra_certa\model\produto\Item;
            $this->produto = new \compra_certa\model\produto\Produto;
        }

        public function meuCarrinho(){
            $this->carregarNavbar();

            $dados_tela[] = $lista_itens = $this->carrinho->getItens();
            $dados_tela[] = $this->carrinho->getTotal();

            $this->view("", "carrinho", $dados_tela);
        }

        public function inserirItem($_item){
            $dados_produto = $this->produto->consultarProdutoViaID($_item);
            $dados_produto = $dados_produto[0];

            $this->produto->setCodigo($_item);
            $this->produto->setNome($dados_produto['NOME_PRODUTO']);
            $this->produto->setPreco($dados_produto['PRECO']);
            $this->produto->setImg($dados_produto['IMG']);

            $this->item->setProduto($this->produto);
            $this->item->setQuantidade(1); # quantidade temporária... pegar da tela esse valor...

            $this->carrinho->inserirItem($this->item);

            #$this->carrinho->__destruct();
            #$this->carregarNavbar();
            #echo $this->carrinho->getTotal();
            #header("refresh: 1");
            header('location: '.DIRACTION.'home');
        }

    }



?>