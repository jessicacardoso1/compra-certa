<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;

    class ControladorConfEmbalagem extends Controlador{

        public function __construct(){
            $this->view("adm_screens/", "conf_embalagem");
        }

    }

?>