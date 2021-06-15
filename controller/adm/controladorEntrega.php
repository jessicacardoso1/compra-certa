<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;

    class ControladorEntrega extends Controlador{

        public function __construct(){
            $this->view("adm_screens/", "entrega");
        }

    }

?>