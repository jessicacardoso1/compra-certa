<?php

    namespace compra_certa\controller;
    use  compra_certa\controller\produto\ControladorCategoria;

    class Controlador{

        public function view($dir, $view, $dados = null){
            require($dir.$view.'.php');

        }

        public function paginaNaoEncontrada(){
            $this->view("", "404");

        }

        public function carregarNavbar(){
            $cn = new ControladorCategoria();
            $cn->processaQntProdutosPorCategoria();
        }

        public function parseUrl(){
            return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
        }

    }

?>