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

        public function inserirItem($item, $tela){
            $dados_produto = $this->produto->consultarProdutoViaID($item);
            $dados_produto = $dados_produto[0];

            $p = new \compra_certa\model\produto\Produto;
            $p->setCodigo($item);
            $p->setNome($dados_produto['NOME_PRODUTO']);
            $p->setPreco($dados_produto['PRECO']);
            $p->setImg($dados_produto['IMG']);

            $i = new \compra_certa\model\produto\Item;
            $i->setProduto($p);

            $quantidade = $_POST['quantidade'];
            if(!isset($quantidade))
                $quantidade = 1;
            $i->setQuantidade($quantidade);

            $this->carrinho->inserirItem($i);

            /* redirecionamento para a tela correta */
            if($tela == 'home' || $tela == 1)
                header('location: '.DIRACTION);
            else if($tela == 'detalhes_produto' || $tela == 2)
                header('location: '.DIRACTION.'produto/detalhes/'.$item);
            else if($tela == 'carrinho' || $tela == 3)
                header('location: '.DIRACTION.'carrinho/meuCarrinho');
        }

        public function excluirItem($item){
            $p = new \compra_certa\model\produto\Produto;
            $p->setCodigo($item);

            $i = new \compra_certa\model\produto\Item;
            $i->setProduto($p);

            $this->carrinho->excluirItem($i);

            header('location: '.DIRACTION.'carrinho/meuCarrinho');
        }

        public function limparCarrinho(){
            $this->carrinho->limparCarrinho();

            header('location: '.DIRACTION.'carrinho/meuCarrinho');
        }

    }

?>