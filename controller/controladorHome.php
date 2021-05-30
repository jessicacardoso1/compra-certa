<?php

    namespace compra_certa\controller;

    class ControladorHome extends Controlador{

        public function __construct(){
            $this->carregarNavbar();
            $this->view("", "home");
        }

    }

?>