<?php 

    namespace compra_certa\controller\compra;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\compra;

    class ControladorCompra extends Controlador{

        private $compra;

        public function __construct(){
            $this->compra= new Compra();
        }

        public function avaliar(){
            $this->carregarNavbar();
            $this->view("", "avaliar_compras");
        }
        public function rastrear(){
            $this->carregarNavbar();
            $this->view("", "rastrear_compras");
        }

    }

?>
