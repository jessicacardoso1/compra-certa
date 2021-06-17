<?php

    namespace compra_certa\controller\adm;
    use compra_certa\controller\Controlador;
    use compra_certa\model\compra\Compra;

    class ControladorPreparacao extends Controlador{

        public function __construct(){
            
            $compra = new Compra;
            $list = $compra->listarComprasParaSetorPreparacao();
            
            $this->view("adm_screens/", "preparacao", $list);

        }

        public function enviarParaEmbalagem(){
            /* implementar a baixa da compra no setor de preparacao... */
            echo getDatetimeNow();
            echo '<br>';
            echo $_POST['num_compra'];
        }

    }

?>