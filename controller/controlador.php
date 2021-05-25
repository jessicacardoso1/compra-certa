<?php

    class Controlador{

        public function model($dir, $model){
            require "../model/".$dir.$model.".php";

        }

        public function view($dir, $view, $dados = []){
            require "../view/".$dir.$view.'.php';

        }

        public function paginaNaoEncontrada(){
            $this->view("", "404.php");

        }

    }

    $cn = new Controlador();
    $cn->model("produto/", "categoria");

?>