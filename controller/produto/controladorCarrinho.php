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

            $p = new \compra_certa\model\produto\Produto;
            $p->setCodigo($_item);
            $p->setNome($dados_produto['NOME_PRODUTO']);
            $p->setPreco($dados_produto['PRECO']);
            $p->setImg($dados_produto['IMG']);

            $i = new \compra_certa\model\produto\Item;
            $i->setProduto($p);
            $i->setQuantidade(1); # quantidade temporária... pegar da tela esse valor...

            $this->carrinho->inserirItem($i);

            header('location: '.DIRACTION.'home');
        }

        public function excluirItem($_item){
            $p = new \compra_certa\model\produto\Produto;
            $p->setCodigo($_item);

            $i = new \compra_certa\model\produto\Item;
            $i->setProduto($p);

            $this->carrinho->excluirItem($i);

            #header('location: '.DIRACTION.'carrinho/meuCarrinho');
        }

    }

?>