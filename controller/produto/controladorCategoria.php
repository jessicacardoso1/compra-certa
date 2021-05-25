<?php 

    require "../controlador.php";

    class ControladorCategoria extends Controlador{

        protected $categoria;

        public function __construct(){
            require $this->model("produto/", "categoria");
            $this->categoria = new Categoria();
        }
        
        public function processaListarAll(){
            $lista_categorias = $this->categoria->listarAll();

            require $this->view("", "navbar", $lista_categorias);
        }// FIM método

    }

    //$cn = new ControladorCategoria();
    //$cn->processaListarAll();

?>
