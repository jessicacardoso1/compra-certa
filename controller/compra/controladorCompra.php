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
            $this->avaliacao = new Avaliacao();
            $this->cliente->setCpf($_SESSION['usuario_logado']);
        }

        public function listarCompras(){
            $listaCompras = $this->compra->listarCompras($this->cliente);
            $this->carregarNavbar();
            $this->view("","minhas_compras", $listaCompras);
        }
        //Exibir a tela de avaliar
        public function avaliar($id_compra){
            $this->carregarNavbar();
            $this->view("", "avaliar_compras",$id_compra);
        }
        //Enviar a avaliação
        public function avaliarCompra(){
            $this->compra->setCodigo($_POST["idCompra"]);
            $this->avaliacao->setEstrelas($_POST["rating"]);
            $this->avaliacao->setTitulo($_POST["titulo"]);
            $this->avaliacao->setComentario($_POST["comentario"]);
            $this->compra->setAvaliacao($this->avaliacao);
            $this->compra->avaliarCompra($this->compra);
            header('location: '.DIRACTION.'compra/listarCompras');
        }

        public function rastrearCompra($id_compra){
            $this->compra->setCodigo($id_compra);
            $rastrearCompra = $this->compra->rastrearCompra($this->compra);
            $this->carregarNavbar();
            $this->view("", "rastrear_compras", $rastrearCompra);
        }

    }

?>
