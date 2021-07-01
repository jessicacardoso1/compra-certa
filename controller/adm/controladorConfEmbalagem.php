<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\Compra;
    
    class ControladorConfEmbalagem extends Controlador{

        protected $_compra;

        public function __construct(){
            $this->compra = new Compra;
            $list = $this->compra->listarComprasParaFuncionarios(2); # 1- setor conferencia

            $this->view("adm_screens/", "conf_embalagem", current($list));
        }

        public function enviarParaEntrega(){
            $this->compra->setCodigo($_POST['num_compra']);

            $setor = 3; # setor de entrega
            $id_data_setores = $this->compra->inserirDataSetores($setor);
            $this->compra->inserirCompraHasDataSetores($this->compra, $id_data_setores);

            echo "<script type='text/javascript'>window.top.location='".DIRACTION."funcionario-conferencia-embalagem';</script>"; exit;
        }

        public function retornarParaPreparacao(){
            $this->compra->setCodigo($_POST['num_compra']);

            $setor = 1; # setor de preparacao
            $id_data_setores = $this->compra->inserirDataSetores($setor);
            $this->compra->inserirCompraHasDataSetores($this->compra, $id_data_setores);

            echo "<script type='text/javascript'>window.top.location='".DIRACTION."funcionario-conferencia-embalagem';</script>"; exit;
        }

    }

?>