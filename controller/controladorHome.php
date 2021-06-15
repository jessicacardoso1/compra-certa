<?php

    namespace compra_certa\controller;
    use compra_certa\model\produto\Produto;

    class ControladorHome extends Controlador{

        public function __construct(){
            $this->carregarNavbar();

            $produto = new Produto();
            $promocao = $produto->getPromocao(1);
            $this->view("", "home", $promocao);
        }

    }

?>