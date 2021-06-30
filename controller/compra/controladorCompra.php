<?php 

    namespace compra_certa\controller\compra;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\compra;
    use compra_certa\model\pessoa\Cliente;
    use compra_certa\model\compra\avaliacao;

    class ControladorCompra extends Controlador{

        private $compra;
        private $cliente;
        private $avaliacao;

        public function __construct(){
            if(!$_SESSION['usuario_logado']){
                header('location: '.DIRACTION);

                return;
            }

            $this->compra= new Compra();
            $this->cliente = new Cliente();
            $this->cliente->setCpf($_SESSION['usuario_logado']);
        }

        public function listarCompras(){
            $listaCompras = $this->compra->listarCompras($this->cliente);
            $this->carregarNavbar();
            $this->view("","minhas_compras", $listaCompras);
        }

        public function avaliar(){
            $this->carregarNavbar();
            $this->view("", "avaliar_compras");
        }

        public function avaliacao($id_compra){
            $this->carregarNavbar();
        }

        public function rastrearCompra($id_compra){
            $this->compra->setCodigo($id_compra);
            $rastrearCompra = $this->compra->rastrearCompra($this->compra);
            $this->carregarNavbar();
            $this->view("", "rastrear_compras", $rastrearCompra);
        }

    }

?>
