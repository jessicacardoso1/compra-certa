<?php

    namespace compra_certa\controller;
    use compra_certa\controller\produto\ControladorCategoria;

    class Controlador{

        public function view($dir, $view, $dados = null){
            require($dir.$view.'.php');

        }

        public function paginaNaoEncontrada(){
            $this->view("", "404");

        }

        public function carregarNavbar(){
            $cn = new ControladorCategoria();
            $carrinho = new \compra_certa\model\produto\Carrinho;

            $qnt_produtos = $carrinho->getQntProdutos();
            $categorias = $cn->processaQntProdutosPorCategoria();

            $dados_navbar[] = $categorias;
            $dados_navbar[] = $qnt_produtos;

            $this->view("", "navbar", $dados_navbar);
        }

        public function parseUrl(){
            return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
        }

    }

?>