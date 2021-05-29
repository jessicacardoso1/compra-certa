<?php 

    namespace compra_certa\controller\produto;
    use compra_certa\controller\Controlador;
    use compra_certa\model\produto\Categoria;

    class ControladorCategoria extends Controlador{

        protected $categoria;

        public function __construct(){
            $this->categoria = new Categoria();
        }
        
        public function processaListarAll(){
            $this->view("", "navbar", $this->categoria->listarTodas());
        }

        public function processaQntProdutosPorCategoria(){
            #$this->paginaNaoEncontrada();
            $this->view("", "navbar", $this->categoria->getQntProdutosPorCategoria());
        }

    }

?>
