<?php

    namespace compra_certa\controller;

    class Controlador404 extends Controlador{

        public function __construct(){
            $this->carregarNavbar();
            $this->paginaNaoEncontrada();
        }

    }

?>