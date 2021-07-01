<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\Compra;

    class ControladorEntrega extends Controlador{

        protected $_compra;

        public function __construct(){
            $this->_compra = new Compra;

            $dados_compras = $this->_compra->getComprasSetorEntrega();

            $this->view("adm_screens/", "entrega", $dados_compras);
        }

        public function emAndamento(){
            $this->_compra->setCodigo($_POST['num_compra']);

            $setor = 4; # 4 -> setor entrega - em andamento
            $id_data_setores = $this->_compra->inserirDataSetores($setor);
            $this->_compra->inserirCompraHasDataSetores($this->_compra, $id_data_setores);

            echo "<script type='text/javascript'>window.top.location='".DIRACTION."funcionario-entrega';</script>"; exit;
        }

        public function entregar(){
            $this->_compra->setCodigo($_POST['num_compra']);

            $setor = 5; # 5 -> setor entrega - entregue
            $id_data_setores = $this->_compra->inserirDataSetores($setor);
            $this->_compra->inserirCompraHasDataSetores($this->_compra, $id_data_setores);

            echo "<script type='text/javascript'>window.top.location='".DIRACTION."funcionario-entrega';</script>"; exit;
        }

    }

?>