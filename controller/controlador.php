<?php

    namespace compra_certa\controller;

    class Controlador{

        public function view($dir, $view, $dados = null){
            require($dir.$view.'.php');

        }

        public function paginaNaoEncontrada(){
            $this->view("", "404");

        }

    }

?>