<?php

    namespace compra_certa\controller;
    use compra_certa\model\produto\Promocao;

    class ControladorHome extends Controlador{

        public function __construct(){
            $this->carregarNavbar();

            $p = new Promocao(1);
            $this->view("", "home", $p->getPromocao($p));
        }

    }

?>