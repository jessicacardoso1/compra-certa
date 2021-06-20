<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\Compra;

    class ControladorPreparacao extends Controlador{

        protected $_compra;

        public function __construct(){
            
            $this->compra = new Compra;
            $list = $this->compra->listarComprasParaSetorPreparacao();
            
            $this->view("adm_screens/", "preparacao", $list);

        }

        public function enviarParaEmbalagem(){
            $this->compra->setCodigo($_POST['num_compra']);

            $setor = 2; # setor de embalagem
            $id_data_setores = $this->compra->inserirDataSetores($setor);
            $this->compra->inserirCompraHasDataSetores($this->compra, $id_data_setores);

            header('location: '.DIRACTION.'funcionario-preparacao');
        }

    }

?>