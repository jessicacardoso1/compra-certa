<?php

    namespace compra_certa\controller\produto;
    use compra_certa\controller\Controlador;
    use compra_certa\model\produto\Produto;

    class ControladorPoduto extends Controlador{

        protected $produto;

        public function __construct(){
            $this->produto = new Produto();
        }

        public function processaConsultarProdutos(){    
            $this->produto->setNome($_POST['nome_produto']);

            $listaProdutos = $this->produto->consultarProdutos();

            $this->view("", "produtos", $listaProdutos);
        }

    }

?>