<?php

    namespace compra_certa\controller\produto;
    use compra_certa\controller\Controlador;

    class ControladorCarrinho extends Controlador{

        public function __construct(){
            $this->carregarNavbar();

            $this->view("", "carrinho");
        }


        

    }



?>