<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\Compra;

    class ControladorRastrear extends Controlador{

        protected $_compra;

        public function __construct(){
            $this->_compra = new Compra;

            $dados_compras = $this->_compra->getComprasSetorEntrega();

            $this->view("adm_screens/", "rastrear_fun", $dados_compras);
        }

    }

?>