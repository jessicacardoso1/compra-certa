<?php

    namespace compra_certa\controller\produto;
    use compra_certa\controller\Controlador;
    use compra_certa\model\produto\Produto;

    class ControladorProduto extends Controlador{

        protected $produto;

        public function __construct(){
            $this->carregarNavbar();
            $this->produto = new Produto();
            
            if(count($this->parseUrl()) == 1){
                $this->view("", "produtos");
            }
        } 
        
        public function consultar(){
            $this->produto->setNome($_GET['produto']);
            $listaProdutos = $this->produto->consultarProdutos();
            
            $this->view("", "produtos", $listaProdutos);
        }

    }

?>